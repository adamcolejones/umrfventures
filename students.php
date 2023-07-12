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

            <div class="whowearelinks">
                <a href="whoweare.php" class="whowearelinkitem">About Us</a>
                <a href="students.php" class="whowearelinkitem current">Students</a>
                <a href="governance.php" class="whowearelinkitem">Governance</a>
                <a href="management.php" class="whowearelinkitem">Management</a>
            </div>

            <div class="studentContainer">
                <img class="studentPicture" src="assets/TPSpencerP.png" alt="">
                <img class="studentPicture" src="assets/TPChloeB.png" alt="">
            </div>


            <div class="studentContainer">
                <img class="studentPicture" src="assets/TPJacobM.png" alt="">
                <img class="studentPicture" src="assets/TPSpencerP.png" alt="">
            </div>

            <div class="studentContainer">
                <img class="studentPicture" src="assets/TPChloeB.png" alt="">
                <img class="studentPicture" src="assets/TPJacobM.png" alt="">
            </div>

            <div class="studentContainer">
                <img class="studentPicture" src="assets/TPAndrewE.png" alt="">
                <img class="studentPicture" src="assets/TPDylanD.png" alt="">
            </div>
            
            <div class="studentContainer">
                <img class="studentPicture" src="assets/TPMicaelaS.png" alt="">
            </div>
            

            <div class="textcontent">
                <div class="texttitle">Talent Pipeline</div>
                <div class="textdescription">Since 2017 more than 70 of our student employees have been employed by our partners. When you hire UMRF Ventures Inc we can become a training ground for your future staff.</div>
            </div>

            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>