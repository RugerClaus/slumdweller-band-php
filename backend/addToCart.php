<?php 
include 'connection.php';
session_start();
$result = $connection->query('SELECT qty FROM cart');
$_SESSION['cart'] = $result;


if(isset($_POST['confirmAmount'])){
    $product = $_POST['product'];
    $amount = $_POST['amountToPost'];
    $image = $_POST['productImage'];
    $type = $_POST['type'];
    $connection->query("INSERT INTO `cart`(product, qty,type,image) values('$product','$amount','$type','$image')");
    header('location: ../index.php');
}
?>