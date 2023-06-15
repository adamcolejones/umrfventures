<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - This is for the "who we are" page
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
        <?php
            menu()
        ?>
        <div class="scrollableContent">
            <div><a href="whoweare.php" class="back">Back</a></div>
            <div>
                <h2>Our Students - Who We Are</h2>
                <img class="defaultpicture" src="assets/TPSpencerP.png" alt="">
                <img class="defaultpicture" src="assets/TPChloeB.png" alt="">
                <img class="defaultpicture" src="assets/TPJacobM.png" alt="">
                <img class="defaultpicture" src="assets/TPAndrewE.png" alt="">
                <img class="defaultpicture" src="assets/TPDylanD.png" alt="">
                <img class="defaultpicture" src="assets/TPMicaelaS.png" alt="">
                <ul>
                    <li>Talent Pipeline</li>
                    <li>Since 2017 more than 70 of our student employees have been employed by our partners. When you hire UMRF Ventures Inc we can become a training ground for your future staff.</li>
                    <li></li>
                </ul>
            </div>
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>