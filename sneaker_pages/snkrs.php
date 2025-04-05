<?php
include "mysql.php";
include 'header.php';

session_start();
$id = isset($_GET['id']) ? $_GET['id'] : null;
$query = "SELECT sneakers.id, sneakers.Model, sneakers.Marimi, sneakers.Pret, sneakers.Marca, sneakers.Descriere, sneakers.Site, sneakers.Site_img, imagini.nume_imagine FROM sneakers JOIN imagini ON sneakers.id = imagini.id_sneaker WHERE id = ?;";
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Produsul nu există.");
}

$product = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['size'])) {
    $size = $_POST['size'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = [
        'id' => $product['id'],
        'model' => $product['Model'],
        'size' => $size,
        'price' => $product['Pret']
    ];

    header("Location: /atestat/basket.php");
    exit();
}

$title = $product['Model'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/atestat/styles.css">
</head>

<body>
<div class="container">
    <div class="product-details">
        <div class="product-image">
            <img src="/atestat/img/<?php echo $product['nume_imagine']?>" alt="<?php echo $product['Model']; ?>">
        </div>
        <div class="product-info">
            <h1><?php echo $product['Model']?></h1>
            <p><?php echo $product['Marca']?></p>
            <p><?php echo $product['Descriere']?></p>
            <p class="price"><?php echo $product['Pret']?> RON</p>
            <div class="add-to-cart">
                <form method="post">
                    <label for="size">Choose size:</label>
                    <select name="size" id="size" required>
                        <?php 
                        $sizes = explode(", ", $product['Marimi']);
                        foreach ($sizes as $size) {
                            echo "<option value='" . htmlspecialchars($size) . "'>" . htmlspecialchars($size) . "</option>";
                        }
                        ?>
                    </select>
                    <button type="submit" class="btn">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
    <div class="brand-logo">
        <a href="<?php echo $product['Site']?>" target="_blank">
            <img src="/atestat/brand-logo/<?php echo $product['Site_img']?>" alt="<?php echo $product['Marca']; ?> logo">
        </a>
    </div>
</div>
</body>
<?php include 'footer.php'; ?>
</html>
