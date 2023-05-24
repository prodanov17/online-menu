<?php

function pageHead($title){
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/icons.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/services.css">
        <link rel="stylesheet" href="css/template.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="scripts/main.js" defer></script>
        <script src="https://kit.fontawesome.com/df9bf05a8f.js" crossorigin="anonymous"></script>
        <title><?php echo $title?></title>
    </head>
    <body>

<?php
}

function pageNavbar(){
    ?>

    <nav class="navbar">
        <a href="index.php" class="logo">
            <img src="https://img.icons8.com/ios/50/000000/restaurant-menu.png" class="menu-icon"/>
            <h3 class="logo-text">MENUFY</h3>
        </a>

        <div class="navigation">
            <button class="navbar-toggler third-button" type="button" data-toggler>
                <div class="animated-icon3" data-animate="button"><span></span><span></span><span></span></div>
            </button>

            <ul class="nav-links" data-content>
                <li class="nav-link active"><a href="index.php">Home</a></li>
                <li class="nav-link"><a href="services.php">Services</a></li>
                <li class="nav-link"><a href="contact.php">Contact</a></li>
                <li class="nav-link social">
                    <a href="#" class="fa fa-instagram"></a>
                </li>
            </ul>
        </div>
    </nav>
    

    <div class="empty-section" style="height:76px;"></div>
<?php
}

function pageFooter(){

    ?>
    
    <footer class="footer">
        <section class="upper-section">
            <div class="about-section">
                <h3 class="logo-text clr-white">MENUFY</h3>
                <p class="footer-subtitle clr-lesswhite">Digitalize your old boring paper menu and change it with a new modern one. The customers have never been happier. With the scan of a QR code, your entire list of items appear on the customer's phone.</p>
            </div>
            <div class="links-section">
                <p class="links-title clr-white">Links</p>
                <ul class="footer-links">
                    <li class="footer-link"><a href="#" class="clr-lesswhite">Home</a></li>
                    <li class="footer-link"><a href="#" class="clr-lesswhite">Services</a></li>
                    <li class="footer-link"><a href="#" class="clr-lesswhite">Contact</a></li>
                </ul>
            </div>

            <div class="further-information">
                <p class="links-title clr-white">Further Information</p>
                <ul class="footer-links">
                    <li class="footer-link"><a href="#" class="clr-lesswhite">Privacy policy</a></li>
                    <li class="footer-link"><a href="#" class="clr-lesswhite">Terms of Service</a></li>
                </ul>
            </div>

            <div class="social-media">
                <p class="links-title clr-white">Follow Us</p>
                <ul class="social-links">
                    <li class="social-link"><a href="#" class="fa fa-instagram clr-white"></a></li>
                    <li class="social-link"><a href="#" class="fa fa-facebook clr-white"></a></li>
                    <li class="social-link"><a href="#" class="fa fa-twitter clr-white"></a></li>
                </ul>
               
            </div>
        </section>
        <!-- <hr> -->
        <section class="lower-section">
            <p class="copyright clr-lesswhite">&copy; 2022 All rights reserved</p>
        </section>

    </footer>


</body>
</html>
<?php
}

?>