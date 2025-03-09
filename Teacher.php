<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Management - Admin Panel</title>
    
    <link rel="stylesheet" href="Teacher.css">
</head>
<body>
    <header>
        <div class="logo">
            <span class="logo-icon">📚</span> EduAdmin Panel
        </div>
        <div class="nav-links">
            <a href="admin.php">Dashboard</a>
            <a href="teacher.php" class="active">Teachers</a>
            <a href="student.php">Students</a>
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
            <h1 class="page-title">Teacher Management</h1>
            <p class="page-subtitle">Manage all teachers in your educational platform</p>
        </div>
        
        <div class="action-bar">
            <div class="search-bar">
                <span>🔍</span>
                <input type="text" placeholder="Search teachers...">
            </div>
            <button class="btn">
                <span>+</span> Add New Teacher
            </button>
        </div>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Courses</th>
                        <th>Students</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>T-001</td>
                        <td>John Smith</td>
                        <td>Computer Science</td>
                        <td>john.smith@example.com</td>
                        <td>3</td>
                        <td>45</td>
                        <td><span class="status status-active">Active</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>T-002</td>
                        <td>Sarah Johnson</td>
                        <td>Mathematics</td>
                        <td>sarah.j@example.com</td>
                        <td>4</td>
                        <td>60</td>
                        <td><span class="status status-active">Active</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>T-003</td>
                        <td>Robert Miller</td>
                        <td>Physics</td>
                        <td>r.miller@example.com</td>
                        <td>2</td>
                        <td>30</td>
                        <td><span class="status status-inactive">Inactive</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>T-004</td>
                        <td>Lisa Williams</td>
                        <td>English</td>
                        <td>lisa.w@example.com</td>
                        <td>5</td>
                        <td>75</td>
                        <td><span class="status status-active">Active</span></td>
                        <td class="table-action">
                            <button class="icon-btn edit-btn">✏️</button>
                            <button class="icon-btn delete-btn">❌</button>
                        </td>
                    </tr>
                    <tr>
                        <td>T-005</td>
                        <td>Michael Brown</td>
                        <td>History</td>
                        <td>m.brown@example.com</td>
                        <td>3</td>
                        <td>50</td>
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