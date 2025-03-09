<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Learning Material</title>
    <link rel="stylesheet" href="learning.css">
</head>
<body>

    <div class="form-container">
        <h2>Upload Learning Material</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="subject">Select Subject</label>
                <select id="subject" name="subject" required>
                    <option value="" disabled selected>Select Subject</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Physics">Physics</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Biology">Biology</option>
                </select>
            </div>

            <div class="form-group">
                <label for="file-upload">Upload File</label>
                <input type="file" id="file-upload" name="file-upload" accept=".pdf,.doc,.docx,.ppt,.pptx" required>
            </div>

            <button type="submit">Upload</button>
        </form>
    </div>

</body>
</html>