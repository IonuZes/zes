<?php
include("mysql.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

    <style>
        /* Basic Styling */
        html,
        body {
            height: 100%;
            width: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px;
            display: flex;
        }

        /* Columns */
        .left-column {
            width: 65%;
            position: relative;
        }

        .right-column {
            width: 35%;
            margin-top: 60px;
        }

        /* Left Column */
        .left-column img {
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .left-column img.active {
            opacity: 1;
        }

        /* Product Description */
        .product-description {
            border-bottom: 1px solid #E1E8EE;
            margin-bottom: 20px;
        }

        .product-description span {
            font-size: 12px;
            color: #358ED7;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none;
        }

        .product-description h1 {
            font-weight: 300;
            font-size: 52px;
            color: #43484D;
            letter-spacing: -2px;
        }

        .product-description p {
            font-size: 16px;
            font-weight: 300;
            color: #86939E;
            line-height: 24px;
        }

        /* Product Price */
        .product-price {
            display: flex;
            align-items: center;
        }

        .product-price span {
            font-size: 26px;
            font-weight: 300;
            color: #43474D;
            margin-right: 20px;
            border-bottom: 1px solid #E1E8EE;
            margin-bottom: 20px;
        }

        .product-size {
            display: flex;
            align-items: center;
        }

        .product-size span {
            font-size: 26px;
            font-weight: 300;
            color: #43474D;
            margin-right: 20px;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .brand {
            width: 65%;
            position: relative;
        }

        * {
            box-sizing: border-box;
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

        .logo {
            min-height: 500px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }
    </style>

</head>

<body>
<ul>
        <li><a href="/atestat/index.php" class="active">Home</a></li> <!-- back to home page -->
        <li><a href="/atestat/femei.php">Femei</a></li> <!-- <40 -->
        <li><a href="/atestat/barbati.php" class="active">Barbati</a></li> <!-- marimi >40 -->
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Branduri</a>
            <div class="dropdown-content">
                <a href="../Drpdwn/Timberland_products.php">Timberland</a>
                <a href="../Drpdwn/Dior_products.php">Dior</a>
                <a href="../Drpdwn/Nike_products.php">Nike</a>
                <a href="../Drpdwn/Lanvin_products.php">Lanvin</a>
                <a href="../Drpdwn/ChristianL_products.php">Christian Louboutin</a>
                <a href="../Drpdwn/LouisV_products.php">Louis Vuitton</a>
                <a href="../Drpdwn/RickO_products.php">Rick Owens</a>
                <a href="../Drpdwn/MaisonM_products.php">Maison Mihara</a>
                <a href="../Drpdwn/Balenciaga_products.php">Balenciaga</a>
                <a href="../Drpdwn/OffWhite_products.php">Off-White</a>
            </div>
        <li style="float:right"><a href="#about" class="active">About</a></li>
        <li style="float:right"><a href="#favorite">Favorite</a></li>
        <li style="float:right"><a href="#contact" class="active">Contact</a></li>
        <!-- date de contact: email/nr de tel/ sediu -->
    </ul>


    <main class="container">

        <!-- Left Column / Headphones Image -->
        <div class="left-column">
            <img src="/atestat/img/Lanvinc.png" class="active">
        </div>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <span>Lanvin</span>
                <h2>Curb</h2>
                <p>Un sneaker masiv, cu influențe din anii ’90, renumit pentru șireturile late și designul statement. O alegere perfectă pentru cei care iubesc stilul extravagant.</p>
            </div>

            <!-- Product Pricing -->
            <div class="product-price">
                <span>2000 RON</span>
            </div>

            <div class="product-size">
                <span>40 | 42 | 43</span>
            </div>
        </div>
    </main>
    <div class="logo">
        <a href="https://us.lanvin.com/" target="_blank"><img src="/atestat/brand-logo/lanvin.png" alt="" width="500" height="400"></a>
    </div>
    <script src="" async defer></script>
</body>

</html>