<?php
    require 'backend/session.php';
    include 'backend/shop.php';
    
    if(isset($_POST['buy'])){
        $product = new Product($_POST['id'],$_POST['name'],$_POST['image1'],$_POST['image2'],$_POST['image3'],$_POST['image4'],$_POST['image5'],$_POST['type'],$_POST['instock'],$_POST['description'],$_POST['price']);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print_r ($product->name)?></title>
    <link rel="stylesheet" href="assets/stylesheets/index.css">
    <link rel="stylesheet" href="assets/stylesheets/products.css">
</head>
<body>
        <section class="sidebar">
            <a href=""><img src="assets/images/social/facebook.png" alt="Facebook"></a>
            <a href=""><img src="assets/images/social/twitter.svg" alt="Twitter"></a>
            <a href=""><img src="assets/images/social/instagram.svg" alt="Instagram"></a>
            <a href=""><img src="assets/icons/spotify.svg" alt="Spotify"></a>
            <a href=""><img src="assets/icons/youtube.svg" alt="YouTube"></a>
            <a href=""><img src="assets/icons/bandcamp.svg" alt="BandCamp"></a>
        </section>
        <section class="section landing" id="home">
            <header>
                <img src="assets/images/slumdweller-logo.webp" alt="<h1>Slumdweller</h1>">
            </header>
        </section>
        <section class="section nav" id="nav">
            <nav>
                <ul>
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="index.php#merch">Merch</a></li>
                    <li><a href="index.php#albums">Albums</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                    <li><a href="cart.php"><img src="assets/icons/cart.svg" class="icons" alt="Cart">
                        <?php 
                            echo mysqli_num_rows($_SESSION['cart'])
                        ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        <section class="mobileNav" id="home">
            <nav>
                <ul>
                    <li><a href="https://slumdwellermusic.com"><img src="assets/images/slumdweller-logo-mobile.webp" alt=""></a></li>
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="index.php#merch">Merch</a></li>
                    <li><a href="index.php#albums">Albums</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                    <li><a href="cart.php"><img src="assets/icons/cart.svg" class="icons" alt="Cart">
                        <?php 
                            echo mysqli_num_rows($_SESSION['cart'])
                        ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </section> 
        <section class="main albums" style="font-size: 2rem;">
            <h2 style="text-align: center;">
            <?php 
                echo "<h1>$product->name</h1>";
                echo "<img class='albumCover' src='$product->image1' alt='$product->name' />";
                echo "<p>" . $product->description . "</p>";
                echo "<h1 class='price'>";
                echo $product->price;
                echo "</h1>";
                echo "<div class='subImages'>";
                echo "<img class='subimage' src='$product->image2' />"; 
                echo "<img class='subimage' src='$product->image3' />"; 
                echo "<img class='subimage' src='$product->image4' />"; 
                echo "<img class='subimage' src='$product->image5' />";
                echo "</div>";

    }
            ?>
            <section class="extraspace"></section>
            <div id="checkout"></div>
        </section>
        <footer>
            <p class="footer"></p>
        </footer>
        <script src="frontend/js/index.js"></script>
        <script src="frontend/js/products.js"></script>
        <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD&intent=capture&enable-funding=venmo" data-sdk-integration-source="integrationbuilder"></script>
    <script >
        const products = (function() {
            const price = document.querySelector('.price')
            const checkout = document.getElementById('checkout')

            checkout.addEventListener('click', (e) => {
                e.preventDefault()
            })

        paypal.Buttons({
            createOrder: (data,actions) => actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: price.innerHTML
                        }
                    }]
                }) 
        }).render('#checkout');
    })()
  
    </script>
</body>
</html>


