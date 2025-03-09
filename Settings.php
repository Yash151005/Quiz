<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Admin Panel</title>
    <link rel="stylesheet" href="Settings.css">
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
            <a href="courses.php">Courses</a>
            <a href="settings.php" class="active">Settings</a>
        </div>
        <div class="profile">
            <img src="/api/placeholder/40/40" alt="Admin profile">
            <span>Admin</span>
        </div>
    </header>
    
    <main>
        <div class="page-header">
            <h1 class="page-title">Settings</h1>
            <p class="page-subtitle">Customize and configure your educational platform</p>
        </div>
        
        <div class="settings-nav">
            <a href="#account" class="active">Account</a>
            <a href="#notification">Notifications</a>
            <a href="#access">Access Control</a>
            <a href="#system">System</a>
        </div>
        
        <div class="settings-container">
            <section id="account">
                <h3>Account Settings</h3>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" value="admin_user" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" value="admin@example.com" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="new-password">Change Password:</label>
                    <input type="password" id="new-password" placeholder="Enter new password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" placeholder="Confirm new password">
                </div>
                <button class="btn">Update Account</button>
            </section>

            <section id="notification">
                <h3>Notification Preferences</h3>
                <div class="checkbox-label">
                    <input type="checkbox" id="email-notifications" checked>
                    <label for="email-notifications">Receive email notifications</label>
                </div>
                <div class="checkbox-label">
                    <input type="checkbox" id="sms-notifications">
                    <label for="sms-notifications">Receive SMS notifications</label>
                </div>
                <div class="checkbox-label">
                    <input type="checkbox" id="push-notifications" checked>
                    <label for="push-notifications">Receive push notifications</label>
                </div>
                
                <h3>Notification Events</h3>
                <div class="checkbox-label">
                    <input type="checkbox" id="notify-student-enroll" checked>
                    <label for="notify-student-enroll">New student enrollment</label>
                </div>
                <div class="checkbox-label">
                    <input type="checkbox" id="notify-course-created" checked>
                    <label for="notify-course-created">New course created</label>
                </div>
                <div class="checkbox-label">
                    <input type="checkbox" id="notify-assignment-submit">
                    <label for="notify-assignment-submit">Assignment submissions</label>
                </div>
                <button class="btn">Save Notification Settings</button>
            </section>
            
            <section id="access">
                <h3>Access Control</h3>
                <p style="margin-bottom: 1rem;">Control which faculty members can modify student details.</p>
                
                <table>
                    <thead>
                        <tr>
                            <th>Faculty Name</th>
                            <th>Can Edit Students</th>
                            <th>Can View Reports</th>
                            <th>Can Edit Courses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dr. Pakale</td>
                            <td><input type="checkbox" checked></td>
                            <td><input type="checkbox" checked></td>
                            <td><input type="checkbox" checked></td>
                        </tr>
                        <tr>
                            <td>Prof. Bhombe</td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox" checked></td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>Ms. Ahire</td>
                            <td><input type="checkbox" checked></td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox" checked></td>
                        </tr>
                        <tr>
                            <td>Mr. Deshpande</td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox" checked></td>
                            <td><input type="checkbox"></td>
                        </tr>
                    </tbody>
                </table>
                
                <h3>Role Management</h3>
                <div class="form-group">
                    <label for="role-select">Select Role:</label>
                    <select id="role-select">
                        <option>Administrator</option>
                        <option>Teacher</option>
                        <option>Department Head</option>
                        <option>Office Staff</option>
                    </select>
                </div>
                <div class="checkbox-label">
                    <input type="checkbox" id="manage-students" checked>
                    <label for="manage-students">Manage Students</label>
                </div>
                <div class="checkbox-label">
                    <input type="checkbox" id="manage-courses" checked>
                    <label for="manage-courses">Manage Courses</label>
                </div>
                <div class="checkbox-label">
                    <input type="checkbox" id="manage-reports" checked>
                    <label for="manage-reports">Manage Reports</label>
                </div>
                <div class="checkbox-label">
                    <input type="checkbox" id="manage-settings">
                    <label for="manage-settings">Manage Settings</label>
                </div>
                <button class="btn">Save Access Settings</button>
            </section>
            
            
            <section id="system">
                <h3>System Settings</h3>
                <div class="form-group">
                    <label for="language">System Language:</label>
                    <select id="language">
                        <option selected>English</option>
                        <option>Hindi</option>
                        <option>Marathi</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="timezone">Timezone:</label>
                    <select id="timezone">
                        <option selected>Asia/Kolkata (GMT+5:30)</option>
                        <option>UTC (GMT+0:00)</option>
                        <option>America/New_York (GMT-5:00)</option>
                    </select>
                </div>
                
                <div class="checkbox-label">
                    <input type="checkbox" id="data-backup" checked>
                    <label for="data-backup">Enable automatic data backup</label>
                </div>
                
                <div class="form-group">
                    <label for="backup-frequency">Backup Frequency:</label>
                    <select id="backup-frequency">
                        <option>Daily</option>
                        <option selected>Weekly</option>
                        <option>Monthly</option>
                    </select>
                </div>
                <button class="btn">Save System Settings</button>
            </section>
        </div>
    </main>
    
    <footer>
        &copy; 2025 Educational Platform Admin Panel. All rights reserved.
    </footer>
</body>
</html>