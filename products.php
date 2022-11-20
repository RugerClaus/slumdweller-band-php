<?php
    require 'backend/session.php';
    include 'backend/shopProducts.php';
    

    function product_name(){
        if(isset($_POST['EEL'])){
            return 'The Everlasting Fog';
        }
        if(isset($_POST['FON'])){
            return 'Forests Of November';
        }
        if(isset($_POST['pins'])){
            return 'Pins';
        }
        if(isset($_POST['patches'])){
            return 'Patches';
        }
        if(isset($_POST['stickers-elf'])){
            return 'The Everlasting Fog - Sticker';
        }
        if(isset($_POST['stickers-multicolor'])){
            return 'Multicolor Slumdweller Stickers';
        }
        if(isset($_POST['jones'])){
            return 'Slumdweller Jones';
        }
        if(isset($_POST['witw'])){
            return 'Winter In the Wastes - Concept Art';
        }
        if(isset($_POST['sots'])){
            return 'Season Of The Spine - Concept Art';
        }
        if(isset($_POST['elfconcept'])){
            return 'The Everlasting Fog - Concept Art';
        }
        if(isset($_POST['fonconcept'])){
            return 'Forests Of November - Concept Art';
        }
        if(isset($_POST['candles'])){
            return 'Candles';
        }
        if(isset($_POST['book1'])){
            return 'The Everlasting Fog - Short Story';
        }
        if(isset($_POST['book2'])){
            return 'Winter In The Wastes - Short Story';
        }
        if(isset($_POST['book3'])){
            return 'Season Of The Spine - Short Story';
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
        <section class="main albums" style="font-size: 2rem;">
            <h2 style="text-align: center;">
            <?php 
                if(isset($_POST['ELF'])){
                    echo "$elf->name";
                }
                if(isset($_POST['FON'])){
                    echo "$fon->name";
                }
                if(isset($_POST['pins'])){
                    echo "$pins->name";
                }
                if(isset($_POST['patches'])){
                    echo "$patches->name";
                }
                if(isset($_POST['stickers-elf'])){
                    echo "The Everlasting Fog - Sticker";
                }
                if(isset($_POST['stickers-multicolor'])){
                    echo "Multicolor Slumdweller - Stickers";
                }
                if(isset($_POST['jones'])){
                    echo "$jones->name";
                }
                if(isset($_POST['witw'])){
                    echo "Winter In The Wastes - Concept Art";
                }
                if(isset($_POST['sots'])){
                    echo "Season Of The Spines - Concept Art";
                }
                if(isset($_POST['elfconcept'])){
                    echo "$ELFConcept->name";
                }
                if(isset($_POST['fonconcept'])){
                    echo "$FONConcept->name";
                }
                if(isset($_POST['candles'])){
                    echo "$candles->name";
                }
                if(isset($_POST['book1'])){
                    echo "$Book1->name";
                }
                if(isset($_POST['book2'])){
                    echo "$Book2->name";
                }
                if(isset($_POST['book3'])){
                    echo "$Book3->name";
                }
            ?>
            </h2>
            <?php 
                if(isset($_POST['ELF'])){
                    echo "<img class='albumCover' src='" .  "$elf->image1' alt='$elf->name' />";
                    echo "<p>" . $elf->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $elf->price;
                    echo "</h1>";
                }
                if(isset($_POST['FON'])){
                    echo "<img class='albumCover' src='" .  "$fon->image1' alt='$fon->name' />";
                    echo "<p>" . $fon->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $fon->price;
                    echo "</h1>";
                }
                if(isset($_POST['pins'])){
                    echo "<img class='albumCover' src='" .  "$pins->image1' alt='$pins->name' />";
                    echo "<p>" . $pins->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $pins->price;
                    echo "</h1 class='price'>";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='$pins->image2' />"; 
                    echo "<img class='subimage' src='$pins->image3' />"; 
                    echo "</div>";
                }
                if(isset($_POST['patches'])){
                    echo "<img class='albumCover' src='" .  "$patches->image1' alt='$patches->name' />";
                    echo "<p>" . $patches->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $patches->price;
                    echo "</h1>";
                }
                if(isset($_POST['sots'])){
                    echo "<img class='albumCover' src='" .  "$SOTS->image1' alt='$SOTS->name' />";
                    echo "<p>" . $SOTS->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $SOTS->price;
                    echo "</h1>";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='$SOTS->image2' />"; 
                    echo "<img class='subimage' src='$SOTS->image3' />"; 
                    echo "<img class='subimage' src='$SOTS->image4' />"; 
                    echo "<img class='subimage' src='$SOTS->image5' />"; 
                    echo "</div>";
                }
                if(isset($_POST['stickers-elf'])){
                    echo "<img class='albumCover' src='" .  "$stickers_elf->image1' alt='$stickers_elf->name' />";
                    echo "<p>" . $stickers_elf->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $stickers_elf->price;
                    echo "</h1>";
                }
                if(isset($_POST['stickers-multicolor'])){
                    echo "<img class='albumCover' src='" .  "$stickers_multicolor->image1' alt='$stickers_multicolor->name' />";
                    echo "<p>" . $stickers_multicolor->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $stickers_multicolor->price;
                    echo "</h1>";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='$stickers_multicolor->image2' />"; 
                    echo "</div>";
                }
                if(isset($_POST['jones'])){
                    echo "<img class='albumCover' src='" .  "$jones->image1' alt='$jones->name' />";
                    echo "<p>" . $jones->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $jones->price;
                    echo "</h1>";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='$jones->image2' />"; 
                    echo "<img class='subimage' src='$jones->image3' />"; 
                    echo "<img class='subimage' src='$jones->image4' />"; 
                    echo "</div>";
                }
                if(isset($_POST['witw'])){
                    echo "<img class='albumCover' src='" .  "$WITW->image1' alt='$WITW->name' />";
                    echo "<p>" . $WITW->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $WITW->price;
                    echo "</h1>";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='$WITW->image2' />"; 
                    echo "<img class='subimage' src='$WITW->image3' />"; 
                    echo "<img class='subimage' src='$WITW->image4' />"; 
                    echo "<img class='subimage' src='$WITW->image5' />";
                    echo "</div>";
                }
                if(isset($_POST['elfconcept'])){
                    echo "<img class='albumCover' src='" .  "$ELFConcept->image1' alt='$ELFConcept->name' />";
                    echo "<p>" . $ELFConcept->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $ELFConcept->price;
                    echo "</h1>";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='$ELFConcept->image2' />"; 
                    echo "<img class='subimage' src='$ELFConcept->image3' />"; 
                    echo "<img class='subimage' src='$ELFConcept->image4' />"; 
                    echo "<img class='subimage' src='$ELFConcept->image5' />";
                    echo "</div>";
                }
                if(isset($_POST['fonconcept'])){
                    echo "<img class='albumCover' src='" .  "$FONConcept->image1' alt='$FONConcept->name' />";
                    echo "<p>" . $FONConcept->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $FONConcept->price;
                    echo "</h1>";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='$FONConcept->image2' />"; 
                    echo "<img class='subimage' src='$FONConcept->image3' />"; 
                    echo "<img class='subimage' src='$FONConcept->image4' />"; 
                    echo "</div>";
                }
                if(isset($_POST['candles'])){
                    echo "<img class='albumCover' src='" .  "$candles->image1' alt='$candles->name' />";
                    echo "<p>" . $candles->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $candles->price;
                    echo "</h1>";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='$candles->image2' />"; 
                    echo "<img class='subimage' src='$candles->image3' />"; 
                    echo "<img class='subimage' src='$candles->image4' />"; 
                    echo "<img class='subimage' src='$candles->image5' />";
                    echo "</div>";
                }
                if(isset($_POST['book1'])){
                    echo "<img class='albumCover' src='" .  "$Book1->image1' alt='$Book1->name' />";
                    echo "<p>" . $Book1->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $Book1->price;
                    echo "</h1>";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='$Book1->image2' />"; 
                    echo "<img class='subimage' src='$Book1->image3' />"; 
                    echo "<img class='subimage' src='$Book1->image4' />"; 
                    echo "<img class='subimage' src='$Book1->image5' />";
                    echo "</div>";
                }
                if(isset($_POST['book2'])){
                    echo "<img class='albumCover' src='" .  "$Book2->image1' alt='$Book3->name' />";
                    echo "<p>" . $Book2->description . "</p>";
                    echo "<h1 class='price'>";
                    echo $Book2->price;
                    echo "</h1>";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='$Book2->image2' />"; 
                    echo "<img class='subimage' src='$Book2->image3' />"; 
                    echo "<img class='subimage' src='$Book2->image4' />"; 
                    echo "<img class='subimage' src='$Book2->image5' />";
                    echo "</div>";
                }
                if(isset($_POST['book3'])){
                    echo "<img class='albumCover' src='" .  "$Book3->image1' alt='$Book3->name' />";
                    echo "<p>" . $Book3->description . "</p>";
                    echo "<h1 class='price'>";
                    echo "$" . $Book3->price;
                    echo "</h1>";
                    echo "<div class='subImages'>";
                    echo "<img class='subimage' src='$Book3->image2' />"; 
                    echo "<img class='subimage' src='$Book3->image3' />"; 
                    echo "<img class='subimage' src='$Book3->image4' />"; 
                    echo "<img class='subimage' src='$Book3->image5' />";
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


