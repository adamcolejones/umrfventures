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
                <img class="managementphoto" src="../assets/TeamCruzSeguraRamirez.png" alt="">
                <div class="managementtext">
                    <div class="managementsubtitle">Cruz Segura-Ramirez – Manager | Workforce Management</div>
                    <div class="managementdescription">Cruz Segura-Ramirez joined UMRF Ventures in September 2017 and currently serves as Manager of Workforce Management and Business Analyst. He previously served as a Technical Support Agent, Technical Support Shift Lead and Level 2 Technical Support Agent. Prior to UMRF Ventures, he worked in education through curriculum design, lecture and instruction, and tutoring. Cruz holds a B.S. in Physics from the University of Central Arkansas and an M.S. in Electrical and Computer Engineering from the University of Memphis.</div>
                </div>
            </div>

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>