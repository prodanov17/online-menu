<?php
    include_once dirname(__DIR__) . '/resources/templates/template.php';


    pageHead("Menufy");
    pageNavbar();

?>

    


    <section class="contact-form">
        <div class="contact-container">
            <div class="left-side">
                <img src="images/email.jpg" alt="">
            </div>


            <form action="" class="right-side">
                <p class="contact-text">Contact Us</p>
                
                <div class="inputs">
                    <label class="custom-field one">
                        <input type="text" placeholder=" "/>
                        <span class="placeholder">Name</span>
                    </label>
                    <label class="custom-field one">
                        <input type="email" placeholder=" "/>
                        <span class="placeholder">Email</span>
                    </label>
                    <label class="custom-field one">
                        <textarea></textarea>
                        <span class="placeholder">Message</span>
                    </label>
                    <button type="submit" class="btn sub-btn">Submit</button>
                </div>
                <div class="contact-area">
                    <div class="mail">

                        <i class="fa-solid fa-envelope"></i><p class="contact-email">info@menufy.mk</p>
                    </div>
                    <div class="phone">

                        <i class="fa-solid fa-phone"></i><p class="contact-phone">+389 78 246 666</p>
                    </div>
                </div>
            </form>
            
        </div>

        <div class="socials">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
        </div>

    </section>
    

    <style>
        .footer{
            background-color: teal;
        }
        .nav-link::after{
            background-color: #8fc9d6;
        }
    </style>
