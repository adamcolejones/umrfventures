<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - This file creates the menu bar content.
	// - The extra menuitems create a spacing that prevents scrollbar overlap
    // -
    // -
	// -
	// -

    function menu() {
        echo'  
            <div class="menu">
                <img class="umrflogo" src="assets/UMRF Logo.png" alt="">
                <a href="index.php" class="menuitem">Home</a>
                <a href="services.php" class="menuitem">What We Do</a>
                <a href="about-us.php" class="menuitem">Who We Are</a>
                <a href="newsroom.php" class="menuitem">Media Room</a>
                <a href="employment.php" class="menuitem">Employment</a>
                <a href="contact.php" class="menuitem">Contact</a>
                <div class="menuitem"></div>
                <div class="menuitem"></div>
            </div>
        ';
    }

    // <a href="contact.php">Contact Us</a>