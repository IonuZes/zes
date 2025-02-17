<?php
include "mysql.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Barbati</title>
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
        <li><a href="index.php" class="active">Home</a></li> <!-- back to home page -->
        <li><a href="femei.php">Femei</a></li> <!-- <40 -->
        <li><a href="barbati.php" class="active">Barbati</a></li> <!-- marimi >40 -->
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

    <?php

    $connection = new mysqli("localhost", "root", "", "sneaker_store");

    if ($connection->connect_error) {
        die("Conexiunea a eșuat: " . $connection->connect_error);
    }

    $query = "
        SELECT s.id, s.Model, s.Marimi, s.Pret, i.nume_imagine 
        FROM sneakers s
        LEFT JOIN Imagini i ON s.id = i.id_sneaker
        WHERE s.Marimi LIKE '%40%' 
           OR s.Marimi LIKE '%41%' 
           OR s.Marimi LIKE '%42%' 
           OR s.Marimi LIKE '%43%' 
           OR s.Marimi LIKE '%44%' 
           OR s.Marimi LIKE '%45%'
    ";

    $result = $connection->query($query);
    echo "<div class='row'>";
    echo "<div class='column'>";
    while ($row = $result->fetch_assoc()) {
        $image = !empty($row["nume_imagine"]) ? $row["nume_imagine"] : "default.png";

        echo "<img src='./img/$image' alt='" . $row["Model"] . "' style='width:200px; height:auto;'><br>";
        echo "<p><strong>Model:</strong> " . $row["Model"] . "</p>";
        echo "<p><strong>Marimi disponibile:</strong> " . $row["Marimi"] . "</p>";
        echo "<p><strong>Pret:</strong> " . $row["Pret"] . " RON</p>";
    }

    echo "</div>";
    echo "</div>";

    $connection->close();
    ?>

    <script src="" async defer></script>
</body>

</html>