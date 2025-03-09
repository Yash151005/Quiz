<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <footer>
        <li><a href="#" class="content" id="feedback">Feedback</a></li>

        <div id="feedbackPopup" class="popup">
            <div class="popup-content">
                <span class="close-btn" id="closePopup">&times;</span>
                <h2>Feedback</h2>

                <form id="feedbackForm" name="feedbackForm">
                    <label for="fullName">Full Name:</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Enter your name">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email">

                    <label for="phone">Phone:</label>
                    <input type="number" id="phone" name="phone" placeholder="Enter your phone number">

                    <label for="feedbackDesc">Feedback:</label>
                    <textarea id="feedbackDesc" name="feedbackDesc" placeholder="Enter your feedback here..."></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </footer>
</body>
</html>