<?php 
    include 'profile.php';

    
    $id = $user_data['user_id'];
    $query = "DELETE FROM users where user_id = '$id'";

    mysqli_query($connection,$query);
    header('location: login.php')
?>