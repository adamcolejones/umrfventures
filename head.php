<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - 1. The style.css will always flash before mobile.css in mobile view.  To fix, transfer all parent styling to mobile.css
	// - 2. 
	// - 
    // -
    // -
	// -
	// -
    
?>

<head>
    <title>UMRF</title>
    <!-- This Meta Viewport breaks the dimensions of the Sub Tab Menu, but fixes the menu bar item sizing -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
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