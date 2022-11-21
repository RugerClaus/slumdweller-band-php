<?php 
    if(isset($_POST['update'])){
        include '../backend/shop.php';
        include '../backend/connection.php';

        $id = $_POST['id'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $price = $_POST['price'];
        $instock = $_POST['instock'];
        $desc = $_POST['description'];
        $uploaddir = 'uploads/';
        $uploadfile1 = $uploaddir . basename($_FILES['image1']['name']);
        $uploadfile2 = $uploaddir . basename($_FILES['image2']['name']);
        $uploadfile3 = $uploaddir . basename($_FILES['image3']['name']);
        $uploadfile4 = $uploaddir . basename($_FILES['image4']['name']);
        $uploadfile5 = $uploaddir . basename($_FILES['image5']['name']);

        echo '<pre>';
        if (move_uploaded_file($_FILES['image1']['tmp_name'], $uploadfile1)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
        if (move_uploaded_file($_FILES['image2']['tmp_name'], $uploadfile2)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
        if (move_uploaded_file($_FILES['image3']['tmp_name'], $uploadfile3)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
        if (move_uploaded_file($_FILES['image4']['tmp_name'], $uploadfile4)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
        if (move_uploaded_file($_FILES['image5']['tmp_name'], $uploadfile5)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
        echo 'Here is some more debugging info:';
        print_r($_FILES); 

        $query = "UPDATE `products`  SET `name`='$name',`description`='$desc',`type`='$type',`in_stock`='$instock',`price`='$price',`image1`='$uploadfile1',`image2`='$uploadfile2',`image3`='$uploadfile3',`image4`='$uploadfile4',`image5`='$uploadfile5' where `product_id` = '$id'";
        $connection->query($query);
        header('location: product.php');
    }
?>