<?php
session_start();
include("mysql.php");
include('header.php');

$title = "Coșul meu";

// Initialize total
$total = 0;

// Remove item from cart
if (isset($_POST['remove'])) {
    $index = $_POST['remove'];
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index the array
    }
}

// Clear cart
if (isset($_POST['clear'])) {
    unset($_SESSION['cart']);
}
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
    <main class="container">
        <h1>Coșul meu</h1>
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Produs</th>
                        <th>Mărime</th>
                        <th>Preț</th>
                        <th>Acțiune</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $index => $item): 
                        $total += $item['price'];
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['model']); ?></td>
                            <td><?php echo htmlspecialchars($item['size']); ?></td>
                            <td><?php echo htmlspecialchars($item['price']); ?> RON</td>
                            <td>
                                <form method="post">
                                    <input type="hidden" name="remove" value="<?php echo $index; ?>">
                                    <button type="submit">Elimină</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"><strong>Total:</strong></td>
                        <td><strong><?php echo $total; ?> RON</strong></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
            <form method="post">
                <button type="submit" name="clear">Golește coșul</button>
            </form>
            <a href="/atestat/checkout.php" class="button">Finalizează comanda</a>
        <?php else: ?>
            <p>Coșul tău este gol.</p>
        <?php endif; ?>
    </main>
</body>
</html>
<?php include('footer.php'); ?>