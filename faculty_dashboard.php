<?php
session_start();
error_reporting(0);
include('db_connection.php'); // Include your database connection

// Handle Logout
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
    // Assuming user_id is stored in the session after login
    $user_id = $_SESSION['user_id'];

    // Delete user data from the database (make sure to change the table and column names as per your database schema)
    $query = "DELETE FROM user_data WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();

    // Destroy the session
    session_unset();
    session_destroy();

    // Return a response to indicate success
    echo "Logout successful";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="faculty_dashboard.css">
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
            <h2>Faculty Panel</h2>
            <ul>
                <li onclick="showSection('exam-management')">Exam Management</li>
                <li onclick="showSection('performance-analytics')">Performance Analytics</li>
                <li onclick="showSection('learning-material')">Learning Materials</li>
            </ul>
        </nav>

        <div class="main-content">
            <section id="exam-management" class="section active">
                <h2>Exam Management</h2>
                <button onclick="openModal('exam-modal')">Add Exam</button>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Subject</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="exam-list">
                        <tr>
                            <td>Midterm Exam</td>
                            <td>2025-04-10</td>
                            <td>Math</td>
                            <td>
                                <button onclick="editExam(this)">Edit</button>
                                <button onclick="removeExam(this)">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section id="performance-analytics" class="section">
                <h2>Performance Analytics</h2>
                <canvas id="performanceChart"></canvas>
            </section>

            <section id="learning-material" class="section">
                <h2>Learning Material</h2>
                <input type="file" id="file-input">
                <button onclick="uploadFile()">Upload</button>
                <ul id="file-list">
                    <li>Lecture Notes.pdf <button onclick="removeFile(this)">Delete</button></li>
                </ul>
            </section>
        </div>
    </div>

    <!-- Add/Edit Exam Modal -->
    <div id="exam-modal" class="modal">
        <div class="modal-content">
            <h3 id="modal-title">Add Exam</h3>
            <label>Title:</label>
            <input type="text" id="exam-title">
            <label>Date:</label>
            <input type="date" id="exam-date">
            <label>Subject:</label>
            <input type="text" id="exam-subject">
            <button id="save-exam" onclick="addExam()">Add</button>
            <button onclick="closeModal('exam-modal')">Close</button>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 EduTech. All Rights Reserved.</p>
    </footer>

    <script>
        let editingRow = null;

        function showSection(sectionId) {
            document.querySelectorAll('.section').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(sectionId).classList.add('active');
        }

        function openModal(modalId) {
            document.getElementById(modalId).style.display = "flex";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
            document.getElementById("modal-title").textContent = "Add Exam";
            document.getElementById("save-exam").textContent = "Add";
            editingRow = null;
        }

        function addExam() {
            const title = document.getElementById("exam-title").value;
            const date = document.getElementById("exam-date").value;
            const subject = document.getElementById("exam-subject").value;

            if (title && date && subject) {
                if (editingRow) {
                    // Update existing row
                    editingRow.cells[0].textContent = title;
                    editingRow.cells[1].textContent = date;
                    editingRow.cells[2].textContent = subject;
                } else {
                    // Add new exam
                    document.getElementById("exam-list").innerHTML += 
                    `<tr>
                        <td>${title}</td>
                        <td>${date}</td>
                        <td>${subject}</td>
                        <td>
                            <button onclick="editExam(this)">Edit</button>
                            <button onclick="removeExam(this)">Delete</button>
                        </td>
                    </tr>`;
                }
                closeModal('exam-modal');
            }
        }

        function editExam(button) {
            editingRow = button.parentElement.parentElement;
            document.getElementById("exam-title").value = editingRow.cells[0].textContent;
            document.getElementById("exam-date").value = editingRow.cells[1].textContent;
            document.getElementById("exam-subject").value = editingRow.cells[2].textContent;

            document.getElementById("modal-title").textContent = "Edit Exam";
            document.getElementById("save-exam").textContent = "Update";

            openModal('exam-modal');
        }

        function removeExam(button) {
            button.parentElement.parentElement.remove();
        }

        function uploadFile() {
            const fileInput = document.getElementById("file-input");
            if (fileInput.files.length > 0) {
                const fileName = fileInput.files[0].name;
                document.getElementById("file-list").innerHTML += 
                `<li>${fileName} <button onclick="removeFile(this)">Delete</button></li>`;
            }
        }

        function removeFile(button) {
            button.parentElement.remove();
        }

        new Chart(document.getElementById("performanceChart"), {
            type: 'bar',
            data: {
                labels: ["Pass", "Fail"],
                datasets: [{
                    label: "Student Performance",
                    data: [10, 5],
                    backgroundColor: ["green", "red"]
                }]
            }
        });

        function logout() {
            // Send AJAX request to PHP to handle session end and data deletion
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "faculty_dashboard.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            // Send the request to PHP
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // On successful logout, show a popup
                    alert("You have been logged out successfully.");
                    // Redirect to index.php with a smooth transition after 1 second
                    setTimeout(function() {
                        window.location.href = "index.php";
                    }, 1000); // 1 second delay for smooth redirection
                }
            };

            xhr.send("logout=true");
        }
    </script>

</body>
</html>
