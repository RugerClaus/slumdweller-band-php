<?php

include '../backend/connection.php';

$product_id = $_POST['id'];

$connection->query("DELETE FROM products where `product_id` = '$product_id'");
header('location:products.php');

