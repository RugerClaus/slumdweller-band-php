<?php
    include 'connection.php';

    

    if(isset($_POST['deleteFromCart'])){
        $product = $_POST['product'];
        $query = "DELETE FROM cart WHERE product = '$product'";
        $connection->query($query, 1);
        header('location:../cart.php');
    }
?>