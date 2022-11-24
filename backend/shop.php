<?php

include 'connection.php';
include 'functions.php';

class Product {
    public $product_id;
    public $name;
    public $image1;
    public $image2;
    public $image3;
    public $image4;
    public $image5;
    public $type;
    public $in_stock;
    public $price;
    public int $stockQTY;
    
    public function __construct($product_id,$name,$image1,$image2,$image3,$image4,$image5,$type, $in_stock, $description,$price,$shopQTY)
    {
        $this->product_id = $product_id;
        $this->name = $name;
        $this->image1 = $image1;
        $this->image2 = $image2;
        $this->image3 = $image3;
        $this->image4 = $image4;
        $this->image5 = $image5;
        $this->type = $type;
        $this->in_stock = $in_stock;
        $this->description = $description;
        $this->price = $price;
        $this->shopQTY = $shopQTY;
    }
}
// $name = 'Forests of November';
// $type = 'album';
// $desc = 'Comes in a jewel case. Artwork and design by Ryan Blackbourn. Artwork created by Isabella Moreno. Only fifty of the signed copies will be made.';
// $image1 = 'assets/images/forestsofnovember.jpg';
// $image2 = '';
// $image3 = '';
// $image4 = '';
// $image5 = '';
// $in_stock = true;
// $id = create_id(6,null);


// $connection->query("INSERT INTO `products`(product_id,description,name,type,image1,image2,image3,image4,image5,in_stock) values('$id','$desc','$name','$type','$image1','$image2','$image3','$image4','$image5',$in_stock)");