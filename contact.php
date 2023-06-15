<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - 
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
        <?php
            menu()
        ?>
        <div class="scrollableContent">
            <img class="contactpicture" src="assets/UMRFBuildingFront.png" alt="">

            <div class="textcontent">
                <div class="texttitle">Contact Us</div>
                <div class="textdescription">UMRF Ventures, Inc 4075 Park Avenue Memphis, TN 38111</div>
                <div class="textdescription">Phone: (901) 678-4444</div>
                <div class="textdescription">Email: info@umrfventures.com</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Google Map Here</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Partners</div>
                <div class="textdescription">If you are interested in partnering with UMRF Ventures and building a custom venture to support your company while establishing a talent pipeline, contact one of the email addresses below.</div>
                <div class="textdescription">Pierre Landaiche, CEO Email: pierre@umrfventures.com</div>
                <div class="textdescription">JT (Jutta) Schneider, Director Project Management & Corporate Initiatives Email: jtschneider@umrfventures.com</div>
            </div>

            <div class="textcontent">
                <div class="texttitle">Students</div>
                <div class="textdescription">If you are a student at the University of Memphis and looking for employment, visit our employment page. For more information, contact us at this email address.</div>
                <div class="textdescription">Email: info@umrfventures.com</div>
            </div>

            <a href="test.php">Test</a>
            <div class="contactfooter">

            </div>
        </div>
        
    </body>
</html>