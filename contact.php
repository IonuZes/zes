<?php
$title = "Contact - ZesSneakers";
include("mysql.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
        /* Resetare stiluri pentru o afișare uniformă */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar Styling */
        .navbar {
            background: #222;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .logo a {
            color: #fff;
            font-size: 24px;
            text-decoration: none;
            font-weight: bold;
            margin-left: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            position: relative;
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 15px;
            transition: background 0.3s ease;
        }

        /* Dropdown Styling */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #222;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            min-width: 150px;
            z-index: 1000;
        }

        .dropdown-menu li {
            width: 100%;
        }

        .dropdown-menu li a {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
        }

        .dropdown-menu li a:hover {
            background: #f4f4f4;
            color: #222;
        }

        /* Afișează dropdown-ul când utilizatorul trece cu mouse-ul peste Brand-uri */
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Container principal */
        .container {
            width: 80%;
            margin: auto;
            flex: 1;
            padding: 20px;
            background: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }

        /* Stilizare titluri */
        h1,
        h2 {
            text-align: center;
            color: #222;
            margin-bottom: 20px;
        }

        /* Stilizare liste */
        ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        ul li {
            background: #222;
            color: #fff;
            margin: 10px auto;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
            width: 80%;
        }

        /* Stilizare pentru secțiuni individuale */
        .section {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        footer {
            background: #222;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: auto;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
<?php
include 'header.php';
?>

<div class="container">
    <h1>Contact</h1>
    <p>Pentru orice informații, nu ezitați să ne contactezi folosind detaliile de mai jos:</p>

    <div class="section">
        <h2>Date de contact</h2>
        <ul>
            <li><strong>Fondator: </strong>Oniciu Ionut</li>
            <li><strong>Co-Fondator: </strong>Oniciu Andreea</li>
            <li><strong>Email:</strong> contact@zessneakers.ro</li>
            <li><strong>Telefon:</strong> +40 755 123 456</li>
        </ul>
    </div>

    <div class="section">
        <h2>Magazinele noastre</h2>
        <ul>
            <li><strong>Magazin Deva:</strong> Strada Libertății nr. 10, Deva, Hunedoara</li>
            <li><strong>Magazin Hunedoara:</strong> Bulevardul Dacia nr. 25, Hunedoara</li>
        </ul>
    </div>

    <div class="section">
        <h2>Program</h2>
        <ul>
            <li><strong>Luni - Vineri:</strong> 10:00 - 19:00</li>
            <li><strong>Sâmbătă - Duminică:</strong> 10:00 - 16:00</li>
        </ul>
    </div>
</div>

</body>
<?php include 'footer.php'; ?>

</html>