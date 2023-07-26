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
                <!-- <img class="managementphoto" src="../assets/TeamLaurenBoyette.png" alt=""> -->
                <div class="managementphoto" style="background-image: url('../assets/TeamLaurenBoyette.png');" alt=""></div>
                <div class="managementtext">
                    <div class="managementsubtitle">Lauren Boyette – Manager | Raymond James</div>
                    <div class="managementdescription">Lauren Boyette joined UMRF Ventures in October 2018 and currently serves as Manager of the Raymond James ventures. She previously served as a Technical Support Agent, Technical Support Shift Lead, and Supervisor. Lauren graduated from the University of Memphis in 2021 with a B.B.A. in Management. Lauren strives to help students develop professionally. She is proud of her academic and professional achievements and loves to assist in the success of others.</div>
                </div>
            </div>

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>