<?php
    include_once dirname(__DIR__) . '/resources/templates/template.php';


    pageHead("Menufy");
    pageNavbar();

?>

    


    <section class="landing-page">

        <div class="textual-part">
            <h1 class="title">DIGITAL MENU FOR<br> YOUR BUSINESS</h1>
            <p class="subtitle">Subtle, convenient and beautiful digital menu for your <br> restaurant, coffee shop, bar and much more.</p>
            <button class="cta-btn btn">Contact us</button>
        </div>
        
        
        <div class="mockups">
            <img src="images/mockup.png" alt="" class="mockup">
        </div>


        <div class="logos">
            <!-- <a href="#" class="fa fa-facebook"></a> -->

        </div>
    </section>


    <section class="main-content">

        <div class="qr-img">
            <img src="images/qrcode.jpg" alt="">
        </div>

        <div class="textual-area">
            <p class="heading">CUSTOM QR CODE WITH <br>YOUR LOGO ON IT</p>
            <!-- <p class="heading">ONE QR CODE, INFINITE SCANS</p> -->
            <p class="subheading">Place the QR code on every table and help the customers decide. <br>Easy to use, scan the QR code and the menu opens on your device.</p>

            <div class="cta-section">
                <p class="cta-label">Check our services</p>
                <button class="btn cta">Services</button>
            </div>
        </div>

    </section>

    <!-- <hr> -->

    <section class="choose-design">
        <p class="design-heading">CHOOSE YOUR DESIGN</p>

        <div class="scrollable-div">
            <button class="bi bi-chevron-left no-btn" data-scroll="left"></button>
            <div class="inscrollable no-scroll" data-scroll="content">

                <ul class="design-cards">
                    <li class="design-card">
                        <div class="card-img">
                            <img src="images/design1.png" alt="Design 1">
                        </div>
                        <div class="card-desc">
                            <p class="card-title">Design 1</p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic non tempore ea debitis numquam nisi dolor beatae. Atque tempore distinctio, fuga amet saepe, corporis non cumque ex, in commodi illum. Consequatur quasi molestiae laboriosam, quod libero architecto corrupti natus molestias.</p>
                        </div>
                    </li>
                    <li class="design-card">
                        <div class="card-img">
                            <img src="images/design2.png" alt="Design 2">
                        </div>
                        <div class="card-desc">
                            <p class="card-title">Design 2</p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic non tempore ea debitis numquam nisi dolor beatae. Atque tempore distinctio, fuga amet saepe, corporis non cumque ex, in commodi illum. Consequatur quasi molestiae laboriosam, quod libero architecto corrupti natus molestias.</p>
                        </div>
                    </li>
                    <li class="design-card">
                        <div class="card-img">
                            <img src="images/design3.png" alt="Design 3">
                        </div>
                        <div class="card-desc">
                            <p class="card-title">Design 3</p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic non tempore ea debitis numquam nisi dolor beatae. Atque tempore distinctio, fuga amet saepe, corporis non cumque ex, in commodi illum. Consequatur quasi molestiae laboriosam, quod libero architecto corrupti natus molestias.</p>
                        </div>
                    </li>
                </ul>
            </div>
                <button class="bi bi-chevron-right no-btn" data-scroll="right"></button>

        </div>
    </section>

    <section class="features">

        <img src="images/shape1.png" alt="" class="shape1" aria-hidden="true">
        <img src="images/shape2.png" alt="" class="shape2" aria-hidden="true">
        <img src="images/shape3.png" alt="" class="shape3" aria-hidden="true">

        <p class="features-heading">Features</p>
        
        <div class="features-content">

            <ul class="features-listing">
                <div class="col1-row1">

                    <li class="feature">
                        <p class="num"> <img src="svg/devices_FILL0_wght400_GRAD0_opsz48.png" alt="" style="width:20px;"> </p>
                        <div class="f-desc">
                            <p class="f-title">Responsive design</p>
                            <p class="f-subtitle">
                                the menu works across all devices with all screen sizes.
                            </p>
                        </div>
                    </li>
                    <li class="feature row2">
                        <p class="num"><img src="svg/qrcodescanner.png" alt="" style="width:20px;"></p> 
                        <div class="f-desc">
                            <p class="f-title">Easy to use</p>
                            <p class="f-subtitle">
                                just scan the QR code and the menu pops up on your device.
                            </p>
                        </div>
                    </li>
                </div>

                <div class="col2-row1">

                    <li class="feature">
                        <p class="num"><img src="svg/noinstall.png" alt="" style="width:20px;"></p> 
                        <div class="f-desc">
                            <p class="f-title">No installations required</p>
                            <p class="f-subtitle">
                                our menu runs on the web, so you don't need to install anything.
                            </p>
                        </div>
                    </li>
                    <li class="feature col2-row2">
                        <p class="num"><img src="svg/designs.png" alt="" style="width:20px;"></p> 
                        <div class="f-desc">
                            <p class="f-title">Variety of designs</p>
                            <p class="f-subtitle">
                                you can choose your own design and request a change at any time.
                            </p>
                        </div>
                    </li>
                </div>
                    <li class="feature col3">
                        <p class="num"><img src="svg/available.png" alt="" style="width:20px;"></p> 
                        <div class="f-desc">
                            <p class="f-title">24/7 uptime</p>
                            <p class="f-subtitle">
                            the menu is available at any time, at any place.
                        </p>
                    </div>
                </li>
            </ul>
            
        </div>

    </section>

    <script src="scripts/arrows.js"></script>

<?php
pageFooter();
?>
