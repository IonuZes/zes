<?php
$title = "Rezultatele Căutării - ZesSneakers";
include 'header.php';
include 'mysql.php';
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
$query = isset($_GET['query']) ? trim($_GET['query']) : '';
if (!empty($query)) {
    $sql ="SELECT sneakers.id, sneakers.Model, sneakers.Marimi, sneakers.Pret, sneakers.Marca, sneakers.Descriere, sneakers.Site, sneakers.Site_img, imagini.nume_imagine 
    FROM sneakers 
    JOIN imagini 
    ON sneakers.id = imagini.id_sneaker 
    WHERE marca LIKE ? 
    OR model LIKE ?";
    $stmt = $connection->prepare($sql);
    $searchTerm = "%" . $query . "%";
    $stmt->bind_param("ss", $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = null;
}
?>
<?php
echo "<div class='container'>";
    echo "<h1>Rezultatele căutării pentru: '<?php echo htmlspecialchars($query); ?>'</h1>";
    
    echo "<div class='product-grid'>";
    foreach ($result as $row) {
        echo "<div class='product-item'>";
        echo "<p>" . $row["Model"] . "</p>";
        echo "<p>" . $row["Marimi"] . "</p>";
        echo "<p class='price'>" . $row["Pret"] . " RON</p>";
        $image = !empty($row["nume_imagine"]) ? $row["nume_imagine"] : "track.png";
        echo "<a href='/atestat/sneaker_pages/snkrs.php?id=" . $row['id'] . "'><img src='/atestat/img/$image' class='img' alt='" . $row["Model"] . "' style='width:500px; height:auto;'></a>";
        echo "</div>";
    }
    echo "</div>";
echo "</div>";
?>
</body>
<?php include 'footer.php'; ?>
</html>