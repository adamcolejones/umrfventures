<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - 1. This is the landing page for umrfventures.com
	// - 2. The menu.php file loads at the top of the page for navigation
    // - 3. The Home video will autoplay on most browsers if it's muted on start
    // - 4. Value Titles and Descriptions
	// - 5. Partner Logos
	// - 6. Social Media Links
    // - 7. News, Media Room, testing links
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
                <video class="welcomevideo" loop autoplay playsinline muted>
                    <source src="assets/homevideo.mp4" type="video/mp4">    
                </video>
                <div class="welcometext">
                    <div class="welcometitle">A UNIQUE MODEL&nbsp;</div>
                    <div class="welcometitle">WITH UNIQUE SOLUTIONS</div>
                    <div class="welcomesubtitle">BUILDING YOUR </div>
                    <div class="welcomesubtitle">TALENT PIPELINE</div>
                    <div class="welcomedescription">UMRF Ventures is a managed service and contact center provider employing University students to meet your needs.</div>
                </div>
            </div>
            <!-- - 4. Value Titles and Descriptions -->
            <div class="textcontent">
                <div class="texttitle">Partner With Us</div>
                <div class="textdescription">One of the only private companies in America owned by a public university – doing what we do</div>
            </div>
            <div class="textcontent">
                <div>
                    <span class="inlinetexttitle">Placeholder Text Here</span>
                    <!-- <a class="inlinetextlink" href="">Talent Pipeline</a> -->
                </div>
                <div class="textdescription">When our students graduate,  you have trained and qualified candidates for jobs in your organization</div>
            </div>
            <!-- - 5. Partner Logos -->
            <div class="partnerrow">
                <img class="fedexlogo" src="assets/FedEx Logo.png" alt="">
                <img class="raymondjameslogo" src="assets/Raymond James Logo.png" alt="">
                <img class="sedgwicklogo" src="assets/Sedgwick Logo.png" alt="">
            </div>
            <br>
            <!-- - 6. Social Media Links -->
            <div class="sociallinks">
                <img class="facebooklogo" src="assets/Facebook Logo.png" alt="">
                <img class="linkedinlogo" src="assets/Linkedin Logo.png" alt="">
                <img class="instagramlogo" src="assets/Instagram Logo.png" alt="">
                <img class="twitterlogo" src="assets/Twitter Logo.png" alt="">
            </div>
            <!-- - 7. testing links -->
            <a href="test.php">Test</a>
            <!-- - 8. Contact Footer -->
            <div class="contactfooter">
        
            </div>
        </div>
        
    </body>
</html>