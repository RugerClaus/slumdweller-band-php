<?php
include 'connection.php';

session_start();
$result = $connection->query('SELECT qty FROM cart');
$_SESSION['cart'] = $result;

