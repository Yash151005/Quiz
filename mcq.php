<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add/Remove Exam with MCQs</title>
    <link rel="stylesheet" href="mcq.css">
</head>
<body>

    <div class="form-container">
        <h2>MCQ Question</h2>
        <form action="#" method="post">
           

            <!-- MCQ Question Fields -->
            <div class="form-section">
               
                <div class="form-group">
                    <label for="question-text">Question Text</label>
                    <input type="text" id="question-text" name="question-text" required>
                </div>

                <div class="form-group">
                    <label for="option1">Option 1</label>
                    <input type="text" id="option1" name="option1" required>
                </div>

                <div class="form-group">
                    <label for="option2">Option 2</label>
                    <input type="text" id="option2" name="option2" required>
                </div>

                <div class="form-group">
                    <label for="option3">Option 3</label>
                    <input type="text" id="option3" name="option3" required>
                </div>

                <div class="form-group">
                    <label for="option4">Option 4</label>
                    <input type="text" id="option4" name="option4" required>
                </div>

                <div class="form-group">
                    <label for="correct-option">Correct Option</label>
                    <select id="correct-option" name="correct-option" required>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                        <option value="option4">Option 4</option>
                    </select>
                </div>
            </div>

            <!-- Buttons -->
            <div class="form-buttons">
                <button type="submit">Add Question</button>
                <button type="button" class="remove-btn">Remove Question</button>
            </div>
        </form>
    </div>

</body>
</html>