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

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $captcha_input = trim($_POST['captcha-input']);

    // Check CAPTCHA
    if ($captcha_input !== $_SESSION['captcha']) {
        echo "<script>alert('Incorrect Captcha. Try again!'); window.location='adminlogin.php';</script>";
        exit();
    }

    // Validate username and password
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($password === $user['password']) { // Plain text password comparison
            $_SESSION['name'] = $user['name']; // Set session with admin's username
            header("Location: Admin.php");
            exit();
        } else {
            echo "<script>alert('Invalid password. Please check again.'); window.location='adminlogin.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Username does not exist.'); window.location='adminlogin.php';</script>";
        exit();
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="Adminlogin.css">
    <script>
        function generateCaptcha() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'adminlogin.php?action=refresh', true);
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
        <h2>Admin Login</h2>
        <form action="adminlogin.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="example@gmail.com" required>

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
            <a href="adminsignup.php">Sign up here</a></p>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
