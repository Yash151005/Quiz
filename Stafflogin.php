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

// Function to generate a random captcha
function generateCaptcha() {
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $captcha = '';
    for ($i = 0; $i < 6; $i++) {
        $captcha .= $chars[rand(0, strlen($chars) - 1)];
    }
    $_SESSION['captcha'] = $captcha;
}

// Generate a new CAPTCHA if not set or when refreshed
if (!isset($_SESSION['captcha']) || (isset($_GET['action']) && $_GET['action'] == 'refresh')) {
    generateCaptcha();
    if (isset($_GET['action']) && $_GET['action'] == 'refresh') {
        echo $_SESSION['captcha'];
        exit();
    }
}

$error_message = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $captcha_input = trim($_POST['captcha-input']);

    // Check CAPTCHA
    if ($captcha_input !== $_SESSION['captcha']) {
        $error_message = "Incorrect Captcha. Try again!";
    } else {
        // Sanitize user inputs for security
        $username = mysqli_real_escape_string($conn, $username);

        // Validate username
        $stmt = $conn->prepare("SELECT * FROM staff WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Check password (compare plain-text password)
            if ($password === $user['password']) {
                $_SESSION['name'] = $user['name'];
                header("Location: faculty_dashboard.php");
                exit();
            } else {
                $error_message = "Invalid password. Please check again.";
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
    <title>Staff Login</title>
    <link rel="stylesheet" href="adminlogin.css">
    <script>
        function generateCaptcha() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'stafflogin.php?action=refresh', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('captcha-box').textContent = xhr.responseText;
                    document.getElementById('captcha-input').value = '';
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h2>Staff Login</h2>
        <?php if (!empty($error_message)): ?>
            <p style="color: red;"> <?php echo $error_message; ?> </p>
        <?php endif; ?>
        <form action="stafflogin.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="example@gmail.com" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Strong Password" required>
            
            <div class="captcha">
                <br/>
                <span id="captcha-box" class="captcha-box">
                    <?php echo $_SESSION['captcha']; ?>
                </span>
                <input type="text" id="captcha-input" name="captcha-input" placeholder="Enter Captcha" required>
                <button type="button" onclick="generateCaptcha()">⟳</button>
            </div>
            
            <button type="submit">Login</button>
            <p class="signup-link">Don't have an account? <br>
            <a href="Staffsignup.php">Sign up here</a></p>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
