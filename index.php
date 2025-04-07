<?php
$title = "HomePage - ZesSneakers";
include "mysql.php";
include 'header.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZesSneakers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="product-grid">
        <?php
        $stmt = $conn->prepare("SELECT sneakers.id, sneakers.Model, sneakers.Marimi, sneakers.Pret, sneakers.Marca, sneakers.Descriere, sneakers.Site, sneakers.Site_img, imagini.nume_imagine FROM sneakers JOIN imagini ON sneakers.id = imagini.id_sneaker");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            echo "<div class='product-item'>";
            echo "<p>" . $row["Model"] . "</p>";
            echo "<p>" . $row["Marimi"] . "</p>";
            echo "<p class='price'>" . $row["Pret"] . " RON</p>";
            $image = !empty($row["nume_imagine"]) ? $row["nume_imagine"] : "track.png";
            echo "<a href='./sneaker_pages/snkrs.php?id=" . $row['id'] . "'><img src='./img/$image' alt='" . $row["Model"] . "'></a>";
            echo "</div>";
        }
        ?>
        </div>
        <?php include 'footer.php'; ?>
        <script src="" async defer></script>
    </div>
</body>

</html>