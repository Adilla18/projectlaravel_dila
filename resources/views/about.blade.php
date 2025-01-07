<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Adilla DF</title>
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

        .container h1 {
            font-size: 36px;
            margin-bottom: 20px;
            text-align: center;
            color: #007bff;
        }

        .container p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .container img {
            display: block;
            max-width: 200px; /* Membatasi lebar gambar menjadi 200px */
            height: auto; /* Menyesuaikan tinggi secara proporsional */
            border-radius: 10px;
            margin: 20px auto; /* Mengatur gambar menjadi rata tengah */
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
        <h1>About Me</h1>
        <img src="sya.jpg" alt="Gambar Profil">
        <p>
            Welcome to Adilla DF! We are a team of passionate individuals dedicated to delivering high-quality content and services to our users. 
            Our mission is to empower communities through innovative solutions and excellent support.
        </p>
        <p>
            At Adilla DF, we value collaboration, creativity, and customer satisfaction. Our vision is to be a leader in our industry, 
            providing meaningful experiences for everyone who connects with us.
        </p>
    </div>

    <footer>
        &copy; 2025 Adilla DF. All rights reserved.
    </footer>
</body>
</html>
