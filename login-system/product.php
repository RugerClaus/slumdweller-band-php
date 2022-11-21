<?php 
    session_start();

    include 'functions.php';
    include 'connection.php';
    $user_data = check_login($connection);
    $query = "SELECT * FROM users WHERE superUser = true";

    $result = mysqli_query($connection,$query);

    if($result && $user_data) {
        echo "<p class='row justify-content-center' style='background-color: gray; color: white;'>Super User View</p>";
    }
    else {
        header('location: login.php');
    }
    if(isset($_POST['edit'])){
        include '../backend/shop.php';
        $product = new Product($_POST['id'],$_POST['name'], $_POST['image1'],$_POST['image2'],$_POST['image3'],$_POST['image4'],$_POST['image5'],$_POST['type'],$_POST['instock'],$_POST['description'],$_POST['price']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" />
    <style>
        img {
            height: 500px;
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
        body {
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        img {
            max-height: 50%;
            padding: 30px;
            margin-left: auto;
            margin-right: auto;
        }
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
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
            <form class='logout' action='logout.php' method='post'>
                <button type='submit' name='logout' class='btn' >&nbsp;Logout</button>
            </form>
            
        </p>
        <a href='products.php'><button class='btn'>Product Manager</button></a>
        <a href='tours.php'><button class='btn'>Tour Manager</button></a>
    </header>
    <img src='<?php echo '../' . $product->image1?>' alt="error" />
    <main>
        
        <form action="editProduct.php" enctype="multipart/form-data" method="post">
            <input type="hidden" name="id" value="<?php echo $product->product_id ?>">
            <p>Name:</p>
            <input type="text" name="name" value="<?php echo $product->name?>">
            <p>Type:</p>
            <input type="text" name="type" value="<?php echo $product->type?>">
            <p>Price:</p>
            <input type="text" name="price" value="<?php echo $product->price?>">
            <p>In Stock?:</p>
            <input type="text" name="instock" value="<?php if($product->in_stock == 1){echo "yes";}else{echo "no";} ?>">
            <p>Description: </p>
            <textarea name="description" style="font-family: helvetica; resize:none;"  cols="30" rows="10"><?php echo $product->description ?></textarea>
            <h2>Image 1:</h2>
            <input type="file" name="image1">
            <h2>Image 2:</h2>
            <input type="file" name="image2">
            <h2>Image 3:</h2>
            <input type="file" name="image3">
            <h2>Image 4:</h2>
            <input type="file" name="image4">
            <h2>Image 5:</h2>
            <input type="file" name="image5">
            <input type="submit" name="update" class="btn" />
        </form>
        <h1>Edit Images</h1>
        <form action="editPhotos.php" enctype="multipart/form-data" method="post">
            
            <input type="submit" name="updateImages" value="Update" />
        </form>
    </main>
    <?php }?>
    <form action="edit.php">
        <?php 
            
        ?>
    </form>
</body>
</html>