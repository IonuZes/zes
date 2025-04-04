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
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    $title = "Barbati - ZesSneakers";
    include 'header.php';
    ?>
    <div class="categories">
    <?php
    $stmt = $conn->prepare("SELECT sneakers.id, sneakers.Model, sneakers.Marimi, sneakers.Pret, sneakers.Marca, sneakers.Descriere, sneakers.Site, sneakers.Site_img, imagini.nume_imagine 
    FROM sneakers 
    JOIN imagini ON sneakers.id = imagini.id_sneaker 
    WHERE sneakers.Marimi LIKE '%40%' 
        OR sneakers.Marimi LIKE '%41%' 
        OR sneakers.Marimi LIKE '%42%' 
        OR sneakers.Marimi LIKE '%43%' 
        OR sneakers.Marimi LIKE '%44%' 
        OR sneakers.Marimi LIKE '%45%'");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        echo "<div class='category'>";
        echo "<p>" . htmlspecialchars($row["Model"]) . "</p>";
        echo "<p>Marimi disponibile: " . htmlspecialchars($row["Marimi"]) . "</p>";
        echo "<p class='price'>" . htmlspecialchars($row["Pret"]) . " RON</p>";
        $image = !empty($row["nume_imagine"]) ? htmlspecialchars($row["nume_imagine"]) : "track.png";
        echo "<a href='./sneaker_pages/snkrs.php?id=" . htmlspecialchars($row['id']) . "'><img src='./img/$image' alt='" . htmlspecialchars($row["Model"]) . "' style='width:500px; height:auto;'></a>";
        echo "</div>";
    }
    ?>
    </div>

    <script src="" async defer></script>
</body>
<?php include 'footer.php'; ?>

</html>
