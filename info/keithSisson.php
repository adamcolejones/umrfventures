<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - 
	// - 
    // -
    // -
	// -
	// -

	require 'infomenu.php';
    
?>

<!DOCTYPE html>
<html>
	<head>
        <title>UMRF</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Default Style Sheet, keep this to prevent white flashes on screen resizing -->
        <link rel="stylesheet" href="../style.css">
        <!-- - #. Check if screen height or width is bigger, display content accordingly -->
        <style id="style-sheet"></style>
        <script>
            function setStylesheet() {
                var screenWidth = window.innerWidth;
                var screenHeight = window.innerHeight;
                var styleSheet = document.getElementById('style-sheet');

                // If screen is wider than its height, apply "style.css"
                if (screenWidth > screenHeight) {
                    styleSheet.innerHTML = '@import "../style.css";';
                }
                // Otherwise, apply "mobile.css"
                else {
                    styleSheet.innerHTML = '@import "../mobile.css";';
                }
            }

            window.addEventListener('resize', setStylesheet);
            window.addEventListener('load', setStylesheet);
        </script>
    </head>
    <body>
        <?php
            menu()
        ?>
        <div class="scrollableContent">
            
            <!-- <img class="managementheader" src="assets/UMRFFrontLawn.png" alt=""> -->

            <div class="managementcontainer">
                <img class="managementphoto" src="../assets/TeamKeithSisson.png" alt="">
                <div class="managementtext">
                    <div class="managementsubtitle">Keith Sisson – Managing Director | Business Division B</div>
                    <div class="managementdescription">Keith Sisson joined UMRF Ventures in March 2018 as Managing Director for the IT Command Center. Prior to his tenure with Ventures, Keith served as graduate program director and senior lecturer at the University of Memphis and Johns Hopkins University. He also served as Chief Research Consultant for the TN Board of Regents’ Office of Emerging Technologies and Mobilization. In addition to his years of experience directing and teaching in graduate degree programs, Keith has published scholarship and lectured widely on the incorporation of digital technology in higher education. In 2011, he co-authored a chapter published in the peer-reviewed work The Professor’s Guide to Taming Technology. In 2013, he gave the lecture “From Medieval Lectores to Mobile Devices: Innovations in Higher Education and Methods of Delivery” at the University of Oxford. He holds a BA, MA, and PhD from the University of Memphis.</div>
                </div>
            </div>
            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>