<?php
// Include navigation menu
include 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Web Developer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(to right, #e0f7fa, #80deea);
        }

        .about-section {
            padding: 50px 0;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform .2s;
        }

        .about-section:hover {
            transform: translateY(-5px);
        }

        .about-header {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #00796b;
        }

        .about-text {
            font-size: 18px;
            margin-bottom: 30px;
            color: #555;
        }

        .skills-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .skills-list li {
            margin-bottom: 10px;
            transition: color .3s ease;
        }

        .skills-list li:hover {
            color: #00796b;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .social-links {
            margin-top: 20px;
        }

        .social-links a {
            margin-right: 20px;
            font-size: 24px;
            color: #00796b;
            transition: color .3s ease;
        }

        .social-links a:hover {
            color: #004d40;
        }

        @media (max-width: 768px) {
            .about-header {
                font-size: 28px;
            }

            .about-text {
                font-size: 16px;
            }

            .profile-picture {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>

<body>

    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="my.png" alt="Profile Picture of [Your Name]" class="profile-picture">
                </div>
                <div class="col-md-8">
                    <h2 class="about-header">About Me</h2>
                    <p class="about-text">Hi, I'm Aadil Diwan, a passionate web developer focused on building fast, secure, and scalable web applications.</p>
                    <p class="about-text">And i develope this website for online shopping store.</p>
                    <p class="about-text">This website is also designed in mobile.</p>
                    <!-- <p class="about-text">With 0 years of experience in the industry, I've developed a strong skill set in HTML, CSS, JavaScript, PHP, and more.</p> -->
                    <h3>Skills</h3>
                    <ul class="skills-list">
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JavaScript (ES6+)</li>
                        <li>PHP</li>
                        <li>Bootstrap</li>
                        <li>WordPress</li>
                        <li>Git</li>
                    </ul>
                    <p class="about-text">I'm always looking to improve my skills and stay up-to-date with the latest web development trends and technologies.</p>
                    <div class="social-links">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.about-header').hide().fadeIn(1000);
            $('.about-text').hide().fadeIn(1500);
            $('.skills-list').hide().fadeIn(2000);
        });
    </script>

</body>

</html>