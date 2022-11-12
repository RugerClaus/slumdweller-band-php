<?php 
    include 'backend/shopProducts.php';
    include 'backend/connection.php';
    include 'backend/session.php';
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/stylesheets/index.css">
    <title>Slumdweller</title>
</head>
<body>
    <section class="sidebar">
            <a href="https://www.facebook.com/Slumdwellerband/" target="_blank"><img src="assets/images/social/facebook.png" alt="Facebook"></a>
            <a href="https://twitter.com/Slumdweller4" target="_blank"><img src="assets/images/social/twitter.svg" alt="Twitter"></a>
            <a href="https://www.instagram.com/slumdweller_/" target="_blank"><img src="assets/images/social/instagram.svg" alt="Instagram"></a>
            <a href="https://open.spotify.com/artist/0OivFr63rPkaxNgXI3iweU?si=OKpsgI8RQgKZ_aBxvde09w" target="_blank"><img src="assets/icons/spotify.svg" alt="Spotify"></a>
            <a href="https://www.youtube.com/channel/UCbZ4oFgZPT7tRYscrwjUEwg" target="_blank"><img src="assets/icons/youtube.svg" alt="YouTube"></a>
            <a href="https://slumdweller.bandcamp.com/" target="_blank"><img src="assets/icons/bandcamp.svg" alt="BandCamp"></a>
    </section>
    <section class="section landing" id="home">
        <header>
            <img src="assets/images/slumdweller-logo.webp" alt="<h1>Slumdweller</h1>">
        </header>
    </section>
    <section class="section nav" id="nav">
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#merch">Merch</a></li>
                <li><a href="#albums">Albums</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
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
                <li><a href="#home">Home</a></li>
                <li><a href="#merch">Merch</a></li>
                <li><a href="#albums">Albums</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="cart.php"><img src="assets/icons/cart.svg" class="icons" alt="Cart">
                    <?php 
                       echo mysqli_num_rows($_SESSION['cart'])
                    ?>
                    </a>
                </li>
            </ul>
        </nav>
    </section>
    <section class="section main merch" id="merch">
        <h1>Merch</h1>
    </section>
    <section class="section main albums" id="albums">
        <h1>Albums</h1>
        <div class="albums-container">
            <img src="<?php echo $eel->image?>" alt="The EverLasting Fog">
            <h2 style="text-align: center;"><?php echo $eel->name;?></h2>
            <?php 
                echo "<form action='products.php' method='post'>";
                echo "<button type='submit' class='buy' name='EEL'>Buy</button>";
                echo "<a href='https://open.spotify.com/artist/0OivFr63rPkaxNgXI3iweU?si=OKpsgI8RQgKZ_aBxvde09w' target='_blank'><img class='icon' src='assets/icons/spotify.svg' alt='Spotify' /></a>";
                echo "<a href='https://slumdweller.bandcamp.com' target='_blank'><img class='icon' src='assets/icons/bandcamp.svg' alt='Bandcamp' /></a>";
                echo "<a href='https://www.youtube.com/channel/UCbZ4oFgZPT7tRYscrwjUEwg' target='_blank'><img class='icon' src='assets/icons/youtube.svg' alt='Youtube' /></a>";
                echo "</form>";
            ?>
        </div>
        <div class="albums-container">
            <img src="<?php echo $ovam->image?>" alt="Of Vineyards and Mist">
            <h2 style="text-align: center;"><?php echo $ovam->name?></h2>
            <?php 
                echo "<form action='products.php' method='post'>";
                echo "<button type='submit' name='OVAM' class='buy'>Buy</button>";
                echo "<a href='https://open.spotify.com/artist/0OivFr63rPkaxNgXI3iweU?si=OKpsgI8RQgKZ_aBxvde09w' target='_blank'><img class='icon' src='assets/icons/spotify.svg' alt='Spotify' /></a>";
                echo "<a href='https://slumdweller.bandcamp.com' target='_blank'><img class='icon' src='assets/icons/bandcamp.svg' alt='Bandcamp' /></a>";
                echo "<a href='https://www.youtube.com/channel/UCbZ4oFgZPT7tRYscrwjUEwg' target='_blank'><img class='icon' src='assets/icons/youtube.svg' alt='Youtube' /></a>";
                echo "</form>";
            ?>
        </div>
        <div class="albums-container">
            <img src="<?php echo $fon->image ?>" alt="<?php echo $fon->name?>">
            <h2 style="text-align: center;"><?php echo $fon->name ?></h2>
            <?php 
                echo "<form action='products.php' method='post'>";
                echo "<button type='submit' name='FON' class='buy'>Buy</button>";
                echo "<a href='https://open.spotify.com/artist/0OivFr63rPkaxNgXI3iweU?si=OKpsgI8RQgKZ_aBxvde09w' target='_blank'><img class='icon' src='assets/icons/spotify.svg' alt='Spotify' /></a>";
                echo "<a href='https://slumdweller.bandcamp.com' target='_blank'><img class='icon' src='assets/icons/bandcamp.svg' alt='Bandcamp' /></a>";
                echo "<a href='https://www.youtube.com/channel/UCbZ4oFgZPT7tRYscrwjUEwg' target='_blank'><img class='icon' src='assets/icons/youtube.svg' alt='Youtube' /></a>";
                echo "</form>";
            ?>
        </div>
    </section>
    <section class="section main about" id="about">
        <h1>About</h1>
        <figure>
            <img src="assets/images/about/bandPhoto.jpg" alt="">
            <figcaption>Left to right: Aiden Moreno - Lead Guitar</figcaption>
            <figcaption>Isa Moreno - Rhythm Guitar</figcaption>
            <figcaption>Ryan Blackbourn - Songwriter, Vocals, Bass Guitar, Acoustic Guitar, Keyboards</figcaption>
            <figcaption>Ethan Wahlstrom - Drums</figcaption>
        </figure>
        <p>Slumdweller is a Stoner Metal and Acoustic band from Salt Lake City, Utah. Stemming from music made in Ryan Blackbourn's high school years, these records have been worked on and through, thouroughly. </p>
    </section>
    <section class="section main contact" id="contact">
        <h1>Contact Us</h1>
        <div class="contactformbox">
            <form action="backend/mail.php" method="post">
                <input type="text" name="name" placeholder="Name: ">
                <input type="text" name="email" placeholder="Email: ">
                <input type="text" name="subject" placeholder="Subject: ">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message: " style="font-family:helvetica;"></textarea>
            </form>
        </div>
    </section>
    <section class="extraspace">

    </section>
    <footer>
        <p class="footer"></p>
    </footer>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="frontend/js/stripe.js"></script>
    <script src="frontend/js/index.js"></script>
</body>
</html>