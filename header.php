<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTech Header</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script> <!-- Use 'defer' to ensure script execution after DOM loads -->
</head>

<body>
    <header>
        <div class="header_top">
            <h1 class="logo">EduTech</h1>
            <div class="info">
                <span><a href="mailto:learn@edutech.com">Email: learn@edutech.com</a></span>
                <span class="gap">|</span>
                <span><a href="tel:+911111111111">Phone: +911111111111</a></span>
            </div>
        </div>
        <nav>
            <ul class="links">
                <li><a href="index.php" class="content" id="home">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Login ▼</a>
                    <div class="dropdown-content">
                        <a href="Studentlogin.php">Student Login</a>
                        <a href="Stafflogin.php">Teacher Login</a>
                        <a href="Adminlogin.php">Admin Login</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Sign-up ▼</a>
                    <div class="dropdown-content">
                        <a href="Studentsignup.php">Student Sign-up</a>
                        <a href="Staffsignup.php">Teacher Sign-up</a>
                        <a href="Adminsignup.php">Admin Sign-up</a>
                    </div>
                </li>
                <li><a href="aboutus.php" class="content" id="about">About Us</a></li>
                <li><a href="contactus.php" class="content" id="contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>
