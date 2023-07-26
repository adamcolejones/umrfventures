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
                <!-- <img class="managementphoto" src="../assets/TeamKatyHiggins.png" alt=""> -->
                <div class="managementphoto" style="background-image: url('../assets/TeamKatyHiggins.png');" alt=""></div>
                <div class="managementtext">
                    <div class="managementsubtitle">Katy Higgins – Manager | FedEx Command Center</div>
                    <div class="managementdescription">Katy Higgins joined UMRF Ventures in June 2018 and currently serves as Manager for the Systems Analytics and Information Security teams. She previously served as Operations Lead. Before her position with UMRF Ventures, she held a variety of different leadership positions in retail and academic research settings. She is a magna cum laude graduate with B.S. degrees in Psychology and German, and is currently pursuing a master’s degree in Information Systems and a master’s certificate in Business Project Management. In her spare time, she likes to read, paint, and ride her horse.</div>
                </div>
            </div>

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>