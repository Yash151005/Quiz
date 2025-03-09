<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1F2D5A;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1, h2 {
            text-align: center;
            color: #007bff;
        }

        p {
            text-align: center;
            color: #333;
        }

        .contact-info {
            padding: 15px;
            background: #f9f9f9;
            border-radius: 5px;
            margin: 20px 0;
            text-align: center;
        }

        .contact-info p {
            margin: 10px 0;
            font-size: 16px;
        }

        .contact-info a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .contact-info a:hover {
            text-decoration: underline;
            color: #0056b3;
        }

        .contact-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        .submit-btn {
            background: #007bff;
            color: white;
            padding: 10px 15px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }

        .submit-btn:hover {
            background: #0056b3;
        }

    </style>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container">
        <h1>Contact Us</h1>
        <p>Have questions? Reach out to us! Our platform combines Google Classroom, Google Forms, and a College Website for seamless academic management.</p>

        <div class="contact-info">
            <h2>Our Contact Details</h2>
            <p>📍 <strong>Address:</strong> 
                <a href="https://www.google.com/maps?q=VIIT+Pune" target="_blank">
                    ABCDEFG
                </a>
            </p>
            <p>📧 <strong>Email:</strong> 
                <a href="mailto:learn@edutech.com">
                    learn@edutech.com
                </a>
            </p>
            <p>📞 <strong>Phone:</strong> 
                <a href="tel:+911111111111">
                    +91-1111111111
                </a>
            </p>
        </div>

        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea placeholder="Write your message here" required></textarea>
                </div>

                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>