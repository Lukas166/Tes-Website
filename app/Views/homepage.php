<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }

        .container {
            text-align: center;
            max-width: 800px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .profile-image {
            width: 150px;
            height: 200px;
            border-radius: 10%;
            box-shadow: -2px 2px 2px grey;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .profile-image:hover {
            transform: scale(1.05) translateY(-5px);
            transition: transform 0.3s ease-in-out;
        }

        h2, p {
            margin: 10px;
        }

        .description {
            font-size: 17px;
            color: black;
        }

        .menu {
            margin-top: 20px;
        }

        .menu a {
            padding: 10px;
            text-decoration: none;
            border-radius:10px;
            color: black;
        }

        .menu a:hover {
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="home/face.jpeg" alt="Foto" class="profile-image">
        <h2>Nama: Lukas Austin</h2>
        <p class="description">NPM: 140810230011</p><br>
        <p class="description">Selamat datang di website tugas menggunakan Code Igniter 4. Web ini berisi berbagai tugas yang telah dikerjakan. Silakan pilih tugas 1-4:</p>
        <br>
        <div class="menu">
            <a href="/tugas-01">Tugas 01</a>
            <a href="/tugas-02">Tugas 02</a>
            <a href="/tugas-03a">Tugas 03a</a>
            <a href="/tugas-03b">Tugas 03b</a>
            <a href="/tugas-04a">Tugas 04a</a>
            <a href="/tugas-04b">Tugas 04b</a>
        </div>
    </div>
</body>
</html>