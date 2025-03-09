<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #1F2D5A;
            text-align: center;
            color: white;
            margin: 0;
            padding: 0;
        }

        .error-container {
            width: 500px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: rgb(189, 215, 237);
            color: black;
            font-weight: bold;
        }

        h3 {
            color: red;
        }

        button {
            margin-top: 20px;
            padding: 10px;
            border: none;
            background-color: #06227b;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #6378c5;
            color: black;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h3>404 - Page Not Found</h3>
        <p>Oops! The page you're looking for doesn't exist.</p>
        <button onclick="window.location.href='index.html'">Go to Home</button>
    </div>
</body>
</html>