<?php
    include 'connection.php';
    session_start();

    include "connection.php";
    include "functions.php";

    $user_data = check_login($connection);
    $query = "SELECT * FROM users WHERE superUser = true";

    $result = mysqli_query($connection,$query);

    if($result && $user_data) {
        echo "<p class='row justify-content-center' style='background-color: gray; color: white;'>Super User View</p>";
    }
    else {
        header('location: login.php');
    }

    $dates = $productsDB->query("SELECT * FROM tour");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" />
    <title>Document</title>
    <style>
        body {
            max-width: 100vw;
            font-family: helvetica;
        }
        .body {
            width: 100vw;
        }
        .header {
            display: flex;
            width: 100vw;
            justify-content: space-evenly;
            text-justify: inter-ideograph;
            text-align: justify;
            align-items: center;
        }
        .productEditor {
            width: 90%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }
        .productEditor form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 3rem;
        }
        form {
            border: 1px solid black;
            padding: 50px;
        }
        .logout {
            border: none;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>
            <?php 
                echo $user_data['user_name'] . "'s Admin"
            ?>
        </h1>
        <p>
            <?php 
                echo 'Hello, '. $user_data['user_name'];
            ?>
            <form class='logout' action='logout.php' method='post'>
                <button type='submit' name='logout' class='btn' >&nbsp;Logout</button>
            </form>
            
        </p>
        <a href='products.php'><button class='btn'>Product Manager</button></a>
        <a href='tours.php'><button class='btn'>Tour Manager</button></a>
    </header>
    <table>
        <?php 
            while($row = $dates->fetch_assoc()){
                echo "<tr>";
                echo "<td>";
                echo $row['location'];
                echo "</td>";
                echo "<td>";
                echo $row['date'];
                echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>