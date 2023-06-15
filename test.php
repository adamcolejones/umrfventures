<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - This page will be used exclusively for testing new features for the site
	// - 
    // -
    // -
	// -
	// -

	require 'menu.php';
    
?>

<!DOCTYPE html>
<html>
	<head>
		<title>UMRF</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <body>
        <?php
            menu();
        ?>
        <div class="scrollableContent">
            <h2>Test 1</h2>
            <ul>
                <li>Hoverable Content</li>
                <li></li>
            </ul>
            <div class="test1">

            </div>
            <h2>Test 2</h2>
            <ul>
                <li>Slideshow Content</li>
                <li></li>
            </ul>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="assets/UMRF5thAnny.png" style="width:100%">
                    <div class="text">Caption One</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="assets/UMRF5thAnny.png" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="assets/UMRF5thAnny.png" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
            </div>

            <h2>Test 3</h2>
            <ul>
                <li>Readmore Containers that change order based on screen size</li>
                <li></li>
            </ul>
            <div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">About Us</div>
                    <div class="servicesdescription">UMRF Ventures is a company staffed by students who attend the University of Memphis.<a href="about.php" class="readmore">Read More</a></div>
                </div>
            <!--Lack of coded white space is taken into account for styling on the line below, do not have tabs, newlines, or white space between the divs-->
            </div><div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">Our Students</div>
                    <div class="servicesdescription">Description Goes Here  <a href="students.php" class="readmore">Read More</a></div>
                </div>
            </div>
            <!--Allow white space new line here for styling-->
            <div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">Our Team / Governance</div>
                    <div class="servicesdescription">Description Goes Here  <a href="management.php" class="readmore">Read More</a></div>
                </div>
            <!--Lack of coded white space is taken into account for styling on the line below, do not have tabs, newlines, or white space between the divs-->
            </div><div class="servicessection">
                <div class="servicessectionpicture">
                    <img class="defaultpicture" src="assets/DefaultPicture.png" alt="">
                </div>
                <div class="servicessectiontext">
                    <div class="servicestitle">FAQs</div>
                    <div class="servicesdescription">Description Goes Here  <a href="faq.php" class="readmore">Read More</a></div>
                </div>
            </div>

            <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                }
            </script>

            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>