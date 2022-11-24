<?php
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
    $products = $productsDB->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" />
    <title>Hello, <?php print_r($_SESSION['user_name']) ?></title>
    <style>
        img {
            max-width: 100px;
        }
        td {
            border: 1px solid black;
            flex-direction: column;
        
        }
        tr:hover {
            background-color: lawngreen;
        }
        tr {
            gap: 3rem;
        }
        table {
            max-width: 60%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            gap: 2rem;
        }
        .header {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
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
            <form action='logout.php' method='post'>
                <button type='submit' name='logout' class='btn' >&nbsp;Logout</button>
            </form>
            
        </p>
        <a href='index.php'><button class='btn'>Home</button></a>
    </header>
    <div>
        <table>
            <tr>
                <td>Name: </td>
                <td>ID: </td>
                <td>Description: </td>
                <td>Type: </td>
            </tr>
        <?php 
            while($row = $products->fetch_assoc()) {
                echo "<tr>";
                echo "<td>";
                echo $row['name'];
                echo "</td>";

                echo "<td>";
                echo $row['product_id'];
                echo "</td>";

                echo "<td>";
                echo $row['description'];
                echo "</td>";

                echo "<td>";
                echo $row['type'];
                echo "</td>";

                echo "<td>";
                echo "<img src='" . $row['image1'] . "' alt='" . $row['name'] ."' />";
                echo "</td>";
                echo "<td>";
                echo $row['price'];
                echo "</td>";
                echo "<td>";
                echo $row['stockqty'];
                echo "</td>";

                echo "<td>";
                echo "<form action='product.php' method='post'>";
                echo "<input type='hidden' name='id' value='" . $row['product_id'] . "' />";
                echo "<input type='hidden' name='name' value='" . $row['name'] . "' />";
                echo "<input type='hidden' name='type' value='" . $row['type'] . "' />";
                echo "<input type='hidden' name='description' value='" . $row['description'] . "' />";
                echo "<input type='hidden' name='instock' value='" . $row['in_stock'] . "' />";
                echo "<input type='hidden' name='image1' value='" . $row['image1'] . "' />";
                echo "<input type='hidden' name='image2' value='" . $row['image2'] . "' />";
                echo "<input type='hidden' name='image3' value='" . $row['image3'] . "' />";
                echo "<input type='hidden' name='image4' value='" . $row['image4'] . "' />";
                echo "<input type='hidden' name='image5' value='" . $row['image5'] . "' />";
                echo "<input type='hidden' name='price' value='" . $row['price'] . "' />";
                echo "<input type='hidden' name='stockquantity' value='" . $row['stockqty'] . "'/>";
                echo "<input class='btn' type='submit' name='edit' value='edit'/>";
                echo "</form>";
                echo "</td>";

                echo "<td>";
                echo "<form action='deleteProduct.php' method='post'>";
                echo "<input type='hidden' name='image1' value='" . $row['image1'] . "' />";
                echo "<input type='hidden' name='image2' value='" . $row['image2'] . "' />";
                echo "<input type='hidden' name='image3' value='" . $row['image3'] . "' />";
                echo "<input type='hidden' name='image4' value='" . $row['image4'] . "' />";
                echo "<input type='hidden' name='image5' value='" . $row['image5'] . "' />";
                echo "<input type='hidden' name='id' value='" . $row['product_id'] . "' />";
                echo "<input class='btn' type='submit' name='delete' value='Delete'/>";
                echo "</form>";
                echo "</td>";

                echo "</tr>";
            }
        ?>
        </table>
    </div>
</body>
</html>