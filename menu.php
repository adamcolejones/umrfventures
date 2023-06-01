<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - This file creates the menu bar content.
    // - Run a script called 'screenSize' that checks whether or not the window is wider or taller
    // - If the Menu is wider, (pc view) display all menu options on the nav bar
    // - Else the Menu is taller than the width, (mobile view) display a hamburger dropdown menu instead
    // - There is an extra menuitem class to add spacing on the right end
    // - There is an active listener that checks when the screen window is resized and re-runs 'screenSize'
	// -
	// -

    function menu() {
        echo'

        <nav id="menu" class="menu">
            <img class="umrflogo" src="assets/UMRF Logo.png" alt="">
        </nav>

            <script>
                function screenSize() {
                    var screenWidth = window.innerWidth;
                    var screenHeight = window.innerHeight;

                    // If screen is not wider than its height, show the hamburger menu instead
                    if (screenWidth > screenHeight) {
                        var contentDiv = document.getElementById("menu");
                        contentDiv.innerHTML = `
                            <nav id="menu" class="menu">
                                <img class="umrflogo" src="assets/UMRF Logo.png" alt="">
                                <div class="menuitemcontainer">
                                    <a href="index.php" class="menuitem">Home</a>
                                    <a href="services.php" class="menuitem">Who We Are</a>
                                    <a href="services.php" class="menuitem">What We Do</a>
                                    <a href="employment.php" class="menuitem">Employment</a>
                                    <a href="contact.php" class="menuitem">Contact</a>
                                    <div class="menuitem"></div>
                                    <div class="menuitem"></div>
                                </div>
                            </nav>
                        `;
                    } 
                    else {
                        var contentDiv = document.getElementById("menu");
                        contentDiv.innerHTML = `
                            <nav id="menu" class="menu">
                                <img class="umrflogo" src="assets/UMRF Logo.png" alt="">
                                <div class="menuitemcontainer">
                                    <a href="index.php" class="menuitem">&#9776;</a>
                                    <div class="menuitem"></div>
                                    <div class="menuitem"></div>
                                </div>
                            </nav> 
                        `;
                    }
                }

                window.addEventListener(`resize`, screenSize);
                window.addEventListener(`load`, screenSize);
            </script>
        ';
    }