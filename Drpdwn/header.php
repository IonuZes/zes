<?php
include "mysql.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/atestat/styles.css">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="container">
                <div class="logo">
                    <a href="/atestat/index.php">ZesSneakers</a>
                </div>
                <form action="/atestat/img/search.php" method="GET" class="search-form">
                    <input type="text" name="query" placeholder="Search..." required>
                    <button type="submit">🔍</button>
                </form>
                <nav>
                    <ul>
                        <li><a href="/atestat/about.php">About</a></li>
                        <li><a href="/atestat/barbati.php">Bărbați</a></li>
                        <li><a href="/atestat/femei.php">Femei</a></li>

                        <li class="dropdown">
                            <a href="#">Brand ▼</a>
                            <ul class="dropdown-menu">
                                <li><a href="/atestat/Drpdwn/Timberland_products.php">Timberland</a></li>
                                <li><a href="/atestat/Drpdwn/Dior_products.php">Dior</a></li>
                                <li><a href="/atestat/Drpdwn/Nike_products.php">Nike</a></li>
                                <li><a href="/atestat/Drpdwn/Lanvin_products.php">Lanvin</a></li>
                                <li><a href="/atestat/Drpdwn/ChristianL_products.php">Christian Louboutin</a></li>
                                <li><a href="/atestat/Drpdwn/LouisV_products.php">Louis Vuitton</a></li>
                                <li><a href="/atestat/Drpdwn/RickO_products.php">Rick Owens</a></li>
                                <li><a href="/atestat/Drpdwn/MaisonM_products.php">Maison Mihara</a></li>
                                <li><a href="/atestat/Drpdwn/Balenciaga_products.php">Balenciaga</a></li>
                                <li><a href="/atestat/Drpdwn/OffWhite_products.php">Off-White</a></li>
                            </ul>
                        </li>

                        <li><a href="/atestat/contact.php">Contact</a></li>
                        <li><a href="/atestat/basket.php">Cos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>

</html>
