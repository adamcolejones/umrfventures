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
            <h2>Contact Us</h2>
            <ul>
                <li>Contact Us</li>
                <li>UMRF Ventures, Inc 4075 Park Avenue Memphis, TN 38111</li>
                <li>Phone: (901) 678-4444 Email: info@umrfventures.com</li>
                <li>Map</li>
                <li>Partners</li>
                <li>If you are interested in partnering with UMRF Ventures and building a custom venture to support your company while establishing a talent pipeline, contact one of the email addresses below.</li>
                <li>Pierre Landaiche, CEO Email: pierre@umrfventures.com</li>
                <li>JT (Jutta) Schneider, Director Project Management & Corporate Initiatives Email: jtschneider@umrfventures.com</li>
                <li>Photo</li>
                <li>Students</li>
                <li>If you are a student at the University of Memphis and looking for employment, visit our employment page. For more information, contact us at this email address.</li>
                <li>Email: info@umrfventures.com</li>
                <li></li>
            </ul>
            <a href="test.php">Test</a>
            <div class="contactfooter">

            </div>
        </div>
        
    </body>
</html>