<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - This file creates the menu bar content.
    // - There is an extra menuitem class to add spacing on the right end
    // -
	// -
	// -

    function menu() {
        echo'  
            <div class="menu">
                <img class="umrflogo" src="assets/UMRF Logo.png" alt="">
                <a href="index.php" class="menuitem">Home</a>
                <a href="services.php" class="menuitem">Services</a>
                <a href="employment.php" class="menuitem">Employment</a>
                <a href="contact.php" class="menuitem">Contact Us</a>
                <div class="menuitem"></div>
            </div>
        ';
    }