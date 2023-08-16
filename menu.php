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
      echo '
      <nav id="menu" class="menu">
          <img class="umrflogo" src="assets/UMRF Logo.png" alt="">
          <div id="menu-content" class="menuitemcontainer"></div>
      </nav>
      <script>
          function renderMenu(menuHTML) {
              var contentDiv = document.getElementById("menu-content");
              contentDiv.innerHTML = menuHTML;
              addUnderlineToCurrentMenuItem();
          }
  
          function addUnderlineToCurrentMenuItem() {
              var currentURL = window.location.href;
              var menuItems = document.getElementsByClassName("menuitem");
  
              for (var i = 0; i < menuItems.length; i++) {
                  var menuItem = menuItems[i];
                  var menuItemURL = menuItem.href;
  
                  if (menuItemURL === currentURL) {
                      menuItem.classList.add("current");
                  }
  
                  if (currentURL.includes("students") || currentURL.includes("management") || currentURL.includes("governance")) {
                      menuItems[2].classList.add("current");
                  }
  
                  if (currentURL.includes("apply")) {
                      menuItems[3].classList.add("current");
                  }
              }
          }
  
          function screenSize() {
              var screenWidth = window.innerWidth;
              var screenHeight = window.innerHeight;
              var menuHTML;
  
              if (screenWidth > screenHeight) {
                  menuHTML = `
                      <a href="home" class="menuitem">Home</a>
                      <a href="whatwedo" class="menuitem">What We Do</a>
                      <a href="whoweare" class="menuitem">Who We Are</a>
                      <a href="employment" class="menuitem">Employment</a>
                      <a href="contact" class="contactbutton menuitem">Contact Us</a>
                      <div class="menuitem"></div>
                  `;
              } else {
                  menuHTML = `
                      <div class="dropdown">
                          <button onclick="myFunction()" class="dropbtn">&#9776;</button>
                          <div id="myDropdown" class="dropdown-content">
                              <a href="home" class="menuitem">Home</a>
                              <a href="whatwedo" class="menuitem">What We Do</a>
                              <a href="whoweare" class="menuitem">Who We Are</a>
                              <a href="employment" class="menuitem">Employment</a>
                              <a href="contact" class="menuitem">Connect With Us</a>
                          </div>
                      </div>
                  `;
              }
  
              renderMenu(menuHTML);
          }
  
          window.addEventListener("load", function() {
              // Initially load with default style
              document.getElementById("style-sheet").innerHTML = \'@import "style.css";\';
              screenSize();
          });
  
          window.addEventListener("resize", screenSize);
  
          function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
          }
  
          window.onclick = function(event) {
              if (!event.target.matches(".dropbtn")) {
                  var dropdowns = document.getElementsByClassName("dropdown-content");
                  for (var i = 0; i < dropdowns.length; i++) {
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