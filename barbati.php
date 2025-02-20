<?php
include "mysql.php";
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

        .dropdown:hover .dropdown-menu {
            display: block;
        }

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

        h1,
        h2 {
            text-align: center;
            color: #222;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        ul li {
            background: #222;
            margin: 10px auto;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
            width: 80%;
        }

        .section {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        img {
            display: block;
            margin: 0 auto;
            max-width: 54%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .img1 {
            display: block;
            margin: 0 auto;
            max-width: 61%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
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

        .categories {
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .category {
            text-align: center;
            width: calc(33.333% - 20px);
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 350px;
        }

        .category img {
            width: 100%;
            height: 200px;
            border-radius: 8px;
            object-fit: cover;
        }

        .category h3 {
            margin-top: 10px;
            color: #222;
            font-size: 20px;
        }

        p.price {
            font-size: 16px;
            font-weight: bold;
            color: #e67e22;
        }
    </style>
</head>

<body>
    <?php
    $title = "Barbati - ZesSneakers";
    include 'header.php';
    ?>

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
    $model1 = "Timberland 6 Inch Boot";
    $model2 = "Balenciaga Track";
    $model3 = "Nike Air Jordan 1";
    $model4 = "Louis Vuitton Skate";
    $model5 = "Lanvin Curb";
    $model6 = "Off-White Out Of Office";
    $model7 = "Off-White Be Right Back";
    $model8 = "Dior B30";
    $model9 = "Christian Louboutin Astroloub";
    $model10 = "Rick Owens DRKSHDW";
    $model11 = "Nike Air Force 1";
    $result = $connection->query($query);
    echo "<div class='categories'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='category'>";
        $image = !empty($row["nume_imagine"]) ? $row["nume_imagine"] : "default.png";
        if($row["Model"] == $model1){
            echo "<a href='/atestat/sneaker_pages/timbs.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model2){
            echo "<a href='/atestat/sneaker_pages/track.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model3){
            echo "<a href='/atestat/sneaker_pages/jordan1.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model4){
            echo "<a href='/atestat/sneaker_pages/sk8.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model5){
            echo "<a href='/atestat/sneaker_pages/curb.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model6){
            echo "<a href='/atestat/sneaker_pages/oof.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model7){
            echo "<a href='/atestat/sneaker_pages/brb.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model8){
            echo "<a href='/atestat/sneaker_pages/b30.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model9){
            echo "<a href='/atestat/sneaker_pages/cla.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else if($row["Model"] == $model10){
            echo "<a href='/atestat/sneaker_pages/rick.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }else{
            echo "<a href='/atestat/sneaker_pages/af1.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        }
        echo "<p>" . $row["Model"] . "</p>";
        echo "<p>Marimi disponibile:" . $row["Marimi"] . "</p>";
        echo "<p class='price'>" . $row["Pret"] . " RON</p>";
        echo "</div>";
    }

    echo "</div>";

    $connection->close();
    ?>

    <script src="" async defer></script>
</body>
<?php include 'footer.php'; ?>

</html>