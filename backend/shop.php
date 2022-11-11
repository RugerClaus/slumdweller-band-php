<?php

include 'connection.php';
include 'functions.php';

class Product {
    public int $product_id;
    public $name;
    public $image;
    public $type;
    public int $in_stock;
    
    public function __construct(int $product_id,$name,$image,$type, int $in_stock)
    {
        $this->product_id = $product_id;
        $this->name = $name;
        $this->image = $image;
        $this->type = $type;
        $this->in_stock = $in_stock;
    }

    public function buy() {
        if($this->in_stock < 1) header('location: ../outOfStock.php');
        
        header("location: ../products/products.php");
    }
}
