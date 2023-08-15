<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - 1. This is the about page for umrfventures.com
	// - 2. The menu.php file loads at the top of the page for navigation
	// - 
    // -
    // -
	// -
	// -

	require 'menu.php';
    
?>

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
            <div>
                <video width="100%" height="auto" controls loop autoplay playsinline muted>
                    <source src="assets/homevideo.mp4" type="video/mp4">    
                </video>
            </div>
            <div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">About Us</div>
                    <div class="servicesdescription">UMRF Ventures is a company staffed by students who attend the University of Memphis.<a href="about.php" class="readmore">Read More</a></div>
                </div>
            <!--Lack of coded white space is taken into account for styling on the line below, do not have tabs, newlines, or white space between the divs-->
            </div><div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">Our Students</div>
                    <div class="servicesdescription">Description Goes Here  <a href="students.php" class="readmore">Read More</a></div>
                </div>
            </div>
            <!--Allow white space new line here for styling-->
            <div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">Our Team / Governance</div>
                    <div class="servicesdescription">Description Goes Here  <a href="management.php" class="readmore">Read More</a></div>
                </div>
            <!--Lack of coded white space is taken into account for styling on the line below, do not have tabs, newlines, or white space between the divs-->
            </div><div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">FAQs</div>
                    <div class="servicesdescription">Description Goes Here  <a href="faq.php" class="readmore">Read More</a></div>
                </div>
            </div>
            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>