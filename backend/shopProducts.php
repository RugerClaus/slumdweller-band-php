<?php
include 'shop.php';

$eel_result = $connection->query("SELECT * FROM products where product_id = '24'");
$product = $eel_result->fetch_assoc();
$eel = new Product($product['product_id'], $product['name'], $product['image'],$product['type'],$product['stock']);

$ovam_result = $connection->query("SELECT * FROM products where product_id = '117'");
$product = $ovam_result->fetch_assoc();
$ovam = new Product($product['product_id'], $product['name'], $product['image'],$product['type'],$product['stock']);

$fon_result = $connection->query("SELECT * FROM products where product_id = '118'");
$product = $fon_result->fetch_assoc();
$fon = new Product($product['product_id'], $product['name'], $product['image'],$product['type'],$product['stock']);