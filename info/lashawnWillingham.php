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
                <img class="managementphoto" src="../assets/TeamLashawnWillingham.png" alt="">
                <div class="managementtext">
                    <div class="managementsubtitle">LaShawn Willingham – Manager | Sedgwick</div>
                    <div class="managementdescription">LaShawn Willingham joined UMRF Ventures in July 2018 and currently serves as Manager for the Sedgwick Support Center. She previously served as the Supervisor of the Sedgwick Support Center. Before her management role with Sedgwick, she was a Level 1 agent with the ECS Venture, where she was shortly promoted to shift lead as well as a Level 2 agent. She is a University of Memphis graduate with a B.S. in Health Service Administration with a minor in Public Relations. In her spare time, she enjoys cooking, reading, and journaling.</div>
                </div>
            </div>

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>