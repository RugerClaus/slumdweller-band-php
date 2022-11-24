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
    $target_directory = "../"

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" />
    <title>Home || <?php echo $user_data['user_name'];?></title>
    <script src="JavaScript/index.js" type="module" defer></script>
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
    <div class="body index">
        <div id="header"></div>
        <main>
            <section class="productEditor">
                <h2>Product Manager: Add Product</h2>
                <form action="addToProducts.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Product Name: ">
                    <textarea name="description" style="font-family: helvetica;" id="" placeholder="Description: " cols="30" rows="10"></textarea>
                    <input type="file" name="image1" value="image1">
                    <input type="file" name="image2" value="image2">
                    <input type="file" name="image3" value="image3">
                    <input type="file" name="image4" value="image4">
                    <input type="file" name="image5" value="image5">
                    <label for="type">Type:</label><select name="type" id="type">
                        <option value="merch">Merch</option>
                        <option value="album">Album</option>
                    </select>
                    <label for="instock">In Stock?:</label><select name="instock" id="type">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                    <input type="number" placeholder="Price:" name="price" id="price" />

                    <input type="submit" name='addToProducts' value='Submit to Site' class="btn">
                    <input type="number" name="stockquantity" placeholder="Quantity In Stock">
                </form>
                <h2>Tour Date Manager: Add</h2>
                <form action="addToTourDates.php" method="post" >
                    <input type="text" name="location" placeholder="Location:" />
                    <input type="date" name="date" />
                    <input type="submit" name="add" value="Add">
                </form>
            </section>
        </main>
    </div>
    <script>
        const el = document.getElementById('header');
        const header = `
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
        `;
        el.innerHTML = `${header}`
    </script>
</body>
</html>