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
                <img class="managementphoto" src="../assets/GovernanceJasbirDhaliwal.png" alt="">
                <div class="managementtext">
                    <div class="managementsubtitle">Jasbir Dhaliwal</div>
                    <div class="managementdescription">Dr. Jasbir Dhaliwal is Professor of Information Systems and Executive Vice-President for Research & Innovation at the University of Memphis. He also serves as Executive Director of the University of Memphis Research Foundation which holds all the equity in UMRF Ventures Inc. He led the innovation team that developed the business model leading to the founding of UMRF Ventures Inc. in 2017 and serving as its founding President. He has significant international experience in leading applied innovation at universities in Canada, Singapore and Norway. He is currently leading the University of Memphis into the top-tier national Carnegie R1 ranking as Tennessee’s second flagship public research university. His other interests include hiking the Wolf River trails of Shelby Farms; canoeing the lakes of Norway and British Columbia, Canada; and being active as an angel investor in technology start-ups from his home in Germantown, Tennessee.</div>
                </div>
            </div>

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>