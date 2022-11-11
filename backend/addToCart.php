<?php 
include 'connection.php';



if(isset($_POST['confirmAmount'])){
    $product = $_POST['product'];
    $amount = $_POST['amountToPost'];
    $connection->query("INSERT INTO `cart`(product, qty) values('$product','$amount')");
    header('location: ../index.php');
}
?>