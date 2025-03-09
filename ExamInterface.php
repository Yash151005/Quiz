<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exam</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #1F2D5A;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .exam-container {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: rgb(189, 215, 237);
            font-weight: bold;
        }

        h2 {
            color: #1F2D5A;
        }

        .timer {
            font-size: 16px;
            color: red;
            font-weight: bold;
        }

        .question {
            font-size: 20px;
            margin: 20px 0;
            text-align: left;
        }

        #question-container{
            text-align: left;
        }

        .options label {
            display: block;
            margin: 10px 0;
            font-size: 18px;
        }

        button {
            margin: 10px;
            padding: 6px 8px;
            border: none;
            background-color: #06227b;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #6378c5;
            color: black;
            transform: scale(1.1);
            transition: transform 0.1s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="exam-container">
        <h1>Online Exam</h1>
        <p class="timer" id="timer">Time Left: 10:00</p>

        <div id="question-container">
            <p class="question" id="question-text"></p>
            <div class="options" id="options-container"></div>
        </div>

        <button id="prev-btn" onclick="prevQuestion()">Previous</button>
        <button id="next-btn" onclick="nextQuestion()">Next</button>
        <button id="submit-btn" onclick="submitExam()">Submit Exam</button>
    </div>

    <script>
        const questions = [
            { question: "What is the capital of France?", options: ["Paris", "London", "Berlin", "Rome"], answer: "Paris" },
            { question: "What is 5 + 3?", options: ["5", "8", "12", "15"], answer: "8" },
            { question: "Which planet is known as the Red Planet?", options: ["Earth", "Mars", "Jupiter", "Venus"], answer: "Mars" }
        ];

        let currentQuestionIndex = 0;
        let selectedAnswers = {};

        function loadQuestion() {
            const questionData = questions[currentQuestionIndex];
            document.getElementById("question-text").innerText = questionData.question;
            const optionsContainer = document.getElementById("options-container");
            optionsContainer.innerHTML = "";
            questionData.options.forEach(option => {
                const label = document.createElement("label");
                label.innerHTML = `<input type="radio" name="answer" value="${option}"> ${option}`;
                optionsContainer.appendChild(label);
            });
            updateButtonVisibility();
        }

        function updateButtonVisibility() {
            document.getElementById("prev-btn").style.display = currentQuestionIndex === 0 ? "none" : "inline-block";
            document.getElementById("next-btn").style.display = currentQuestionIndex === questions.length - 1 ? "none" : "inline-block";
        }

        function nextQuestion() {
            saveAnswer();
            if (currentQuestionIndex < questions.length - 1) {
                currentQuestionIndex++;
                loadQuestion();
            }
        }

        function prevQuestion() {
            saveAnswer();
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                loadQuestion();
            }
        }

        function saveAnswer() {
            const selectedOption = document.querySelector('input[name="answer"]:checked');
            if (selectedOption) {
                selectedAnswers[currentQuestionIndex] = selectedOption.value;
            }
        }

        function submitExam() {
            saveAnswer();
            if (Object.keys(selectedAnswers).length < questions.length) {
                alert("Please answer all questions before submitting.");
                return;
            }
            if (confirm("Are you sure you want to submit the exam?")) {
                localStorage.setItem("selectedAnswers", JSON.stringify(selectedAnswers));
                localStorage.setItem("questions", JSON.stringify(questions));
                window.location.href = "display_result.html";
            }
        }

        function startTimer(duration) {
            let timer = duration, minutes, seconds;
            const timerElement = document.getElementById("timer");
            const interval = setInterval(function () {
                minutes = Math.floor(timer / 60);
                seconds = timer % 60;
                seconds = seconds < 10 ? "0" + seconds : seconds;
                timerElement.innerText = `Time Left: ${minutes}:${seconds}`;
                if (--timer < 0) {
                    clearInterval(interval);
                    alert("Time is up! Submitting exam...");
                    submitExam();
                }
            }, 1000);
        }

        window.onload = function () {
            loadQuestion();
            startTimer(600);
        };
    </script>
</body>
</html>