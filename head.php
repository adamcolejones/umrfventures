<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// + This page determines whether to display the styling found on mobile.css or style.css
    // + style.css is for screens wider than tall.  (Horizontal Desktop Views)
    // + mobile.css is for screens that are taller than wide.  (Vertical Smart Phone Views)
    
?>

<!-- // + This page determines whether to display the styling found on mobile.css or style.css -->

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
// + style.css is for screens wider than tall.  (Horizontal Desktop Views)
            if (screenWidth > screenHeight) {
                styleSheet.innerHTML = '@import "style.css";';
            }
            // Otherwise, apply "mobile.css"
// + mobile.css is for screens that are taller than wide.  (Vertical Smart Phone Views)
            else {
                styleSheet.innerHTML = '@import "mobile.css";';
            }
        }

        window.addEventListener('resize', setStylesheet);
        window.addEventListener('load', setStylesheet);
    </script>
</head>