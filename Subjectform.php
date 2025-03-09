<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject Management Form</title>
    <link rel="stylesheet" href="Subjectform.css">
</head>
<body>

    <div class="form-container">
        <h2>Subject Management Form</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="subject-name">Subject Name</label>
                <input type="text" id="subject-name" name="subject-name" required>
            </div>

            <div class="form-group">
                <label for="subject-code">Subject Code</label>
                <input type="text" id="subject-code" name="subject-code" required>
            </div>

            <div class="form-group">
                <label for="assigned-faculty">Assigned Faculty</label>
                <input type="text" id="assigned-faculty" name="assigned-faculty" required>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>