<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management - Admin Panel</title>
    <link rel="stylesheet" href="Student.css">
</head>
<body>
    <header>
        <div class="logo">
            <span class="logo-icon">📚</span> EduAdmin Panel
        </div>
        <div class="nav-links">
            <a href="admin.php">Dashboard</a>
            <a href="teacher.php">Teachers</a>
            <a href="student-management.php" class="active">Students</a>
            <a href="courses.php">Courses</a>
            <a href="settings.php">Settings</a>
        </div>
        <div class="profile">
            <img src="/api/placeholder/40/40" alt="Admin profile">
            <span>Admin</span>
        </div>
    </header>
    
    <main>
        <div class="page-header">
            <h1 class="page-title">Student Management</h1>
            <p class="page-subtitle">Manage all students in your educational platform</p>
        </div>
        
        <div class="action-bar">
            <div class="search-bar">
                <span>🔍</span>
                <input type="text" placeholder="Search students...">
            </div>
            <button class="btn">
                <span>+</span> Add New Student
            </button>
        </div>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Grade</th>
                        <th>Email</th>
                        <th>Enrolled Courses</th>
                        <th>Attendance</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>S-001</td>
                        <td>Emma Wilson</td>
                        <td>10th</td>
                        <td>emma.w@example.com</td>
                        <td>4</td>
                        <td>95%</td>
                        <td><span class="status status-active">Active</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>S-002</td>
                        <td>Daniel Lee</td>
                        <td>9th</td>
                        <td>daniel.l@example.com</td>
                        <td>5</td>
                        <td>88%</td>
                        <td><span class="status status-active">Active</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>S-003</td>
                        <td>Olivia Martinez</td>
                        <td>11th</td>
                        <td>olivia.m@example.com</td>
                        <td>3</td>
                        <td>92%</td>
                        <td><span class="status status-active">Active</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>S-004</td>
                        <td>Noah Taylor</td>
                        <td>10th</td>
                        <td>noah.t@example.com</td>
                        <td>4</td>
                        <td>78%</td>
                        <td><span class="status status-inactive">Inactive</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>S-005</td>
                        <td>Sophia Clark</td>
                        <td>12th</td>
                        <td>sophia.c@example.com</td>
                        <td>5</td>
                        <td>97%</td>
                        <td><span class="status status-active">Active</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="pagination">
            <button>&lt;</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>&gt;</button>
        </div>
    </main>
    
    <footer>
        &copy; 2025 Educational Platform Admin Panel. All rights reserved.
    </footer>
</body>
</html>