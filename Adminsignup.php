<?php
// Connection to database
$servername = "localhost";
$username = "root";
$password = "Pass@1234"; // Your database password
$dbname = "Quiz"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dateTime = date("Y-m-d H:i:s"); // Get current date and time in PHP

    // Check if Username already exists in the database
    $sql_check = "SELECT * FROM admin WHERE username = '$username'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        echo "<script>alert('Username already exists. Please try again with a different one.');</script>";
    } else {
        // Insert admin data into the table
        $sql_insert = "INSERT INTO admin (name, email, phone, username, password, entered_date_time)
                       VALUES ('$name', '$email', '$phone', '$username', '$password', '$dateTime')";

        if ($conn->query($sql_insert) === TRUE) {
            echo "<script>alert('Registration successful!'); window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="Adminpage.css">
    <script>
        let captchaText = "";

        function generateCaptcha() {
            const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            captchaText = "";
            for (let i = 0; i < 6; i++) {
                captchaText += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById("captcha-box").innerText = captchaText;
        }

        function validateCaptcha() {
            const userInput = document.getElementById("captcha-input").value.trim();
            if (userInput !== captchaText) {
                alert("Captcha does not match. Please try again.");
                generateCaptcha(); // Refresh captcha on failure
                return false;
            }
            return true;
        }

        window.onload = function() {
            generateCaptcha();
        };
    </script>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container">
        <h2>Admin Registration</h2>
        <form method="POST" onsubmit="return validateCaptcha()">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Full Name" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email" required>
            
            <label for="phone">Phone No.</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" required>
            
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter Username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>
            
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
            
            <div class="captcha">
                <span id="captcha-box" class="captcha-box"></span>
                <button type="button" class="refresh-btn" onclick="generateCaptcha()">⟳</button>
                <br><br>
                <input type="text" id="captcha-input" placeholder="Enter Captcha" required>
            </div>

            <button type="submit" class="login-btn">Register</button>

            <p class="signup-link">Already have an account? 
            <br>
            <a href="Adminlogin.php">Login here</a></p>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
