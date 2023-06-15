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
	// - There is a an underline function that only works if the URL Matches the HREF Filename.  (do not rename files without regarding this)
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
                  renderDesktopMenu();
                } else {
                  renderMobileMenu();
                }
              }
              
              // Function to render the desktop menu
              function renderDesktopMenu() {
                var contentDiv = document.getElementById("menu");
                contentDiv.innerHTML = `
                  <nav id="menu" class="menu">
                    <img class="umrflogo" src="assets/UMRF Logo.png" alt="">
                    <div class="menuitemcontainer">
                      <a href="home.php" class="menuitem">Home</a>
                      <a href="whatwedo.php" class="menuitem">What We Do</a>
                      <a href="whoweare.php" class="menuitem">Who We Are</a>
                      <a href="employment.php" class="menuitem">Employment</a>
                      <a href="contact.php" class="menuitem">Contact</a>
                      <div class="menuitem"></div>
                      <div class="menuitem"></div>
                    </div>
                  </nav>
                `;
              
                addUnderlineToCurrentMenuItem();
              }
              
              // Function to render the mobile menu
              function renderMobileMenu() {
                var contentDiv = document.getElementById("menu");
                contentDiv.innerHTML = `
                  <nav id="menu" class="menu">
                    <img class="umrflogo" src="assets/UMRF Logo.png" alt="">
                    <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn">&#9776;</button>
                      <div id="myDropdown" class="dropdown-content">
                        <a href="home.php" class="menuitem">Home</a>                        
                        <a href="whatwedo.php" class="menuitem">What We Do</a>
                        <a href="whoweare.php" class="menuitem">Who We Are</a>
                        <a href="employment.php" class="menuitem">Employment</a>
                        <a href="contact.php" class="menuitem">Contact</a>
                      </div>
                    </div>
                  </nav>
                `;
              
                addUnderlineToCurrentMenuItem();
              }
              
              // Function to add underline to the current menu item
              function addUnderlineToCurrentMenuItem() {
                // Get the current page URL
                var currentURL = window.location.href;
              
                // Get all the menu items
                var menuItems = document.getElementsByClassName("menuitem");
              
                // Iterate over the menu items and check if the URL matches
                for (var i = 0; i < menuItems.length; i++) {
                  var menuItem = menuItems[i];
                  var menuItemURL = menuItem.href;
              
                  // Compare the URL of the menu item with the current page URL
                  if (menuItemURL === currentURL) {
                    // Add a class to the current menu item
                    menuItem.classList.add("current");
                  }
                }
              }
              
              // Call the screenSize function when the page loads
              window.addEventListener("load", screenSize);

                window.addEventListener(`resize`, screenSize);
                window.addEventListener(`load`, screenSize);

                /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
                function myFunction() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }

                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                    if (!event.target.matches(".dropbtn")) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains("show")) {
                                openDropdown.classList.remove("show");
                            }
                        }
                    }
                }

            </script>
        ';
    }