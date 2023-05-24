<?php
    include_once dirname(__DIR__) . '/resources/templates/template.php';


    pageHead("Menufy");
    pageNavbar();

?>

    


    <section class="landing-page-s">

        <div class="textual-part-s">
            <h1 class="title-s">WE OFFER YOU THE<br> BEST SERVICES</h1>
            <p class="subtitle-s">From unlimited QR scans, to unlimited products and <br>categories, we've got you covered.</p>
            <button class="cta-btn-s btn">Learn more</button>
        </div>
        
        
        <div class="mockups">
            <img src="images/blueqrcode.png" alt="" class="mockup-s">
        </div>

    </section>
    
    <section class="main-content-s">
        <div class="circ"></div>
        <p class="main-heading">WHAT WE OFFER?</p>

        <ul class="main-cards">
            <li class="main-card">
                <div class="main-card-icon"><img src="svg/category.png" alt=""></div>
                <div class="main-card-desc">
                    <p class="main-card-title">Unlimited categories</p>
                    <p class="main-card-sub">You can have as many categories as you might need.</p>
                </div>
            </li>
            <li class="main-card">
                <div class="main-card-icon"><img src="svg/products.png" alt=""></div>
                <div class="main-card-desc">
                    <p class="main-card-title">Unlimited products</p>
                    <p class="main-card-sub">The sky is the limit! Add as many products as you want on your menu.</p>
                </div>
            </li>
            <li class="main-card">
                <div class="main-card-icon"><img src="svg/qrcodescanner.png" alt=""></div>
                <div class="main-card-desc">
                    <p class="main-card-title">Unlimited QR scans</p>
                    <p class="main-card-sub">Have your customers scan your menus forever. No limitations.</p>
                </div>
            </li>
                <li class="main-card">
                    <div class="main-card-icon"><img src="svg/support1.png" alt=""></div>
                    <div class="main-card-desc">
                        <p class="main-card-title">Unlimited support</p>
                        <p class="main-card-sub">Found a new recipe? No problem, you can request an item to be added at any time.</p>
                    </div>
                </li>
                <li class="main-card">
                    <div class="main-card-icon"><img src="svg/designs.png" alt=""></div>
                    <div class="main-card-desc">
                        <p class="main-card-title">Variety of designs</p>
                        <p class="main-card-sub">Choose your design! Don't like your current one? You can always request a change. We're always working on more designs.</p>
                    </div>
                </li>
                <li class="main-card">
                    <div class="main-card-icon"><img src="svg/qrcode.png" alt=""></div>
                    <div class="main-card-desc">
                        <p class="main-card-title">Custom QR code</p>
                        <p class="main-card-sub">You can have your logo embedded in your QR code, so it will look more professional on the table.</p>
                    </div>
                </li>
                <!-- <button class="contact-btn">Contact Us</button> -->
            </ul>

    </section>

    <style>
        .footer{
            background-color: #8fc9d6;
        }
        .nav-link::after{
            background-color: rgb(255, 94, 94);
        }
    </style>

<?php
pageFooter();
?>