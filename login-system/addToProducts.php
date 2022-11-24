<?php 

    include '../backend/connection.php';
    include '../backend/shop.php';

    $product_id = rand(200000,10000000);
    $name = $_POST['name'];
    $type = $_POST['type'];
    $instock = $_POST['instock'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $shopQTY = $_POST['stockquantity'];
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
        
    $product = new Product($product_id,$name,'login-system/' . $uploadfile1 , 'login-system/' . $uploadfile2, 'login-system/' . $uploadfile3, 'login-system/' . $uploadfile4, 'login-system/' . $uploadfile5,$type,$instock,$desc,$price,$shopQTY);
    $query = "INSERT INTO `products` (product_id,name,image1,image2,image3,image4,image5,type,in_stock,description,price) values ('$product->product_id','$product->name','$product->image1','$product->image2','$product->image3','$product->image4','$product->image5','$product->type','$product->in_stock','$product->description','$product->price')";
    $connection->query("INSERT INTO `products`(product_id,name,image1,image2,image3,image4,image5,type,in_stock,description,price) VALUES('$product->product_id','$product->name','$product->image1','$product->image2','$product->image3','$product->image4','$product->image5','$product->type','$product->in_stock','$product->description','$product->price')") or die($connection->error);
    header('location: index.php');

    

    // if (move_uploaded_file($tmp1, $folder_for_1)) {

    //     $msg = "Image uploaded successfully";
    //     return $msg;
    // }else {
    //     $msg = "Upload Failed!";
    //     return $msg;
    // }
    // if (move_uploaded_file($tmp2, $folder_for_2)) {

    //     $msg = "Image uploaded successfully";
    //     return $msg;
    // }else {
    //     $msg = "Upload Failed!";
    //     return $msg;
    // }
    // if (move_uploaded_file($tmp3, $folder_for_3)) {

    //     $msg = "Image uploaded successfully";
    //     return $msg;
    // }else {
    //     $msg = "Upload Failed!";
    //     return $msg;
    // }
    // if (move_uploaded_file($tmp4, $folder_for_4)) {

    //     $msg = "Image uploaded successfully";
    //     return $msg;
    // }else {
    //     $msg = "Upload Failed!";
    //     return $msg;
    // }
    // if (move_uploaded_file($tmp5, $folder_for_5)) {

    //     $msg = "Image uploaded successfully";
    //     return $msg;
    // }else {
    //     $msg = "Upload Failed!";
    //     return $msg;
    // }
?>