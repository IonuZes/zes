<?php
$title = "Louis Vuitton - Products";
include "mysql.php";
include "header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/atestat/styles.css">
</head>

<body>
    <?php
    $stmt = $connection->prepare("
        SELECT s.id, s.Model, s.Marimi, s.Pret, i.nume_imagine 
        FROM sneakers s
        LEFT JOIN Imagini i ON s.id = i.id_sneaker
        WHERE s.Marca = ?
    ");
    $marca = "Louis Vuitton";
    $stmt->bind_param("s", $marca);
    $stmt->execute();
    $result = $stmt->get_result();
    echo "<div class='container'>";
    echo "<div class='product-grid'>";
    while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='product-item'>";
                echo "<p>" . $row["Model"] . "</p>";
                echo "<p>" . $row["Marimi"] . "</p>";
                echo "<p class='price'>" . $row["Pret"] . " RON</p>";
                $image = !empty($row["nume_imagine"]) ? $row["nume_imagine"] : "track.png";
                echo "<a href='/atestat/sneaker_pages/snkrs.php?id=". $row['id']. "'><img src='./img/$image' alt='" . $row["Model"] . "'></a>";
            echo "</div>";        
    }
    echo "</div>";
    echo "</div>";
    ?>
    <script src="" async defer></script>
</body>
<?php include "footer.php";?>
</html>