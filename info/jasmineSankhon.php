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
                <img class="managementphoto" src="../assets/TeamJasmineSankhon.png" alt="">
                <div class="managementtext">
                    <div class="managementsubtitle">Jasmine Sankhon – Manager | ECS</div>
                    <div class="managementdescription">Jasmine Sankhon joined UMRF Ventures in August 2017 and currently serves as Manager of the Level 1 and Level 2 Enterprise Common Services Desks for the company’s venture with FedEx. She previously served as a Supervisor and Assistant Manager for Level 1 ECS. She is very proud of her contributions to the development of the training and quality programs used within the company today. Prior to joining UMRF Ventures, she was a Technical Lead for the University of Memphis’s IT Support Desk and a Senior Phonathon Supervisor for the University of Memphis’s Annual Giving department. She is a proud University of Memphis graduate with a B.A. in Anthropology with a minor in Biology. In her free time, she enjoys working out, traveling, and spending time with her friends and family.</div>
                </div>
            </div>

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>