<?php
    require 'backend/session.php';
    include 'backend/shopProducts.php';
    

    function product_name(){
        if(isset($_POST['EEL'])){
            return 'The Everlasting Fog';
        }
        if(isset($_POST['OVAM'])){
            return 'Of Vineyards And Mist';
        }
        if(isset($_POST['FON'])){
            return 'Forests Of November';
        }
        if(isset($_POST['pins'])){
            return 'Pins';
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo product_name()?></title>
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
        <section class="main albums">
            <h2 style="text-align: center;">
            <?php 
                if(isset($_POST['EEL'])){
                    echo "The Everlasting Fog";
                }
                if(isset($_POST['OVAM'])){
                    echo "Of Vineyards And Mist";
                }
                if(isset($_POST['FON'])){
                    echo "Forests of November";
                }
                if(isset($_POST['pins'])){
                    echo "$pins->name";
                }
            ?>
            </h2>
            <?php 
                if(isset($_POST['EEL'])){
                    echo "<img class='albumCover' src='" .  "$eel->image' alt='$eel->name' />";
                }
                if(isset($_POST['OVAM'])){
                    echo "<img class='albumCover' src='" .  "$ovam->image' alt='$ovam->name' />";
                }
                if(isset($_POST['FON'])){
                    echo "<img class='albumCover' src='" .  "$fon->image' alt='$fon->name' />";
                }
                if(isset($_POST['pins'])){
                    echo "<img class='albumCover' src='" .  "$pins->image' alt='$pins->name' />";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='assets/images/merch/pins/2.jpg' />"; 
                    echo "<img class='subimage' src='assets/images/merch/pins/3.jpg' />"; 
                    echo "</div>";
                }
                if(isset($_POST['patches'])){
                    echo "<img class='albumCover' src='" .  "$patches->image' alt='$patches->name' />";
                }
                if(isset($_POST['SOTSConcept'])){
                    echo "<img class='albumCover' src='" .  "$pins->image' alt='$pins->name' />";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='assets/images/merch/pins/2.jpg' />"; 
                    echo "<img class='subimage' src='assets/images/merch/pins/3.jpg' />"; 
                    echo "<img class='subimage' src='assets/images/merch/pins/4.jpg' />"; 
                    echo "<img class='subimage' src='assets/images/merch/pins/5.jpg' />"; 
                    echo "</div>";
                }
                if(isset($_POST['stickers-eel'])){
                    echo "<img class='albumCover' src='" .  "$pins->image' alt='$pins->name' />";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='assets/images/merch/pins/2.jpg' />"; 
                    echo "<img class='subimage' src='assets/images/merch/pins/3.jpg' />"; 
                    echo "<img class='subimage' src='assets/images/merch/pins/4.jpg' />"; 
                    echo "<img class='subimage' src='assets/images/merch/pins/5.jpg' />"; 
                    echo "</div>";
                }
                if(isset($_POST['stickers-multicolor'])){
                    echo "<img class='albumCover' src='" .  "$pins->image' alt='$pins->name' />";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='assets/images/merch/pins/2.jpg' />"; 
                    echo "<img class='subimage' src='assets/images/merch/pins/3.jpg' />"; 
                    echo "<img class='subimage' src='assets/images/merch/pins/4.jpg' />"; 
                    echo "<img class='subimage' src='assets/images/merch/pins/5.jpg' />"; 
                    echo "</div>";
                }
            ?>
            <div class="amountForCart">
                <label for="amount">Amount:</label>
                <button class="less amountOfProductsModifier">-</button>
                
                <button class="more amountOfProductsModifier" type="">+</button>
            </div>
            <form action="backend/addToCart.php" method="post" id="buy">
                <?php 
                    if(isset($_POST['EEL'])){
                        echo "<input type='hidden' name='product' value='" . $eel->name . "' />";
                        echo "<input type='hidden' name='productImage' value='" . $eel->image . "'/>";
                        echo "<input type='hidden' name='type' value='" . $eel->type . "'/>";
                    }
                    if(isset($_POST['OVAM'])){
                        echo "<input type='hidden' name='product' value='" . $ovam->name . "' />";
                        echo "<input type='hidden' name='productImage' value='" . $ovam->image . "'/>";
                        echo "<input type='hidden' name='type' value='" . $ovam->type . "'/>";
                    }
                    if(isset($_POST['FON'])){
                        echo "<input type='hidden' name='product' value='" . $fon->name . "' />";
                        echo "<input type='hidden' name='productImage' value='" . $fon->image . "'/>";
                        echo "<input type='hidden' name='type' value='" . $fon->type . "'/>";
                    }
                ?>
                <p class="amount"></p>
                <input type="hidden" name="amountToPost" class="amountToPost">
                <input type="submit" value="addToCart" id="addToCart" name="confirmAmount">
            </form>
            <section class="extraspace"></section>
        </section>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="frontend/js/stripe.js"></script>
        <script src="frontend/js/index.js"></script>
        <script src="frontend/js/products.js"></script>
</body>
</html>