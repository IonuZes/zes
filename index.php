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
    </style>
</head>

<body>
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<td>Marca</td>";
    echo "<td>Model</td>";
    echo "<td>Marimi</td>";
    echo "<td>Pret</td>";
    echo "</tr>";
    $stmt = $connection->prepare("select * from sneakers");
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["Marca"] . "</td>";
        echo "<td>" . $row["Model"] . "</td>";
        echo "<td>" . $row["Marimi"] . "</td>";
        echo "<td>" . $row["Pret"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <div class="row">
            <div class="column">
                <a href="timbs.php" target="_blank"><img src="./img/timbs.png" alt="Timbs" class="image" width="300" height="200"></a>
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
        <a href="jordan1.php" target="_blank"><img src="./img/Jordan1.png" alt="Jordan 1" class="image" width="300" height="200"></a>
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
        <a href="af1.php" target="_blank"><img src="./img/af1l.png" alt="Air Force 1" class="image" width="300" height="200"></a>
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
        <a href="sk8.php" target="_blank"><img src="./img/sk8.png" alt="SK8" class="image" width="300" height="200"></a>
        <div class="text-block">
            <h4>Louis Vuitton</h4>
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
        <img src="./img/Track.png" alt="Track" class="image" width="300" height="200">
        <div class="text-block">
            <h4>Balenciaga</h4>
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
        <img src="./img/Lanvin.png" alt="Curb" class="image" width="300" height="200">
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
        <img src="./img/BRB.png" alt="BRB" class="image" width="300" height="200">
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
        <img src="./img/diorb30.png" alt="B30" class="image" width="300" height="200">
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
        <img src="./img/oof.png" alt="OOF" class="image" width="300" height="200">
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
        <img src="./img/CLA.png" alt="CLA" class="image" width="300" height="200">
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
        <img src="./img/ro.png" alt="ro" class="image" width="300" height="200">
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
        <img src="./img/mm.png" alt="mm" class="image" width="300" height="200">
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