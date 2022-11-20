<?php 
    session_start();

    include 'connection.php';
    include 'functions.php';

    $user_data = check_login($connection);
    $query = "SELECT * FROM users WHERE superUser = true";

    $result = mysqli_query($connection,$query);

    if($result) {
        echo "<p class='row justify-content-center' style='background-color: gray; color: white;'>Super User View</p>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts || <?php echo $user_data['user_name']; ?> </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/index.css"/>
    <script src="JavaScript/index.js" defer></script>
</head>
<body id="profile">
    <div class="body profile">
        <header class="header">
            <h1>Blog management home</h1>
            <p>
                <?php 
                    echo 'Hello, '. $user_data['user_name'];
                ?>
                <a href="logout.php">&nbsp;Logout</a>
            </p>
        </header>
        <div id="root"></div>
        <form class="row justify-content-center" action="deleteAccount.php" method="post">
                <button type="submit" name="deleteAccount" class="btn btn-danger">Delete Account</button>
        </form>
    </div>
</body>
</html>