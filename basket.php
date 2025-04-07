<?php
session_start();
include("mysql.php");

$title = "Coșul meu - ZesSneakers";
include('header.php');

$total = 0;

if (isset($_POST['remove'])) {
    $index = $_POST['remove'];
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

if (isset($_POST['clear'])) {
    unset($_SESSION['cart']);
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/atestat/styles.css">
</head>
<body>
<div class="container">
<h1>Coșul meu</h1>
<?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
    <div class="cart-items">
    <?php foreach ($_SESSION['cart'] as $index => $item): 
        $total += $item['price'];
    ?>
    <div class="cart-item">
    <h3><?php echo htmlspecialchars($item['model']); ?></h3>
    <p>Mărime: <?php echo htmlspecialchars($item['size']); ?> &nbsp;</p>
    <p class="price"><?php echo htmlspecialchars($item['price']); ?> RON</p>
    <form method="post" class="remove-form">
    <input type="hidden" name="remove" value="<?php echo $index; ?>">
    <button type="submit" class="btn btn-remove">Elimină</button>
    </form>
    </div>
    <?php endforeach; ?>
    </div>
    <div class="cart-summary">
    <h2>Total: <span class="price"><?php echo $total; ?> RON</span></h2>
    <form method="post" class="clear-cart-form">
        <button type="submit" name="clear" class="btn btn-secondary">Golește coșul</button>
    </form>
    <a href="/atestat/checkout.php" class="btn btn-primary">Finalizează comanda</a>
    </div>
    <?php else: ?>
    <p class="empty-cart">Coșul tău este gol.</p>
    <?php endif; ?>
</div>
</body>
<?php include 'footer.php'; ?>

</html>