<?php 

    $server = 'localhost';
    $username = 'root';
    $password = "";
    $database = "loginsystem";
    

    $connection = mysqli_connect($server,$username,$password,$database);

    if($connection->connect_error){
        die("Connection failed!: " . $connection->connect_error);
    }
    
    $productsDB = new mysqli('localhost','root','','slumdweller');
    if($productsDB->connect_error){
        die("Connection failed!: " . $productsDB->connect_error);
    }

?>