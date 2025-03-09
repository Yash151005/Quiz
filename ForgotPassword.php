<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #1F2D5A;
        }

        .reset_box {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 15px rgb(65, 65, 65);
            border-radius: 8px;
            background-color: rgb(189, 215, 237);
            text-align: center;
        }
        p{
            font-size: 15px;
        }

        h3 {
            color: rgb(4, 4, 95);
            font-weight: bolder;
        }

        input {
            width: 90%;
            border-radius: 7px;
            border: solid 0.2px rgb(90, 89, 89);
            height: 25px;
            padding: 5px;
            margin-top: 10px;
        }

        button {
            width: 100px;
            height: 35px;
            border-radius: 6px;
            border: none;
            background-color: rgb(4, 4, 95);
            color: #f4f4f4;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover {
            background-color: rgb(103, 103, 214);
            color: black;
            transform: scale(1.1);
            transition: transform 0.1s ease-in-out;
        }

        .back-link {
            display: block;
            margin-top: 15px;
            text-decoration: none;
            color: rgb(4, 4, 95);
            font-weight: bold;
        }

        .back-link:hover {
            color: rgb(103, 103, 214);
            cursor: pointer;
        }
    </style>
    <script>
        function goBack() {
            const urlParams = new URLSearchParams(window.location.search);
            const from = urlParams.get('from');

            if (from === "student") {
                window.location.href = "student_login.html";
            } else if (from === "admin") {
                window.location.href = "admin_login.html";
            } else if (from === "teacher") {
                window.location.href = "teacher_login.html";
            }
        }
    </script>
</head>
<body>
    <div class="reset_box">
        <h3>Forgot Password</h3>
        <p>Enter your email address, and we'll send you a link to reset your password.</p>
        <form action="reset_password.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" placeholder="Enter your password here !" id="email" name="email" required>
            <br>
            <button type="submit">Reset</button>
        </form>
        <a  onclick="goBack()" class="back-link">← Back to Login</a>
    </div>
</body>
</html>