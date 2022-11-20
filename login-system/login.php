<?php 
     session_start();

     include "connection.php";
     include "functions.php";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted

        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($password) && !is_numeric($user_name)){
            //read from db

            
            $query = "SELECT * FROM users WHERE user_name = '$user_name' limit 1";

            $result =  mysqli_query($connection,$query);
            $user_data = mysqli_fetch_assoc($result);
            if($result && mysqli_num_rows($result) > 0 && $user_data['password'] === $password) {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("location: index.php");
                die;
            }  
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body style="display: flex; height: 100vh; justify-content: center;">
    <form method="post" action="" style="display: flex; flex-direction: column; align-self: center; gap: 2rem; background-color: gray; padding: 50px;">
        <input  type="text" name="user_name" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button type="submit" class="btn">Log In!</button>
        <a href="signup.php">Sign Up!</a>
    </form>
</body>
</html>