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
        <table style="color: white;">
            <?php 
            if(mysqli_num_rows($cartProducts) === 0){
                echo "<h1>Cart Is emtpy</h1>";
            } else 
            {
                while($row = $cartProducts->fetch_assoc()){
                    $product = $row['product'];
                    $image = $row['image'];
                    $price = $row['price'];
                    echo '<tr class="cart" id="' . $product . '" style="color: white;">';
                    echo "<td>";
                    echo "<form action='backend/removeFromCart.php' method='post' />";
                    echo "<input type='hidden' name='product' value='" . $product . "' />";
                    echo "<button type='submit' name='deleteFromCart' class='btn delete' value='delete' class='deleteFromCart'>Delete</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "<td id='qty'>";
                    echo $row['qty'];
                    echo "</td>";
                    echo "<td id='product'>";
                    echo $row['product'];
                    echo "</td>";
                    echo "<td>";
                    echo "</td>";
                    echo "<td id='type'>";
                    echo $row['type'];
                    echo "</td>";
                    echo "<td>";
                    echo "<img src='$image' alt='$product' />";
                    echo "</td>";
                    echo "<td>";
                    echo "$";
                    echo "</td>";
                    echo "<td id='price' class='price'>";
                    echo "$price";
                    echo "</td>";
                    echo '</tr>';
                }
            }
                
            ?>
        </table>
        
    </section>
    <?php 
        if(mysqli_num_rows($cartProducts) > 0){
            echo "<div id='checkout'></div>";
        }
    ?>
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD&intent=capture&enable-funding=venmo" data-sdk-integration-source="integrationbuilder"></script>
    <script >
        const prices = document.querySelectorAll('.price')
        const pricesArr = Array.from(prices)


        paypal.Buttons({
            createOrder: (data,actions) => actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: pricesArr.
                        }
                    }]
                }) 
        }).render('#checkout');
  
    </script>
</body>
</html>