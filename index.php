<?php
$title = "HomePage - ZesSneakers";
include("mysql.php");
include ('header.php');
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

        /* Stilizare imaginilor */
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

        /* Footer fixat jos */
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

        /* Containere pentru categorii - Flexbox */
        .categories {
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        /* Fiecare categorie (card) */
        .category {
            text-align: center;
            width: calc(33.333% - 20px);
            /* 3 pe rând cu spațiu egal */
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 350px;
            /* Asigură înălțime minimă pentru aliniere */
        }

        /* Pentru responsive: pe ecrane mai mici, 2 sau 1 pe rând */
        @media (max-width: 900px) {
            .category {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 600px) {
            .category {
                width: 100%;
            }
        }

        /* Stilizare imagine card */
        .category img {
            width: 100%;
            height: 200px;
            /* Fixăm înălțimea pentru uniformitate */
            border-radius: 8px;
            object-fit: cover;
        }

        /* Titlurile să fie uniforme */
        .category h3 {
            margin-top: 10px;
            color: #222;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="categories">
        <div class="category">
            <a href="./sneaker_pages/timbs.php"><img src="./img/timbs.png" alt="Timbs" class="img"></a>
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

        <div class="category">
            <a href="./sneaker_pages/jordan1.php"><img src="./img/Jordan1.png" alt="Jordan 1" class="img"></a>
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

        <div class="category">
            <a href="./sneaker_pages/af1.php"><img src="./img/af1.png" alt="Air Force 1" class="img"></a>
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

        <div class="category">
            <a href="./sneaker_pages/sk8.php"><img src="./img/sk8.png" alt="SK8" class="img"></a>
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

        <div class="category">
            <a href="./sneaker_pages/track.php"><img src="./img/tracks.png" alt="Track" class="img1"></a>
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

        <div class="category">
            <a href="./sneaker_pages/curb.php"><img src="./img/lanvinc.png" alt="Curb" class="img"></a>
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

        <div class="category">
            <a href="./sneaker_pages/brb.php"><img src="./img/BRB.png" alt="BRB" class="img"></a>
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

        <div class="category">
            <a href="./sneaker_pages/b30.php"><img src="./img/diorb30.png" alt="B30" class="img"></a>
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

        <div class="category">
            <a href="./sneaker_pages/oof.php"><img src="./img/oof.png" alt="OOF" class="img"></a>
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

        <div class="category">
            <a href="./sneaker_pages/cla.php"><img src="./img/CLA.png" alt="CLA" class="img"></a>
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

        <div class="category">
            <a href="./sneaker_pages/rick.php"><img src="./img/ro.png" alt="ro" class="img"></a>
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

        <div class="category">
            <a href="./sneaker_pages/mihara.php"><img src="./img/mm.png" alt="mm" class="img"></a>
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
<?php include ('footer.php'); ?>

</html>