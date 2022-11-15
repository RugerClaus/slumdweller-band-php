<?php
include 'shop.php';

$elf_result = $connection->query("SELECT * FROM products where product_id = '237313'");
$product = $elf_result->fetch_assoc();
$elf = new Product($product['product_id'],$product['name'],$product['image1'],$product['image2'],$product['image3'],$product['image4'],$product['image5'],$product['type'],$product['in_stock'],$product['description']);

$fon_result = $connection->query("SELECT * FROM products where product_id = '224222'");
$product1 = $fon_result->fetch_assoc();
$fon = new Product($product1['product_id'],$product1['name'],$product1['image1'],$product1['image2'],$product1['image3'],$product1['image4'],$product1['image5'],$product1['type'],$product1['in_stock'],$product1['description']);

$pins_result = $connection->query("SELECT * FROM products where product_id = '271707'");
$product2 = $pins_result->fetch_assoc();
$pins = new Product($product2['product_id'],$product2['name'],$product2['image1'],$product2['image2'],$product2['image3'],$product2['image4'],$product2['image5'],$product2['type'],$product2['in_stock'],$product2['description']);

$patches_result = $connection->query("SELECT * FROM products where product_id = '126282'");
$product3 = $patches_result->fetch_assoc();
$patches = new Product($product['product_id'],$product3['name'],$product3['image1'],$product3['image2'],$product3['image3'],$product3['image4'],$product3['image5'],$product3['type'],$product3['in_stock'],$product3['description']);

$stickers_elf_result = $connection->query("SELECT * FROM products where product_id = '279767'");
$product4 = $stickers_elf_result->fetch_assoc();
$stickers_elf = new Product($product4['product_id'],$product4['name'],$product4['image1'],$product4['image2'],$product4['image3'],$product4['image4'],$product4['image5'],$product4['type'],$product4['in_stock'],$product4['description']);

$stickers_multicolor_result = $connection->query("SELECT * FROM products where product_id = '268696'");
$product5 = $stickers_multicolor_result->fetch_assoc();
$stickers_multicolor = new Product($product5['product_id'],$product5['name'],$product5['image1'],$product5['image2'],$product5['image3'],$product5['image4'],$product5['image5'],$product5['type'],$product5['in_stock'],$product5['description']);

$jones_result = $connection->query("SELECT * FROM products where product_id = '229222'");
$product6 = $jones_result->fetch_assoc();
$jones = new Product($product6['product_id'],$product6['name'],$product6['image1'],$product6['image2'],$product6['image3'],$product6['image4'],$product6['image5'],$product6['type'],$product6['in_stock'],$product6['description']);

$WITW_result = $connection->query("SELECT * FROM products where product_id = '292999'");
$product7 = $WITW_result->fetch_assoc();
$WITW = new Product($product7['product_id'],$product7['name'],$product7['image1'],$product7['image2'],$product7['image3'],$product7['image4'],$product7['image5'],$product7['type'],$product7['in_stock'],$product7['description']);

$SOTS_result = $connection->query("SELECT * FROM products where product_id = '289808'");
$product8 = $SOTS_result->fetch_assoc();
$SOTS = new Product($product8['product_id'],$product8['name'],$product8['image1'],$product8['image2'],$product8['image3'],$product8['image4'],$product8['image5'],$product8['type'],$product8['in_stock'],$product8['description']);

$ELFConcept_result = $connection->query("SELECT * FROM products where product_id = '189848'");
$product9 = $ELFConcept_result->fetch_assoc();
$ELFConcept = new Product($product9['product_id'],$product9['name'],$product9['image1'],$product9['image2'],$product9['image3'],$product9['image4'],$product9['image5'],$product9['type'],$product9['in_stock'],$product9['description']);

$FONConcept_result = $connection->query("SELECT * FROM products where product_id = '131393'");
$product10 = $FONConcept_result->fetch_assoc();
$FONConcept = new Product($product10['product_id'],$product10['name'],$product10['image1'],$product10['image2'],$product10['image3'],$product10['image4'],$product10['image5'],$product10['type'],$product10['in_stock'],$product10['description']);

$candles_result = $connection->query("SELECT * FROM products where product_id = '211011511'");
$product11 = $candles_result->fetch_assoc();
$candles = new Product($product11['product_id'],$product11['name'],$product11['image1'],$product11['image2'],$product11['image3'],$product11['image4'],$product11['image5'],$product11['type'],$product11['in_stock'],$product11['description']);

$Book1_result = $connection->query("SELECT * FROM products where product_id = '277717'");
$product12 = $Book1_result->fetch_assoc();
$Book1 = new Product($product12['product_id'],$product12['name'],$product12['image1'],$product12['image2'],$product12['image3'],$product12['image4'],$product12['image5'],$product12['type'],$product12['in_stock'],$product12['description']);

$Book2_result = $connection->query("SELECT * FROM products where product_id = '210210210'");
$product13 = $Book2_result->fetch_assoc();
$Book2 = new Product($product13['product_id'],$product13['name'],$product13['image1'],$product13['image2'],$product13['image3'],$product13['image4'],$product13['image5'],$product13['type'],$product13['in_stock'],$product13['description']);

$Book3_result = $connection->query("SELECT * FROM products where product_id = '282888'");
$product14 = $Book3_result->fetch_assoc();
$Book3 = new Product($product14['product_id'],$product14['name'],$product14['image1'],$product14['image2'],$product14['image3'],$product14['image4'],$product14['image5'],$product14['type'],$product14['in_stock'],$product14['description']);
