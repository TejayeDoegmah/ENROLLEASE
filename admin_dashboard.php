<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Include your favorite icon library (e.g., Font Awesome) for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fcf3f3;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: left;
            justify-content: center;
            height: 100vh;
        }

        #admin-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 25%;
            text-align: center;
        }

        #admin-container h1 {
            text-align: center;
        }

        #admin-container h2 {
            text-align: center;
        }

        #admin-container img {
            display: block;
            margin: 20px auto; /* Center the image */
            border-radius: 50%; /* Make the image circular */
            transition: transform 0.3s ease-in-out;
        }

        #admin-container img:hover {
            transform: scale(1.1); /* Increase the size on hover */
        }

        .icon-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .icon-container i {
            font-size: 48px;
            cursor: pointer;
            color: #3498db;
        }

        .icon-container i:hover {
            color: #2980b9;
        }

        /* Six empty chat placeholders */
        .chat-placeholder {
            background-color: #eee;
            padding: 10px;
            margin-top: 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div id="admin-container">
    <h1>ADMIN</h1>
    <h2>DASHBOARD</h2>
    <img src="images/profile.jpeg" alt="Admin Image" >
    <div>
    <a class="nav-link" href="display_data.php">Client request</a>
    </div>
    <div>
    <a class="nav-link" href="index0.php">HOME</a>
    </div>
    <div>
    <a class="nav-link" href="about.php">ABOUT</a>
    </div>
    <div>
    <a class="nav-link" href="education.php">EDUCATION</a>
    </div>
    <div>
    <a class="nav-link" href="blog.php">BLOG</a>
    </div>
    <div>
    <a class="nav-link" href="college.php">COLLEGE</a>
    </div>
    <div>
    <a class="nav-link" href="contact.php">CONTACT US</a>
    </div>
    <div>
    <a class="nav-link" href="#">TEAM MEMBERS</a>
    </div>
</div>

</body>
</html>
