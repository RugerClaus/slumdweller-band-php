<?php 

include 'backend/connection.php';

$result = $connection->query("SELECT * FROM cart")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="assets/stylesheets/index.css">
</head>
<body>
    <section class="album main">
        <table style="color: white; border:1px solid white;">
            <?php 
                while($row = $result->fetch_assoc()){
                    $image = $row['image'];
                    $product = $row['product'];
                    echo '<tr class="cart" id="' . $product . '" style="color: white; border:1px solid white;">';
                    echo "<td id='name'>";
                    echo $row['qty'];
                    echo "</td>";
                    echo "<td id='product'>";
                    echo $product;
                    echo "</td>";
                    echo "<td>";
                    echo $row['type'];
                    echo "</td>";
                    echo "<td>";
                    echo "<img src='$image' alt='$product' />";
                    echo "</td>";
                    echo '</tr>';
                }
            ?>
        </table>
    </section>
</body>
</html>