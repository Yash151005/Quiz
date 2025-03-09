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
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if Aadhar already exists in the database
    $sql_check = "SELECT * FROM student WHERE aadhar = '$aadhar'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        echo "<script>alert('Aadhar Number already exists. Please try again with a different one.');</script>";
    } else {
        // Insert student data into the table
        $sql_insert = "INSERT INTO student (name, aadhar, email, phone, branch, year, username, password, entered_date_time)
                       VALUES ('$name', '$aadhar', '$email', '$phone', '$branch', '$year', '$username', '$password', CURRENT_TIMESTAMP)";

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
    <title>Student Registration</title>
    <link rel="stylesheet" href="Studentpage.css">
    <script>
        let captchaText = '';

        function generateCaptcha() {
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            captchaText = '';
            for (let i = 0; i < 6; i++) {
                captchaText += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById('captcha-box').textContent = captchaText; // Set captcha in span
        }

        function validateCaptcha() {
            const userInput = document.getElementById('captcha-input').value;
            if (userInput !== captchaText) {
                alert('Captcha does not match. Please try again.');
                generateCaptcha(); // Refresh captcha on failure
                return false;
            }
            return true;
        }

        window.onload = generateCaptcha; // Generate captcha on page load
    </script>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container">
        <h2>Student Registration</h2>
        <form method="POST" onsubmit="return validateCaptcha()">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Full Name" required>

            <label for="aadhar">Aadhar Number</label>
            <input type="text" id="aadhar" name="aadhar" placeholder="Enter Aadhar Number" maxlength="12" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email" required>

            <label for="phone">Phone No.</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" required>

            <label for="branch">Select Branch:</label>
            <select id="branch" name="branch" required>
                <option value="" disabled selected>Select your branch</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Information Technology">Information Technology</option>
            </select>

            <label>Select Year:</label>
            <div>
                <input type="radio" id="year1" name="year" value="1st-year" required>
                <label for="year1">1st Year</label>
            </div>
            <div>
                <input type="radio" id="year2" name="year" value="2nd-year">
                <label for="year2">2nd Year</label>
            </div>
            <div>
                <input type="radio" id="year3" name="year" value="3rd-year">
                <label for="year3">3rd Year</label>
            </div>
            <div>
                <input type="radio" id="year4" name="year" value="4th-year">
                <label for="year4">4th Year</label>
            </div>  

            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter Username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>

            <!-- CAPTCHA Section -->
            <div class="captcha">
                <span id="captcha-box" class="captcha-box"></span>
                <input type="text" id="captcha-input" placeholder="Enter Captcha" required>
                <button type="button" class="refresh-btn" onclick="generateCaptcha()">⟳</button>
            </div>

            <button type="submit" class="login-btn">Register</button>

            <p class="signup-link">Already have an account? 
            <br>
            <a href="Studentlogin.php">Login here</a></p>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
