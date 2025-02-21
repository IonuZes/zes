<?php
$title = "Yasuhiro - View";
include("mysql.php");
include ('header.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="container">
        <div class="left-column">
            <img src="/atestat/img/mm.png" class="active">
        </div>

        <div class="right-column">
            <div class="product-description">
                <span>Maison Mihara</span>
                <h2>Yasuhiro</h2>
                <p>Un sneaker conceptual, care combină estetica vintage cu elemente deconstructive, creând un look artistic și unic.</p>
            </div>

            <div class="product-price">
                <span class="price">4500 RON</span>
            </div>

            <div class="product-size">
                <span>39</span>
            </div>
        </div>
    </main>
    <div class="logi">
        <a href="https://en.miharayasuhiro.jp/" target="_blank"><img src="/atestat/brand-logo/miharayasuhiro.png" alt="" width="500" height="300"></a>
    </div>
    <script src="" async defer></script>
</body>
<?php include ('footer.php'); ?>
</html>