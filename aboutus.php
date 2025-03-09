<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-color: #1F2D5A;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        
        .container h1{
            text-align: center;
            color: darkblue;
            font-weight: bold;
            font-size: 32px;
        }

        h1, h2 {
            text-align: left;
            color: black;
            font-weight: bold;
            font-size: 27px;
        }

        p {
            text-align: justify;
            color: rgb(27, 25, 25);
            font-size: 16px;
            line-height: 1.4;
            text-indent: 50px;
        }

        .section {
            margin-bottom: 20px;
            padding: 12px;
            background: #2a68be;
            border-radius: 5px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            padding: 5px 0;
            font-size: 15px;
        }

        .team {
            text-align: center;
        }

        .team h2{
            text-align: center;
        }

        .team-members {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .team-member {
            background: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 250px;
        }

        .team-member h3 {
            margin: 10px 0;
            color: #007bff;
        }

        .team-member p {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
    <div class="container">
        <h1>Who We Are</h1>
        <p>We are dedicated to revolutionizing online learning and assessment through a seamless and efficient Online Examination Portal. Our platform ensures a smooth and secure experience for students, faculty, and administrators by integrating advanced technology with a user-friendly interface.</p>

        <div class="section">
            <h2>Our Mission</h2>
            <p>Our mission is to provide an accessible, secure, and flexible examination system that enhances the learning process. We aim to empower educational institutions by digitizing assessments, making exams more efficient, and ensuring fair evaluations.</p>
        </div>

        <div class="section">
            <h2>Our Vision</h2>
            <p>To become a leading online assessment platform that simplifies education through innovation, automation, and real-time analytics. We strive to create an ecosystem where students can learn, practice, and excel in their academic journey.</p>
        </div>

        <div class="section">
            <h2>Key Features</h2>
            <ul>
                <li><b>✔ Secure Online Examinations –</b> Conduct exams with role-based access and encrypted data storage.</li>
                <li><b>✔ Automated Evaluations –</b> Instant result generation with detailed performance analytics.</li>
                <li><b>✔ User-Friendly Interface –</b> A responsive and intuitive design for seamless navigation.</li>
                <li><b>✔ Multi-Role Accessibility –</b> Dedicated features for Admin, Faculty, and Students.</li>
                <li><b>✔ Performance Insights –</b> Track progress, identify strengths and weaknesses, and improve learning outcomes.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Why Choose Us?</h2>
            <ul>
                <li>⚡ <strong>Efficiency:</strong> Our platform ensures quick exam creation, evaluation, and feedback.</li>
                <li>📈 <strong>Scalability:</strong> Suitable for schools, colleges, and universities of all sizes.</li>
                <li>🎯 <strong>Customization:</strong> Faculty can design exams based on subject difficulty and student requirements.</li>
                <li>🔒 <strong>Support & Security:</strong> Regular updates, dedicated support, and secure data handling.</li>
            </ul>
        </div>

        <div class="section team">
            <h2>Meet Our Team</h2>
            <div class="team-members">
                <div class="team-member">
                    <h3>Yash Pakale</h3>
                    <p>UI/UX Designer</p>
                </div>
                <div class="team-member">
                    <h3>Diksha Jaybhay</h3>
                    <p>Backend Developer</p>
                </div>
                <div class="team-member">
                    <h3>Kanishka Bhombe</h3>
                    <p>Database Administrator</p>
                </div>
                <div class="team-member">
                    <h3>Utkarsha Ahire</h3>
                    <p>Backend Developer</p>
                </div>
                <div class="team-member">
                    <h3>Vaishnavi Kale</h3>
                    <p>Database Administrator</p>
                </div>
            </div>
        </div>

    </div>
    <?php include 'footer.php'; ?>
</body>
</html>