<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Adilla DF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        nav {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h1 {
            font-size: 24px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffd700;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #007bff;
        }

        .profile-header h1 {
            font-size: 28px;
            margin: 10px 0;
            color: #007bff;
        }

        .profile-header p {
            font-size: 18px;
            color: #555;
        }

        .profile-info {
            margin-top: 30px;
        }

        .profile-info h2 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #333;
            border-bottom: 2px solid #007bff;
            display: inline-block;
            padding-bottom: 5px;
        }

        .profile-info ul {
            list-style: none;
            padding: 0;
        }

        .profile-info ul li {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .profile-info ul li span {
            font-weight: bold;
            color: #007bff;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: #fff;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <nav>
        <h1>Adilla DF</h1>
        <div>
            <a href="http://127.0.0.1:8000/">Home</a>
            <a href="http://127.0.0.1:8000/about">About</a>
            <a href="http://127.0.0.1:8000/contact">Contact</a>
            <a href="http://127.0.0.1:8000/profile">Profile</a>
        </div>
    </nav>

    <div class="container">
        <div class="profile-header">
            <img src="sya.jpg" alt="Gambar Profil">
            <h1>Adilla DF</h1>
            <p>Web Developer | Designer | Content Creator</p>
        </div>

        <div class="profile-info">
            <h2>About Me</h2>
            <p>
                Hi, I'm Adilla, a passionate web developer with expertise in creating responsive and user-friendly web applications. 
                I love solving problems and bringing creative ideas to life through code and design.
            </p>

            <h2>Details</h2>
            <ul>
                <li><span>Full Name:</span> Adilla D. F.</li>
                <li><span>Age:</span> 19</li>
                <li><span>Location:</span> Purbalingga, Indonesia</li>
                <li><span>Email:</span> fransiskaadilla@gmail.com</li>
                <li><span>Phone:</span> +62 878 2725 5327</li>
            </ul>
        </div>
    </div>

    <footer>
        &copy; 2025 Adilla DF. All rights reserved.
    </footer>
</body>
</html>
