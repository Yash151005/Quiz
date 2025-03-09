<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Management</title>
    <link rel="stylesheet" href="AdminFaculty.css">
    <script>
        function addSubjectField() {
            var container = document.getElementById("subject-container");
            var input = document.createElement("input");
            input.type = "text";
            input.name = "subjects";
            input.placeholder = "Enter subject";
            input.required = true;
            container.appendChild(input);
        }
    </script>
</head>
<body>
    <div class="container">
        <h2><center>Manage Faculty Accounts</center></h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label>Assigned Subjects:</label>
            <div id="subject-container">
                <input type="text" name="subjects" placeholder="Enter subject" required>
            </div>
            <button type="button" onclick="addSubjectField()">Add Subject</button>

            <button type="submit">Add Faculty</button>
            <button type="submit" class="remove-btn">Remove Faculty</button>
        </form>
    </div>
</body>
</html>