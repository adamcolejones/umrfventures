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
                <!-- <div class="welcomebackground"></div> -->
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
                <a href="contact.php" class="textdescription">Contact UMRF Ventures</a> 
                <div class="textdescription"> for pricing and how this model can meet your company's needs.</div>
            </div>

            <div class="partnershowcasecontainer">
                <!-- <img class="partnershowcase" src="assets/PartnerShowcase.png"> -->
                <!-- THESE CLASSES HAVE BACKGROUND IMAGES MADE WITH PHOTOSHOP / GIMP.  Their dimensions are exact, so if you want to replace these, you will need to look at the dimensions of the images. -->
                <div class="partnershowcasetop">
                    <div class="partnershowcasetopleft"></div>
                    <div class="partnershowcasetoplefttext">"He went out of his way to help half of my office get access to work from home."  - FedEx on UMRF Venture's Frank -</div>
                    <div class="partnershowcasetopright"></div>
                    <div class="partnershowcasetoprighttext">"We see this as a direct pipeline for future IAM talent at Raymond James."  - Raymond James on partnership with UMRF Ventures -</div>
                </div>
                <div class="partnershowcasebottom">
                    <div class="partnershowcasebottomleft"></div>
                    <div class="partnershowcasebottomlefttext"> ___ </div>
                    <div class="partnershowcasebottomright"></div>
                    <div class="partnershowcasebottomrighttext">We contacted over ___ people to inform them and encourage ___.</div>
                </div>
            </div>

            <!-- 5. CONTENT SLIDESHOW -->
            <!-- Images will need to have the exact same dimensions to keep page from resizng. -->
            

            <!-- - 6. Partner Logos -->

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