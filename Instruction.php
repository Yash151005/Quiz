<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Instructions</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #1F2D5A;
            text-align: center;
            color: white;
            margin: 0;
            padding: 0;
        }

        .instructions-container {
            width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: rgb(189, 215, 237);
            color: black;
            font-weight: bold;
        }

        h2 {
            color: #1F2D5A;
        }

        ul {
            text-align: left;
            margin: 20px auto;
            width: 80%;
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
    <div class="instructions-container">
        <h2>Exam Instructions</h2>
        <ul>
            <li>The exam consists of multiple-choice questions.</li>
            <li>You have a limited time to complete the exam.</li>
            <li>Once submitted, answers cannot be changed.</li>
            <li>Ensure a stable internet connection before starting.</li>
            <li>Click "Start Exam" to begin.</li>
        </ul>
        <button onclick="window.location.href='exam_interface.html'">Start Exam</button>
    </div>
</body>
</html>