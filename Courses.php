<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management - Admin Panel</title>
    
    <link rel="stylesheet" href="Courses.css">
</head>
<body>
    <header>
        <div class="logo">
            <span class="logo-icon">📚</span> EduAdmin Panel
        </div>
        <div class="nav-links">
            <a href="admin.php">Dashboard</a>
            <a href="teacher.php">Teachers</a>
            <a href="student.php">Students</a>
            <a href="courses.php" class="active">Courses</a>
            <a href="settings.php">Settings</a>
        </div>
        <div class="profile">
            <img src="/api/placeholder/40/40" alt="Admin profile">
            <span>Admin</span>
        </div>
    </header>
    
    <main>
        <div class="page-header">
            <h1 class="page-title">Course Management</h1>
            <p class="page-subtitle">Manage all courses in your educational platform</p>
        </div>
        
        <div class="action-bar">
            <div class="search-bar">
                <span>🔍</span>
                <input type="text" placeholder="Search courses...">
            </div>
            <div class="filter-options">
                <select>
                    <option value="">All Statuses</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                <select>
                    <option value="">All Instructors</option>
                    <option value="Dr. Pakale">Dr. Pakale</option>
                    <option value="Prof. Bhombe">Prof. Bhombe</option>
                    <option value="Ms. Ahire">Ms. Ahire</option>
                </select>
            </div>
            <button class="btn">
                <span>+</span> Add New Course
            </button>
        </div>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Course ID</th>
                        <th>Course Name</th>
                        <th>Instructor</th>
                        <th>Duration</th>
                        <th>Enrolled</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CS101</td>
                        <td>Introduction to Python</td>
                        <td>Dr. Pakale</td>
                        <td>8 Weeks</td>
                        <td>32 Students</td>
                        <td><span class="status status-active">Active</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>CS102</td>
                        <td>Web Development Basics</td>
                        <td>Prof. Bhombe</td>
                        <td>6 Weeks</td>
                        <td>28 Students</td>
                        <td><span class="status status-active">Active</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>CS103</td>
                        <td>Data Structures</td>
                        <td>Ms. Ahire</td>
                        <td>10 Weeks</td>
                        <td>18 Students</td>
                        <td><span class="status status-inactive">Inactive</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>CS104</td>
                        <td>Database Management</td>
                        <td>Dr. Pakale</td>
                        <td>12 Weeks</td>
                        <td>25 Students</td>
                        <td><span class="status status-active">Active</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>CS105</td>
                        <td>Machine Learning Fundamentals</td>
                        <td>Prof. Bhombe</td>
                        <td>14 Weeks</td>
                        <td>15 Students</td>
                        <td><span class="status status-inactive">Inactive</span></td>
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