<?php
$title = "B30 - View";
include("mysql.php");
include ('header.php');
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

        .logi {
            min-height: 550px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
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

        span.price {
            font-weight: bold;
            color: #e67e22;
        }
    </style>

</head>

<body>
    <main class="container">

        <!-- Left Column / Headphones Image -->
        <div class="left-column">
            <img src="/atestat/img/diorb30.png" class="active">
        </div>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <span>Dior</span>
                <h2>B30</h2>
                <p>Un sneaker sport-elegant, care combină estetica luxoasă Dior cu inspirații din pantofii de alergare.</p>
            </div>

            <!-- Product Pricing -->
            <div class="product-price">
                <span class="price">2650 RON</span>
            </div>

            <div class="product-size">
                <span>41</span>
            </div>
        </div>
    </main>
    <div class="logi">
        <a href="https://www.dior.com/en_ro?gad_source=1&gclid=CjwKCAiA2cu9BhBhEiwAft6IxOQrOl-caE4heyltgJ26hjoR9VYts6MoV9gXMzQMxeJL--_qKpI7hhoCvxAQAvD_BwE"  target="_blank"><img src="/atestat/brand-logo/dior.png" alt="" width="500" height="250"></a>
    </div>
    <script src="" async defer></script>
</body>
<?php include ('footer.php'); ?>
</html>