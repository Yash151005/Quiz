<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="Studentform.css">
    <script>
        function addExamField() {
    var container = document.getElementById("exam-container");
    var div = document.createElement("div");
    div.className = "exam-field";

    var input = document.createElement("input");
    input.type = "text";
    input.name = "exams";
    input.className = "exam-input";
    input.placeholder = "Enter exam name";
    input.required = true;

    var removeBtn = document.createElement("button");
    removeBtn.type = "button";
    removeBtn.className = "remove-exam-btn";
    removeBtn.innerHTML = "✖";
    removeBtn.onclick = function () {
        container.removeChild(div);
    };

    div.appendChild(input);       /* Input first */
    div.appendChild(removeBtn);   /* Remove button next */
    container.appendChild(div);
}
            var input = document.createElement("input");
            input.type = "text";
            input.name = "exams";
            input.className = "exam-input";
            input.placeholder = "Enter exam name";
            input.required = true;

            div.appendChild(removeBtn);  /* Place button first */
            div.appendChild(input);       /* Then input field */
            container.appendChild(div);
        
    </script>
</head>
<body>
    <div class="container">
        <h2>Manage Student Accounts</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label>Assigned Exams:</label>
            <div id="exam-container">
                <div class="exam-field">
                    <input type="text" name="exams" class="exam-input" placeholder="Enter exam name" required>
                </div>
            </div>
            <button type="button" class="add-exam-btn" onclick="addExamField()">Add Exam</button>

            <button type="submit" class="submit-btn">Add Student</button>
            <button type="submit" class="remove-btn">Remove Student</button>
        </form>
    </div>
</body>
</html>