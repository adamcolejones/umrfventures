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
                <!-- <img class="managementphoto" src="../assets/GovernancePatrickElam.png" alt=""> -->
                <div class="managementphoto" style="background-image: url('../assets/GovernancePatrickElam.png');" alt=""></div>
                <div class="managementtext">
                    <div class="managementsubtitle">Patrick Elam</div>
                    <div class="managementdescription">Patrick began his FedEx career as a package handler in 1993. He was promoted to Managing Director of Hub Operations in 2014 and Vice President of the Memphis Hub in April 2016. After serving over two years as Vice President of the Memphis Hub Night Operations, Patrick made the transition to Vice President/GM, AGFS Southern Region in June 2018. Patrick now serves as Vice President of US Operations, Southeast Region. Patrick is a graduate of the University of Central Arkansas, where he earned a football scholarship and won a National Championship in 1991. He was also inducted into the Arkansas Sports Hall of Fame in October 2017. Patrick is a four–time recipient of the FedEx Five Star Award and a two-time winner of the FedEx Purple Promise Award.</div>
                </div>
            </div>

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>