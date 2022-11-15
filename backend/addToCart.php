<?php 
include 'connection.php';


if(isset($_POST['confirmAmount'])){
    $product = $_POST['product'];
    $amount = $_POST['amount'];
    $image = $_POST['productImage'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $connection->query("INSERT INTO `cart`(product, qty,type,image,price) values('$product','$amount','$type','$image','$price')");
    header('location: ../index.php');
}
?>