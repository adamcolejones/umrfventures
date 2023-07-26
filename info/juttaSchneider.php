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
                <!-- <img class="managementphoto" src="../assets/TeamJuttaSchneider.png" alt=""> -->
                <div class="managementphoto" style="background-image: url('../assets/TeamJuttaSchneider.png');" alt=""></div>
                <div class="managementtext">
                    <div class="managementsubtitle">Jutta “JT” Schneider – Director | Project Management & Corporate Initiatives</div>
                    <div class="managementdescription">Jutta “JT” Schneider joined UMRF Ventures in November 2019 as Director of Project Management and Corporate Initiatives, bringing over 25 years of experience in organizational development and customer service. Prior to joining UMRF Ventures, she worked at TRUGREEN managing the call center workforce planning team. A native of Germany, JT relocated to Memphis with her family in 2016. After earning a master’s degree in Information Science from Saarland University in Saarbruecken, Germany, she held several leadership positions in customer service, process improvement, and organizational structure. In 2009, she created her own management consulting firm with clients including an international online bank and a global telecommunications company. In her free time, JT enjoys spending time with family and cooking. Her German dishes are a favorite among friends and neighbors in Memphis. She is happiest juggling multiple home improvement projects at once. Training the family dog Maya is an ongoing “process improvement” project.</div>
                </div>
            </div>
            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>