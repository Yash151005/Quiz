<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add/Remove Exam</title>
    <link rel="stylesheet" href="exams.css">
</head>
<body>

    <div class="form-container">
        <h2>Add/Remove Exam</h2>
        <form action="#" method="post">
            <!-- Exam Name -->
            <div class="form-group">
                <label for="exam-name">Exam Name</label>
                <input type="text" id="exam-name" name="exam-name" required>
            </div>

            <!-- Subject -->
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>

            <!-- Date -->
            <div class="form-group">
                <label for="exam-date">Date</label>
                <input type="date" id="exam-date" name="exam-date" required>
            </div>

            <!-- Duration -->
            <div class="form-group">
                <label for="duration">Duration (in minutes)</label>
                <input type="number" id="duration" name="duration" min="1" required>
            </div>

            <!-- Difficulty -->
            <div class="form-group">
                <label for="difficulty">Difficulty</label>
                <select id="difficulty" name="difficulty" required>
                    <option value="Easy">Easy</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Hard">Hard</option>
                </select>
            </div>

            <!-- Pass Marks -->
            <div class="form-group">
                <label for="pass-marks">Pass Marks</label>
                <input type="number" id="pass-marks" name="pass-marks" min="1" required>
            </div>

            <!-- Total Questions -->
            <div class="form-group">
                <label for="total-questions">Total Questions</label>
                <input type="number" id="total-questions" name="total-questions" min="1" required>
            </div>

            <!-- Buttons -->
            <div class="form-buttons">
                <button type="submit">Add Exam</button>
                <button type="button" class="remove-btn">Remove Exam</button>
            </div>
        </form>
    </div>

</body>
</html>