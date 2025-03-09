<?php
// Start the session
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = "Pass@1234";
$dbname = "Quiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to generate a random CAPTCHA and store it in session
function generateCaptcha() {
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $captcha = '';
    for ($i = 0; $i < 6; $i++) {
        $captcha .= $chars[rand(0, strlen($chars) - 1)];
    }
    $_SESSION['captcha'] = $captcha; // Store in session
}

// Generate a new CAPTCHA if not set or refresh requested
if (!isset($_SESSION['captcha'])) {
    generateCaptcha();
}

// Handle CAPTCHA refresh via AJAX
if (isset($_POST['refresh_captcha'])) {
    generateCaptcha();
    echo $_SESSION['captcha'];
    exit;
}

// Error message initialization
$error_message = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['refresh_captcha'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $captcha_input = trim($_POST['captcha-input']);

    // Check if CAPTCHA is correct
    if ($captcha_input !== $_SESSION['captcha']) {
        $error_message = "Incorrect CAPTCHA. Try again!";
        generateCaptcha(); // Regenerate a new CAPTCHA
    } else {
        // Sanitize user input
        $username = mysqli_real_escape_string($conn, $username);

        // Validate username
        $stmt = $conn->prepare("SELECT * FROM student WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Check if password is hashed or plain text
            if (password_verify($password, $user['password']) || $password === $user['password']) {
                $_SESSION['name'] = $user['name']; // Save username in session
                header("Location: student_dashboard.php"); // Redirect to dashboard
                exit();
            } else {
                $error_message = "Invalid password. Please try again.";
            }
        } else {
            $error_message = "Username does not exist.";
        }
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="Adminlogin.css">
    <script>
        // Function to refresh CAPTCHA using AJAX
        function refreshCaptcha() {
            fetch("studentlogin.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "refresh_captcha=1"
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('captcha-box').innerText = data;
            });
        }
    </script>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h2>Student Login</h2>
        <!-- Display error message if any -->
        <?php if (!empty($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <!-- Login form -->
        <form action="studentlogin.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="parag@gmail.com" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>

            <div class="captcha">
                <input type="text" id="captcha-input" name="captcha-input" placeholder="Enter Captcha" required>
                <span id="captcha-box" class="captcha-box"><?php echo $_SESSION['captcha']; ?></span>
                <button type="button" onclick="refreshCaptcha()">⟳</button>
            </div>

            <button type="submit">Login</button>
            <p class="signup-link">Don't have an account?<br><a href="Studentsignup.php">Sign up here</a></p>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
