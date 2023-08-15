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
    <!-- Preload the stylesheets -->
    <link rel="preload" href="style.css" as="style">
    <link rel="preload" href="mobile.css" as="style">
    <!-- Default Style Sheet, keep this to prevent white flashes on screen resizing -->
    <link rel="stylesheet" href="style.css">
    <!-- - #. Check if screen height or width is bigger, display content accordingly -->
    <style id="style-sheet"></style>
    <script>
        var resizeTimer;

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

        function debounce(func, delay) {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(func, delay);
        }

        function onWindowResize() {
            debounce(setStylesheet, 250); // Adjust the debounce delay as needed
        }

        window.addEventListener('resize', onWindowResize);
        window.addEventListener('load', setStylesheet);
    </script>
</head>
