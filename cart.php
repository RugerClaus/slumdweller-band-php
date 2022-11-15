<?php 

include 'backend/connection.php';
include 'backend/addToCart.php';

$cartProducts = $connection->query("SELECT * FROM cart");


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
            if(mysqli_num_rows($cartProducts) === 0){
                echo "<h1>Cart Is emtpy</h1>";
            } else 
            {
                while($row = $cartProducts->fetch_assoc()){
                    $product = $row['product'];
                    echo '<tr class="cart" id="' . $row['product'] . '" style="color: white; border:1px solid white;">';
                    echo "<td>";
                    echo "<form action='backend/removeFromCart.php' method='post' />";
                    echo "<input type='hidden' name='product' value='" . $row['product'] . "' />";
                    echo "<input type='submit' name='deleteFromCart' value='delete' class='deleteFromCart' />";
                    echo "</form>";
                    echo "</td>";
                    echo "<td id='name'>";
                    echo $row['qty'];
                    echo "</td>";
                    echo "<td id='product'>";
                    echo $row['product'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['type'];
                    echo "</td>";
                    echo "<td>";
                    echo "<img src='$image' alt='$product' />";
                    echo "</td>";
                    echo '</tr>';
                }
            }
                
            ?>
        </table>
        <?php 
            if(mysqli_num_rows($cartProducts) !== 0){
                echo "<a href='payment.php' class='btn'>Checkout</a>";
            }
        ?>
    </section>
</body>
</html>