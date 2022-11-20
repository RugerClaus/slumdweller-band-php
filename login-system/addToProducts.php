<?php 

    include '../backend/connection.php';
    include '../backend/shop.php';

    if(isset($_POST['addToProducts']) && $_FILES[])

    $product_id = rand(200000,1000000);
    $name = $_POST['name'];
    $image1 = $_FILES['image1']["name"];
    $tmp1 = $_FILES['image1']['name'];
    $folder_for_1 = "assets/images" . $image1;
    $image2 = $_FILES['image2']["name"];
    $folder_for_2 = "../assets/images" . $image2;
    $tmp2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']["name"];
    $folder_for_3 = "../assets/images" . $image3;
    $tmp3 = $_FILES['image3']['name'];
    $image4 = $_FILES['image4']["name"];
    $folder_for_4 = "../assets/images" . $image4;
    $tmp4 = $_FILES['image4']['name'];
    $image5 = $_FILES['image5']["name"];
    $folder_for_5 = "../assets/images" . $image5;
    $tmp5 = $_FILES['image5']['name'];

    $type = $_POST['type'];
    $instock = $_POST['instock'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    
    $product = new Product($product_id,$name,$folder_for_1,$folder_for_2,$folder_for_3,$folder_for_4,$folder_for_5,$type,$instock,$desc,$price);
    $query = "INSERT INTO `products`(product_id,name,image1,image2,image3,image4,image5,type,in_stock,description,price) values ('$product->product_id','$product->name','$product->image1','$product->image2','$product->image3','$product->image4','$product->image5','$product->type','$product->in_stock','$product->description','$product->price')";
    $connection->query($query);

    if (move_uploaded_file($tmp1, $folder_for_1)) {

        $msg = "Image uploaded successfully";
        return $msg;
    }else {
        $msg = "Upload Failed!";
        return $msg;
    }
    if (move_uploaded_file($tmp2, $folder_for_2)) {

        $msg = "Image uploaded successfully";
        return $msg;
    }else {
        $msg = "Upload Failed!";
        return $msg;
    }
    if (move_uploaded_file($tmp3, $folder_for_3)) {

        $msg = "Image uploaded successfully";
        return $msg;
    }else {
        $msg = "Upload Failed!";
        return $msg;
    }
    if (move_uploaded_file($tmp4, $folder_for_4)) {

        $msg = "Image uploaded successfully";
        return $msg;
    }else {
        $msg = "Upload Failed!";
        return $msg;
    }
    if (move_uploaded_file($tmp5, $folder_for_5)) {

        $msg = "Image uploaded successfully";
        return $msg;
    }else {
        $msg = "Upload Failed!";
        return $msg;
    }
?>