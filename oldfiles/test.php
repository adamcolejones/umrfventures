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
    <?php include 'head.php'; ?>
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

            <h2>Test 4</h2>
            <ul>
                <li>Classes change on hover</li>
                <li></li>
            </ul>
            <style>
            /* Initial state */
            .element1 {
                display: block;
            }

            .element2 {
                display: none;
            }

            /* Hover state */
            .element1:hover {
                display: none;
            }

            .element1:hover + .element2 {
                display: block;
            }
            </style>

            <div class="element1">Element 1</div>
            <div class="element2">Element 2</div>

            <h2>Test 5</h2>
            <ul>
                <li>Squares with appearing text</li>
                <li></li>
            </ul>

            <div class="wwdcontainer">
                <div class="wwdsubject">
                    <div class="wwdtext" style="background-image: url('assets/wwdtemp1.png'); border-radius: 10px;   background-repeat: no-repeat;   background-position: center;   background-size: cover;">
                        <div class="wwdtitle">IT Help Desks</div>
                        <div class="wwddescription">Our IT Help Desk team provides top-notch technical support to resolve computer hardware, software, and network issues. With exceptional problem-solving skills, we ensure smooth technology operations and offer excellent customer service.</div>
                    </div>
                </div>
                <div class="wwdsubject">
                    <div class="wwdtext" style="background-image: url('assets/wwdtemp2.png'); border-radius: 10px;   background-repeat: no-repeat;   background-position: center;   background-size: cover;">
                        <div class="wwdtitle">Information Security Analysis</div>
                        <div class="wwddescription">Our Information Security Analysts protect sensitive data by assessing systems, implementing security measures, and monitoring for potential threats. With extensive cybersecurity knowledge, we safeguard information and maintain confidentiality.</div>
                    </div>
                </div>
            </div>

            <h2>Test 6</h2>
            <ul>
                <li>CLAMP CSS</li>
                <li></li>
            </ul>

            <div class="clampbox"></div>

            <h2>Test 7</h2>
            <ul>
                <li>Smooth Scroll (scroll is working, smooth is not working)</li>
                <li></li>
            </ul>

            <div class="testtop" id="testtop">
                <a href="#testbottom">Auto Scroll Down</a>
            </div>
            <div class="testbottom" id="testbottom">
                <a href="#testtop">Auto Scroll Up</a>
            </div>

            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>