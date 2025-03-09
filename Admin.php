<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="Admin.css">
</head>
<body>
    <header>
        <div class="logo">
            <span class="logo-icon">📚</span> Admin Panel
        </div>
        <div class="nav-links">
            <a href="teacher.php">Teachers</a>
            <a href="student.php">Students</a>
            <a href="courses.php">Courses</a>
            <a href="settings.php">Settings</a>
        </div>
        <div>
            <button style="background-color:red"; >Logout</button>
        </div>
        
    </header>
    
    <main>
        <div class="dashboard-header">
            <h1 class="dashboard-title">Admin Dashboard</h1>
            <p class="dashboard-subtitle">Manage your educational platform from a single place</p>
        </div>
        
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">👩‍🏫</div>
                <div class="stat-value">42</div>
                <div class="stat-label">Total Teachers</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">👨‍🎓</div>
                <div class="stat-value">850</div>
                <div class="stat-label">Total Students</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">📚</div>
                <div class="stat-value">75</div>
                <div class="stat-label">Active Courses</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">📊</div>
                <div class="stat-value">93%</div>
                <div class="stat-label">Attendance Rate</div>
            </div>
        </div>
        
        <div class="tab-container">
            <div class="tabs">
                <div class="tab active" data-tab="teachers">Teachers</div>
                <div class="tab" data-tab="students">Students</div>
                <div class="tab" data-tab="recent-activity">Recent Activity</div>
            </div>
            
            <div class="tab-content active" id="teachers-tab">
                <div class="section-title">
                    <h2>Teachers Management</h2>
                    <button class="btn">
                        <span>+</span> Add New Teacher
                    </button>
                </div>
                
                <div class="action-bar">
                    <div class="search-bar">
                        <span>🔍</span>
                        <input type="text" placeholder="Search teachers...">
                    </div>
                    <div class="filter-dropdown">
                        <button class="filter-btn">
                            <span>Filter</span>
                            <span>▼</span>
                        </button>
                        <div class="filter-dropdown-content">
                            <a href="#">All Teachers</a>
                            <a href="#">Active Teachers</a>
                            <a href="#">Inactive Teachers</a>
                            <a href="#">By Department</a>
                        </div>
                    </div>
                </div>
                
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Courses</th>
                                <th>Students</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>T-001</td>
                                <td>Janu Borase</td>
                                <td>Computer Science</td>
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
                                <td>Utkarsha Ahire</td>
                                <td>Mathematics</td>
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
                                <td>Diksha Jaybhay</td>
                                <td>Physics</td>
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
                                <td>Kanishka Bhombe</td>
                                <td>English</td>
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
                                <td>Vaishnavi Kale</td>
                                <td>History</td>
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
            </div>
            
            <div class="tab-content" id="students-tab">
                <div class="section-title">
                    <h2>Students Management</h2>
                    <button class="btn">
                        <span>+</span> Add New Student
                    </button>
                </div>
                
                <div class="action-bar">
                    <div class="search-bar">
                        <span>🔍</span>
                        <input type="text" placeholder="Search students...">
                    </div>
                    <div class="filter-dropdown">
                        <button class="filter-btn">
                            <span>Filter</span>
                            <span>▼</span>
                        </button>
                        <div class="filter-dropdown-content">
                            <a href="#">All Students</a>
                            <a href="#">Active Students</a>
                            <a href="#">Inactive Students</a>
                            <a href="#">By Grade</a>
                        </div>
                    </div>
                </div>
                
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Grade</th>
                                <th>Enrolled Courses</th>
                                <th>Attendance</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>S-001</td>
                                <td>Tanvi Nanajkar</td>
                                <td>10th</td>
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
                                <td>Hemangi Bhamare</td>
                                <td>9th</td>
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
                                <td>Tanu Ahire</td>
                                <td>11th</td>
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
                                <td>Utkarsha Ahire</td>
                                <td>10th</td>
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
                                <td>Yash Pakale</td>
                                <td>12th</td>
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
            </div>
            
            <div class="tab-content" id="recent-activity-tab">
                <div class="section-title">
                    <h2>Recent Activity</h2>
                </div>
                
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>User</th>
                                <th>Role</th>
                                <th>Activity</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Today, 14:32</td>
                                <td>Diksha Jaybhay</td>
                                <td>Teacher</td>
                                <td>Grade updated</td>
                                <td>Updated final grades for "World History 101"</td>
                            </tr>
                            <tr>
                                <td>Today, 11:15</td>
                                <td>Admin</td>
                                <td>Admin</td>
                                <td>New teacher added</td>
                                <td>Added "James Turner" to Science department</td>
                            </tr>
                            <tr>
                                <td>Yesterday, 16:45</td>
                                <td>Kanishka Bhombe</td>
                                <td>Teacher</td>
                                <td>Attendance updated</td>
                                <td>Marked attendance for "Advanced Mathematics"</td>
                            </tr>
                            <tr>
                                <td>Yesterday, 14:05</td>
                                <td>Vaishnavi Kale</td>
                                <td>Student</td>
                                <td>Course enrollment</td>
                                <td>Enrolled in "Introduction to Chemistry"</td>
                            </tr>
                            <tr>
                                <td>2 days ago, 09:30</td>
                                <td>Admin</td>
                                <td>Admin</td>
                                <td>System update</td>
                                <td>Updated grade calculation algorithm</td>
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
            </div>
        </div>
    </main>
    
    <footer>
        &copy; 2025 Educational Platform Admin Panel. All rights reserved.
    </footer>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Tab functionality
            const tabs = document.querySelectorAll('.tab');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Remove active class from all tabs and contents
                    tabs.forEach(t => t.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));
                    
                    // Add active class to clicked tab and corresponding content
                    tab.classList.add('active');
                    const tabId = `${tab.dataset.tab}-tab`;
                    document.getElementById(tabId).classList.add('active');
                });
            });
            
            // Dropdown toggle (for mobile)
            const profileDropdown = document.querySelector('.profile');
            if (profileDropdown) {
                profileDropdown.addEventListener('click', () => {
                    const dropdown = document.querySelector('.profile-dropdown');
                    if (dropdown) {
                        dropdown.classList.toggle('show');
                    }
                });
            }
        });
    </script>
</body>
</html>