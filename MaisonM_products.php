<?php
include "mysql.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maison Mihara</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <h4>Maison Mihara</h4>
    <?php
    $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Marca = ?");
    $marca = "Maison Mihara";
    $stmt->bind_param("s", $marca);
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>Model: " . $row["Model"] . "</p>";
        echo "<p>Marimi: " . $row["Marimi"] . "</p>";
        echo "<p>Pret: " . $row["Pret"] . " RON</p>";
    }
    ?>

    

    <script src="" async defer></script>
</body>

</html>