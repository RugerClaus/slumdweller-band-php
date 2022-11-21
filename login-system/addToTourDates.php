<?php

include '../backend/connection.php';

if(isset($_POST['add'])) {
    $location = $_POST['location'];
    $date = $_POST['date'];

    $connection->query("INSERT INTO `tour`(location,date)values('$location','$date')");
}