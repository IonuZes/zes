<?php
$title = "Finalizare comandă - ZesSneakers";
include 'header.php';
session_start();
require_once 'mysql.php'; // or whatever your database connection file is named

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $postal_code = $_POST['postal_code'];
        $street = $_POST['street'];

        // Calculate total price
        $total_price = 0;
        foreach ($_SESSION['cart'] as $item) {
            $total_price += $item['price'];
        }

        // Start a transaction
        $conn->beginTransaction();

        // Insert the order
        $stmt = $conn->prepare("INSERT INTO orders (first_name, last_name, email, country, state, city, postal_code, street, total_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$first_name, $last_name, $email, $country, $state, $city, $postal_code, $street, $total_price]);

        $order_id = $conn->lastInsertId();

        // Insert order items
        $stmt = $conn->prepare("INSERT INTO order_items (order_id, product_id, price) VALUES (?, ?, ?)");
        foreach ($_SESSION['cart'] as $item) {
            $stmt->execute([$order_id, $item['id'], $item['price']]);
        }

        // Commit the transaction
        $conn->commit();
        unset($_SESSION['cart']);

        echo "Order placed successfully!";
    } catch (PDOException $e) {
        // Rollback the transaction if there was an error
        $conn->rollBack();
        echo "Error: " . $e->getMessage();
    }
}

?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/atestat/styles.css">
</head>
<body>
    <div class="container">
        <h1>Finalizare comandă</h1>
        <div class="checkout-form">
            <form method="post">
                <div class="form-group">
                    <label for="first_name">Prenume:</label>
                    <input type="text" id="first_name" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Nume:</label>
                    <input type="text" id="last_name" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="country">Țară:</label>
                    <input type="text" id="country" name="country" required>
                </div>
                <div class="form-group">
                    <label for="state">Județ:</label>
                    <input type="text" id="state" name="state" required>
                </div>
                <div class="form-group">
                    <label for="city">Oraș:</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div class="form-group">
                    <label for="postal_code">Cod poștal:</label>
                    <input type="text" id="postal_code" name="postal_code" required>
                </div>
                <div class="form-group">
                    <label for="street">Adresă:</label>
                    <input type="text" id="street" name="street" required>
                </div>
                <button type="submit" class="btn btn-primary">Plasează comanda</button>
            </form>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>
