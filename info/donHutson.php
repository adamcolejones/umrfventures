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
                <img class="managementphoto" src="../assets/GovernanceDonHutson.png" alt="">
                <div class="managementtext">
                    <div class="managementsubtitle">Don Hutson</div>
                    <div class="managementdescription">Don has been recognized with many honors, most recently the National Speakers Association’s “Master of Influence” Award. He shares this recognition with leaders that include Ken Blanchard, Jack Kemp, Zig Ziglar and Norman Vincent Peale. Don is the author of 14 books, including his latest, Selling Value, and his two Wall Street Journal and New York Times best sellers, The One Minute Entrepreneur and the One Minute Negotiator.</div>
                </div>
            </div>

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>