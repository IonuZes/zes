<?php
include "mysqll.php";
?>
<!DOCTYPE html>
<html>
    <style>

    </style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Timberland</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <h4>Timberland</h4>
    <?php
    $stmt = $connection->prepare("
        SELECT s.Model, s.Marimi, s.Pret, i.nume_imagine 
        FROM sneakers s
        LEFT JOIN Imagini i ON s.id = i.id_sneaker
        WHERE s.Marca = ?
    ");
    $marca = "Timberland";
    $stmt->bind_param("s", $marca);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>Model: " . $row["Model"] . "</p>";
        echo "<p>Marimi: " . $row["Marimi"] . "</p>";
        echo "<p>Pret: " . $row["Pret"] . " RON</p>";
        $image = !empty($row["nume_imagine"]) ? $row["nume_imagine"] : "timbs.png";
        echo "<a href='/atestat/sneaker_pages/timbs.php'><img src='./img/$image' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
    }
    ?>

    

    <script src="" async defer></script>
</body>

</html>