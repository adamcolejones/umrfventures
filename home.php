<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - 1. This is the landing page for umrfventures.com
	// - 2. The menu.php file loads at the top of the page for navigation
    // - 3. The Home video will autoplay on most browsers if it's muted on start
    // - 4. Value Titles and Descriptions
    // - 5. Content Slide show
	// - 6. Partner Logos
	// - 7. Social Media Links
    // - 8. Contact Footer
    // ********************************************************



    // - 1. This is the landing page for umrfventures.com
    // - 2. The menu.php file loads at the top of the page for navigation
	require 'menu.php';
    
?>

<!-- - 1. This is the landing page for umrfventures.com -->
<!DOCTYPE html>
<html>
	<head>
		<title>UMRF</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Default Style Sheet, keep this to prevent white flashes on screen resizing -->
        <link rel="stylesheet" href="style.css">
        <!-- - #. Check if screen height or width is bigger, display content accordingly -->
        <style id="style-sheet"></style>
        <script>
            function setStylesheet() {
                var screenWidth = window.innerWidth;
                var screenHeight = window.innerHeight;
                var styleSheet = document.getElementById('style-sheet');

                // If screen is wider than its height, apply "style.css"
                if (screenWidth > screenHeight) {
                    styleSheet.innerHTML = '@import "style.css";';
                }
                // Otherwise, apply "mobile.css"
                else {
                    styleSheet.innerHTML = '@import "mobile.css";';
                }
            }

            window.addEventListener('resize', setStylesheet);
            window.addEventListener('load', setStylesheet);
        </script>
    </head>
    <body>
        <!-- - 2. The menu.php file loads at the top of the page for navigation -->
        <?php
            menu()
        ?>
        <div class="scrollableContent">
        <!-- - 3. The Home video will autoplay on most browsers if it's muted on start -->
            <div class="welcomecontainer">
                <div class="welcomebackground"></div>
                <video class="welcomevideo" loop autoplay playsinline muted controls>
                    <source src="assets/homevideo.mp4" type="video/mp4">    
                </video>
                <div class="welcometext">
                    <div class="welcometitle">A UNIQUE MODEL&nbsp;</div>
                    <div class="welcometitle">WITH UNIQUE SOLUTIONS</div>
                    <div class="welcomesubtitle">BUILDING YOUR&nbsp;</div>
                    <div class="welcomesubtitle">TALENT PIPELINE</div>
                    <div class="welcomedescription">UMRF Ventures is a managed service and contact center provider employing University students to meet your needs.</div>
                </div>
            </div>
            <!-- - 4. Value Titles and Descriptions -->
            <div class="textcontent">
                <div class="texttitle">Partner With Us</div>
                <div class="textdescription">One of the only private companies in America owned by a public university – doing what we do</div>
            </div>

            <!-- 5. CONTENT SLIDESHOW -->
            <!-- Images will need to have the exact same dimensions to keep page from resizng. -->
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="assets/UMRF5thAnny.png" style="width:100%">
                    <div class="text">Caption One</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="assets/UMRF5thAnny.png" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="assets/UMRF5thAnny.png" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
            </div>

            <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                }
            </script>

            <!-- - 6. Partner Logos -->
            <div class="partnerrow">
                <img class="fedexlogo" src="assets/FedEx Logo.png" alt="">
                <img class="raymondjameslogo" src="assets/Raymond James Logo.png" alt="">
                <img class="sedgwicklogo" src="assets/Sedgwick Logo.png" alt="">
            </div>
            <br>
            <!-- - 7. Social Media Links -->
            <div class="sociallinks">
                <img class="facebooklogo" src="assets/Facebook Logo.png" alt="">
                <img class="linkedinlogo" src="assets/Linkedin Logo.png" alt="">
                <img class="twitterlogo" src="assets/Twitter Logo.png" alt="">
                <img class="instagramlogo" src="assets/Instagram Logo.png" alt="">
            </div>
            <!-- - 8. Contact Footer -->
            <div class="contactfooter">
        
            </div>
        </div>
        
    </body>
</html>