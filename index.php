<?php
include("mysql.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZesSneakers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

    <style>
        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .image {
            opacity: 1;
            display: block;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .image:hover {
            opacity: 0.3;
        }

        .text {
            background-color: #04AA6D;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }

        ul {
            list-style-type: none;
            margin: -0.2em;
            padding: 0.2em;
            overflow: hidden;
            background-color: #38444d;
        }

        li {
            float: left;
        }

        li a,
        .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover,
        .dropdown:hover .dropbtn {
            background-color: green;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #38444d;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        li:last-child {
            border-right: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #04AA6D;
        }
    </style>
</head>

<body>
    <ul>
        <li><a href="index.php" target="_blank" class="active">Home</a></li> 
        <li><a href="femei.php">Femei</a></li> 
        <li><a href="barbati.php" class="active">Barbati</a></li> 
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Branduri</a>
            <div class="dropdown-content">
                <a href="./Drpdwn/Timberland_products.php">Timberland</a>
                <a href="./Drpdwn/Dior_products.php">Dior</a>
                <a href="./Drpdwn/Nike_products.php">Nike</a>
                <a href="./Drpdwn/Lanvin_products.php">Lanvin</a>
                <a href="./Drpdwn/ChristianL_products.php">Christian Louboutin</a>
                <a href="./Drpdwn/LouisV_products.php">Louis Vuitton</a>
                <a href="./Drpdwn/RickO_products.php">Rick Owens</a>
                <a href="./Drpdwn/MaisonM_products.php">Maison Mihara</a>
                <a href="./Drpdwn/Balenciaga_products.php">Balenciaga</a>
                <a href="./Drpdwn/OffWhite_products.php">Off-White</a>
            </div>
        <li style="float:right"><a href="#about" class="active">About</a></li>
        <li style="float:right"><a href="#favorite">Favorite</a></li>
        <li style="float:right"><a href="#contact" class="active">Contact</a></li>
        <!-- date de contact: email/nr de tel/ sediu -->
    </ul>

    <!-- Buton pentru favorite la fiecare pereche-->

    <div class="row">
        <div class="column">
            <a href="./sneaker_pages/timbs.php" target="_blank"><img src="./img/timbs.png" alt="Timbs" class="image" width="300"
                    height="200"></a>
            <div class="text-block">
                <h4>Timberland 6 Inch Boots</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Timberland 6 Inch Boot";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                    echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="column">
            <a href="./sneaker_pages/jordan1.php" target="_blank"><img src="./img/Jordan1.png" alt="Jordan 1" class="image" width="300"
                    height="200"></a>
            <div class="text-block">
                <h4>Jordan 1 High</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Nike Air Jordan 1";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                    echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="column">
            <a href="./sneaker_pages/af1.php" target="_blank"><img src="./img/af1low.png" alt="Air Force 1" class="image" width="300"
                    height="200"></a>
            <div class="text-block">
                <h4>Air Force 1</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Nike Air Force 1";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                    echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="column">
            <a href="./sneaker_pages/sk8.php" target="_blank"><img src="./img/sk8.png" alt="SK8" class="image" width="300"
                    height="200"></a>
            <div class="text-block">
                <h4>Louis Vuitton Skate</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Louis Vuitton Skate";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                    echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="column">
            <a href="./sneaker_pages/track.php" target="_blank"><img src="./img/Track.png" alt="Track" class="image" width="300"
                    height="200"></a>
            <div class="text-block">
                <h4>Balenciaga Track</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Balenciaga Track";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                    echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="column">
            <a href="./sneaker_pages/curb.php" target="_blank"><img src="./img/Lanvin.png" alt="Curb" class="image" width="300"
                    height="200"></a>
            <div class="text-block">
                <h4>Lanvin Curb</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Lanvin Curb";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                    echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="column">
            <a href="./sneaker_pages/brb.php" target="_blank"><img src="./img/BRB.png" alt="BRB" class="image" width="300"
                    height="200"></a>
            <div class="text-block">
                <h4>Off-White Be Right Back</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Off-White Be Right Back";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                    echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="column">
            <a href="./sneaker_pages/b30.php" target="_blank"><img src="./img/diorb30.png" alt="B30" class="image" width="300"
                    height="200"></a>
            <div class="text-block">
                <h4>Dior B30</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Dior B30";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                    echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="column">
            <a href="./sneaker_pages/oof.php" target="_blank"><img src="./img/oof.png" alt="OOF" class="image" width="300"
                    height="200"></a>
            <div class="text-block">
                <h4>Off White Out Of Office</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Off-White Out Of Office";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                    echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="column">
            <a href="./sneaker_pages/cla.php" target="_blank"><img src="./img/CLA.png" alt="CLA" class="image" width="300"
                    height="200"></a>
            <div class="text-block">
                <h4>Christian Louboutin Astroloub</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Christian Louboutin Astroloub";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                    echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="column">
            <a href="./sneaker_pages/rick.php" target="_blank"><img src="./img/ro.png" alt="ro" class="image" width="300"
                    height="200"></a>
            <div class="text-block">
                <h4>Rick Owens DRKSHDW</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Rick Owens DRKSHDW";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                    echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>

        <div class="column">
            <a href="./sneaker_pages/mihara.php" target="_blank"><img src="./img/mm.png" alt="mm" class="image" width="300"
                    height="200"></a>
            <div class="text-block">
                <h4>Maison Mihara Yasuhiro</h4>
                <?php
                $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                $model = "Maison Mihara Yasuhiro";
                $stmt->bind_param("s", $model);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                    echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <script src="" async defer></script>
</body>

</html>