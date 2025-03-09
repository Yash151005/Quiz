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
    $aadhar = $_POST['aadhar'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dateTime = date("Y-m-d H:i:s"); // Get current date and time in PHP

    // Check if Aadhar already exists in the database
    $sql_check = "SELECT * FROM staff WHERE aadhar = '$aadhar'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        echo "<script>alert('Aadhar Number already exists. Please try again with a different one.');</script>";
    } else {
        // Insert staff data into the table
        $sql_insert = "INSERT INTO staff (name, aadhar, email, phone, username, password, entered_date_time)
                       VALUES ('$name', '$aadhar', '$email', '$phone', '$username', '$password', '$dateTime')";

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
    <title>Staff Registration</title>
    <link rel="stylesheet" href="Staffpage.css">
    <script>
        let captchaText = "";

        function generateCaptcha() {
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            captchaText = '';
            for (let i = 0; i < 6; i++) {
                captchaText += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById('captcha-box').innerText = captchaText;
            document.getElementById('captcha-box').style.display = 'inline-block'; // Ensure visibility
        }

        function validateCaptcha() {
            const userInput = document.getElementById('captcha-input').value.trim();
            if (userInput === '') {
                alert('Please enter the captcha.');
                return false;
            }
            if (userInput !== captchaText) {
                alert('Captcha does not match. Please try again.');
                generateCaptcha(); // Regenerate on failure
                return false;
            }
            return true;
        }

        window.onload = generateCaptcha; // Ensure captcha is generated when the page loads
    </script>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container">
        <h2>Staff Registration</h2>
        <form method="POST" onsubmit="return validateCaptcha()">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Full Name" required>
            
            <label for="aadhar">Aadhar Number</label>
            <input type="text" id="aadhar" name="aadhar" placeholder="Enter Aadhar Number" maxlength="12" required>
            
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
                <input type="text" id="captcha-input" placeholder="Enter Captcha" required>
                <button type="button" class="refresh-btn" onclick="generateCaptcha()">⟳</button>
                <br><br>
                <span id="captcha-box" class="captcha-box" style="border: 1px solid #000; padding: 5px; font-weight: bold;"></span>
            </div>

            <button type="submit" class="login-btn">Register</button>

            <p class="signup-link">Already have an account? 
            <br>
            <a href="Stafflogin.php">Login here</a></p>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
