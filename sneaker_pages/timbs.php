<?php
    include("mysql.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <p>hello</p>
        <p>hello</p>
        <a href="timbs.php" target="_blank"><img src="./img/timbs.png" alt="Timbs" class="image" width="300" height="200"></a>
                <div class="text-block">
                    <h4>Timberland 6 Inch Boots</h4>
                    <?php
                    $stmt = $connection->prepare("SELECT * FROM sneakers WHERE Model = ?");
                    $model = "Timberland 6 Inch Boot";
                    $stmt->bind_param("s", $model);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p>Marimi: " . $row["Marimi"] . "</p>";
                        echo "<p>Pret: " . $row["Pret"] . " RON</p>";
                    }
                    ?>
                </div>
        <p>hello</p>
        <p>hello</p>
        
        <script src="" async defer></script>
    </body>
</html>