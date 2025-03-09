<?php
// db_connection.php - Database connection
session_start();
if (isset($_POST['logout'])) {
    // Destroy the session to log out
    session_destroy();
    header('Location: index.php'); // Redirect to login page
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="student_dashboard.css">
</head>
<body>
    <header>
        <div class="header_top">
            <h1 class="logo">EduTech</h1>
        </div>
        <button class="logout-btn" onclick="logout()">Logout</button>
    </header>

    <div class="dashboard-container">
        <nav class="sidebar">
            <h2>Student Panel</h2>
            <ul>
                <li onclick="showSection('exam-selection')">Exam Selection</li>
                <li onclick="showSection('exam-history')">Exam History</li>
                <li onclick="showSection('learning-material')">Learning Materials</li>
            </ul>
        </nav>

        <div class="main-content">
            <!-- Exam Selection Section -->
            <section id="exam-selection" class="section active">
                <h2>Exam Selection</h2>

                <label for="subject-filter">Filter by Subject:</label>
                <select id="subject-filter" onchange="filterExams()">
                    <option value="all">All</option>
                    <option value="Math">Math</option>
                    <option value="Science">Science</option>
                    <option value="English">English</option>
                </select>

                <label for="difficulty-filter">Filter by Difficulty:</label>
                <select id="difficulty-filter" onchange="filterExams()">
                    <option value="all">All</option>
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>

                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Subject</th>
                            <th>Difficulty</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="exam-list">
                        <tr data-subject="Math" data-difficulty="Easy">
                            <td>Algebra Quiz</td>
                            <td>2025-04-05</td>
                            <td>Math</td>
                            <td>Easy</td>
                            <td><button>Register</button></td>
                        </tr>
                        <tr data-subject="Science" data-difficulty="Medium">
                            <td>Physics Test</td>
                            <td>2025-04-10</td>
                            <td>Science</td>
                            <td>Medium</td>
                            <td><button>Register</button></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Exam History Section -->
            <section id="exam-history" class="section">
                <h2>Exam History</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Score</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="history-list">
                        <tr>
                            <td>Midterm Exam</td>
                            <td>2025-03-15</td>
                            <td>85%</td>
                            <td style="color: green;">Pass</td>
                        </tr>
                        <tr>
                            <td>English Grammar Test</td>
                            <td>2025-03-05</td>
                            <td>45%</td>
                            <td style="color: red;">Fail</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Learning Materials Section -->
            <section id="learning-material" class="section">
                <h2>Learning Material</h2>
                <ul id="file-list">
                    <li>Algebra Notes.pdf <a href="#" download>Download</a></li>
                    <li>Physics Concepts.docx <a href="#" download>Download</a></li>
                </ul>
            </section>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 EduTech. All Rights Reserved.</p>
    </footer>

    <script>
        function showSection(sectionId) {
            document.querySelectorAll('.section').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(sectionId).classList.add('active');
        }

        function filterExams() {
            let subjectFilter = document.getElementById("subject-filter").value;
            let difficultyFilter = document.getElementById("difficulty-filter").value;

            document.querySelectorAll("#exam-list tr").forEach(row => {
                let subject = row.getAttribute("data-subject");
                let difficulty = row.getAttribute("data-difficulty");

                let subjectMatch = (subjectFilter === "all" || subject === subjectFilter);
                let difficultyMatch = (difficultyFilter === "all" || difficulty === difficultyFilter);

                if (subjectMatch && difficultyMatch) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }

        function logout() {
            if (confirm('Are you sure you want to log out?')) {
                // Create a form dynamically to submit the logout request
                var form = document.createElement('form');
                form.method = 'POST';
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'logout';
                form.appendChild(input);
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>

</body>
</html>
