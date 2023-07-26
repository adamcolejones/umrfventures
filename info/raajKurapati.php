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
                <!-- <img class="managementphoto" src="../assets/GovernanceRaajKurapati.png" alt=""> -->
                <div class="managementphoto" style="background-image: url('../assets/GovernanceRaajKurapati.png');" alt=""></div>
                <div class="managementtext">
                    <div class="managementsubtitle">Raaj Kurapati</div>
                    <div class="managementdescription">Before joining the University of Memphis, Raaj Kurapati previously held the positions of Vice President for Finance and Chief Financial Officer for Texas A&M University -- Kingsville and Associate Vice Chancellor for Financial Services and Business Operations for the University of Alaska in Fairbanks. He also served as Vice President & Chief Financial/Compliance Officer/Vice President & Chief Internal Auditor for the Bank of FSM in Pohnpei, Micronesia and Senior Auditor for Deloitte & Touche in Saipan and Guam/Micronesia. Kurapati earned his bachelor of business administration (BBA) from East Texas Baptist University with a concentration in management and accounting. He is an accredited investment fiduciary as well as an accredited investment fiduciary analyst and serves on various finance and education boards.</div>
                </div>
            </div>

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>