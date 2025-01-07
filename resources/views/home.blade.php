<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adilla DF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
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

        .hero {
            text-align: center;
            padding: 50px 20px;
            background: linear-gradient(to bottom, rgba(0, 123, 255, 0.8), rgba(0, 123, 255, 0.6)), url('https://source.unsplash.com/1600x900/?nature,landscape') no-repeat center center/cover;
            color: white;
        }

        .hero h1 {
            font-size: 48px;
            margin: 20px 0;
        }

        .hero p {
            font-size: 18px;
            margin: 20px 0;
            line-height: 1.6;
        }

        .hero .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #ffd700;
            color: #333;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .hero .btn:hover {
            background-color: #ffc107;
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

    <div class="hero">
        <h1>Welcome to Adilla DF</h1>
        <p>Your one-stop destination for amazing content and great connections. Discover more about us and explore what we have to offer.</p>
        <a href="http://127.0.0.1:8000/about" class="btn">Learn More</a>
    </div>

    <footer>
        &copy; 2025 Adilla DF. All rights reserved.
    </footer>
</body>
</html>