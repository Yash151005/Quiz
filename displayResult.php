<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Result</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            background-color: #1F2D5A;
            color: white;
            margin: 0;
            padding: 0;
        }

        .result-container {
            width: 500px;
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

        .pass {
            color: green;
            font-size: 20px;
        }

        .fail {
            color: red;
            font-size: 20px;
        }

        .question-result {
            text-align: left;
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background: white;
            border-radius: 5px;
        }

        .correct-answer {
            color: green;
            font-weight: bold;
        }

        .incorrect-answer {
            color: red;
            font-weight: bold;
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
    <div class="result-container">
        <h2>Exam Result</h2>
        <p id="score"></p>
        <p id="status"></p>

        <div id="question-results"></div>

        <button onclick="window.location.href='exam_interface.html'">Retake Exam</button>
    </div>

    <script>
        // Get stored data from localStorage
        const questions = JSON.parse(localStorage.getItem("questions"));
        const selectedAnswers = JSON.parse(localStorage.getItem("selectedAnswers"));
        let correctCount = 0;

        // Display results
        const resultContainer = document.getElementById("question-results");
        resultContainer.innerHTML = ""; 

        questions.forEach((q, i) => {
            const userAnswer = selectedAnswers[i] || "No Answer"; // Default if unanswered
            const isCorrect = userAnswer === q.answer;

            if (isCorrect) correctCount++;

            const questionDiv = document.createElement("div");
            questionDiv.classList.add("question-result");
            questionDiv.innerHTML = `
                <p><strong>Q${i + 1}: ${q.question}</strong></p>
                <p>Your Answer: <span class="${isCorrect ? 'correct-answer' : 'incorrect-answer'}">${userAnswer}</span></p>
                <p>Correct Answer: <span class="correct-answer">${q.answer}</span></p>
            `;
            resultContainer.appendChild(questionDiv);
        });

        // Display final score and status
        document.getElementById("score").innerText = `Score: ${correctCount} / ${questions.length}`;
        document.getElementById("status").innerText = correctCount >= 2 ? "Pass" : "Fail";
        document.getElementById("status").classList.add(correctCount >= 2 ? "pass" : "fail");
    </script>
</body>
</html>