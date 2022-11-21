<?php

include '../backend/connection.php';

$product_id = $_POST['id'];

$connection->query("DELETE FROM products where `product_id` = '$product_id'");

$file_pointer1 = $_POST['image1'];
$file_pointer2 = $_POST['image2'];
$file_pointer3 = $_POST['image3'];
$file_pointer4 = $_POST['image4'];
$file_pointer5 = $_POST['image5'];

if(!unlink('../' . $file_pointer1) && unlink('../' . $file_pointer2) && unlink('../' . $file_pointer3) && unlink('../' . $file_pointer4) && unlink('../' . $file_pointer5)){
    echo $file_pointer1 . " cannot be deleted due to an error. Please Contact Roger.";
}else {
    echo $file_pointer1 . " has been deleted";
}
header("location: products.php");



