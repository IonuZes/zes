<?php
include "mysqll.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rick Owens</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <h4>Rick Owens</h4>
    <?php
    $stmt = $connection->prepare("
        SELECT s.Model, s.Marimi, s.Pret, i.nume_imagine 
        FROM sneakers s
        LEFT JOIN Imagini i ON s.id = i.id_sneaker
        WHERE s.Marca = ?
    ");
    $marca = "Rick Owens";
    $stmt->bind_param("s", $marca);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>Model: " . $row["Model"] . "</p>";
        echo "<p>Marimi: " . $row["Marimi"] . "</p>";
        echo "<p>Pret: " . $row["Pret"] . " RON</p>";

        // Verificăm dacă există o imagine în baza de date, altfel folosim CLA.png
        $image = !empty($row["nume_imagine"]) ? $row["nume_imagine"] : "ro.png";
        echo "<a href='/atestat/sneaker_pages/rick.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
    }
    ?>

    

    <script src="" async defer></script>
</body>

</html>