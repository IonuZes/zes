<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="index.php">ZesSneakers</a>
            </div>
            <nav>
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="barbati.php">Bărbați</a></li>
                    <li><a href="femei.php">Femei</a></li>

                    <!-- Dropdown Brand-uri -->
                    <li class="dropdown">
                        <a href="#">Brand-uri ▼</a>
                        <ul class="dropdown-menu">
                            <li><a href="./Drpdwn/Timberland_products.php">Timberland</a></li>
                            <li><a href="./Drpdwn/Dior_products.php">Dior</a></li>
                            <li><a href="./Drpdwn/Nike_products.php">Nike</a></li>
                            <li><a href="./Drpdwn/Lanvin_products.php">Lanvin</a></li>
                            <li><a href="./Drpdwn/ChristianL_products.php">Christian Louboutin</a></li>
                            <li><a href="./Drpdwn/LouisV_products.php">Louis Vuitton</a></li>
                            <li><a href="./Drpdwn/RickO_products.php">Rick Owens</a></li>
                            <li><a href="./Drpdwn/MaisonM_products.php">Maison Mihara</a></li>
                            <li><a href="./Drpdwn/Balenciaga_products.php">Balenciaga</a></li>
                            <li><a href="./Drpdwn/OffWhite_products.php">Off-White</a></li>
                        </ul>
                    </li>

                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>

</html>