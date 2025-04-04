<?php
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

<form method="POST" action="checkout.php">
    <input type="text" name="first_name" placeholder="Prenume" required>
    <input type="text" name="last_name" placeholder="Nume" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="country" placeholder="Țara" required>
    <input type="text" name="state" placeholder="Județ" required>
    <input type="text" name="city" placeholder="Oraș" required>
    <input type="text" name="postal_code" placeholder="Cod poștal" required>
    <input type="text" name="street" placeholder="Strada" required>
    <button type="submit">Finalizează comanda</button>

</form>
<?php include 'footer.php'; ?>
