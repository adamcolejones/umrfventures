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

	require 'infomenu.php';
    
?>

<!DOCTYPE html>
<html>
	<head>
        <title>UMRF</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Default Style Sheet, keep this to prevent white flashes on screen resizing -->
        <link rel="stylesheet" href="../style.css">
        <!-- - #. Check if screen height or width is bigger, display content accordingly -->
        <style id="style-sheet"></style>
        <script>
            function setStylesheet() {
                var screenWidth = window.innerWidth;
                var screenHeight = window.innerHeight;
                var styleSheet = document.getElementById('style-sheet');

                // If screen is wider than its height, apply "style.css"
                if (screenWidth > screenHeight) {
                    styleSheet.innerHTML = '@import "../style.css";';
                }
                // Otherwise, apply "mobile.css"
                else {
                    styleSheet.innerHTML = '@import "../mobile.css";';
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
            
            <!-- <img class="managementheader" src="assets/UMRFFrontLawn.png" alt=""> -->

            <div class="managementcontainer">
                <img class="managementphoto" src="../assets/GovernanceMarkFogelman.png" alt="">
                <div class="managementtext">
                    <div class="managementsubtitle">Mark Fogelman</div>
                    <div class="managementdescription">Mark Fogelman is co-owner and President of Fogelman, a privately held multifamily investment and management company headquartered in Memphis, Tennessee. Mark holds a BSM degree from Tulane University's Freeman School of Business where he was the recipient of the Evelyn and William Burkenroad Award, and currently serves as a Trustee on the Freeman School Council and The Tulane President’s Council. He is past president of the Tennessee Apartment Association, Temple Israel and is on the board of governors of New Memphis Institute, The National Multi-Housing Council and Peak Campus Housing.</div>
                </div>
            </div>

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>