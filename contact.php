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

            <div class="contacttextcontent">
                <div class="texttitle">Contact Us</div>
                <div class="textdescription">UMRF Ventures, Inc 4075 Park Avenue Memphis, TN 38111</div>
                <div class="textdescription">Phone: (901) 678-4444</div>
                <div class="textdescription">Email: info@umrfventures.com</div>
            </div>

            <iframe class="contactmap"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3263.995387066702!2d-89.92840922354011!3d35.106826072778134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x887f86b404b00001%3A0x4353cd43430ffc07!2sUMRF%20Ventures%2C%20Inc!5e0!3m2!1sen!2sus!4v1689864135118!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="contacttextcontent">
                <div class="texttitle">Partners</div>
                <div class="textdescription">If you are interested in partnering with UMRF Ventures and building a custom venture to support your company while establishing a talent pipeline, contact one of the email addresses below.</div>
                <div class="textdescription">Pierre Landaiche, CEO Email: pierre@umrfventures.com</div>
                <div class="textdescription">JT (Jutta) Schneider, Director Project Management & Corporate Initiatives Email: jtschneider@umrfventures.com</div>
            </div>

            <div class="contacttextcontent">
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