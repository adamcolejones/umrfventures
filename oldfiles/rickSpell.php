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
                <img class="managementphoto" src="../assets/TeamPierreLandaiche.png" alt="">
                <div class="managementtext">
                    <div class="managementsubtitle">Pierre Landaiche - CEO</div>
                    <div class="managementdescription">Pierre Landaiche joined UMRF Ventures in September 2020.  Prior to joining the company, he led the startup of the Memphis Sports Hall of Fame and for 22 years, managed the Renasant Convention Center – formerly the Memphis Cook Convention Center.  He is a native of Baton Rouge and graduate of Louisiana State University. He is involved in various community boards including the former chairman of the Better Business Bureau Board of Directors, The Hospitality Hub, the Dorothy Day House and the Bridge Street Newspaper among others. He is a member and former President of the Rotary Club of Memphis.  Pierre enjoys spending time with his wife of 31 years, Gay, and his daughter Caroline, a student at Spring Hill College.  He also enjoys duck hunting, fishing, tinkering with his 1967 Mustang convertible, cooking and breaking bread with friends and family. </div>
                </div>
            </div>
            <div class="managementcontainer">
                <img class="managementphoto" src="../assets/TeamSheritaJohnson.png" alt="">
                <div class="managementtext">
                    <div class="managementsubtitle">Sherita Johnson – Managing Director | Business Division A</div>
                    <div class="managementdescription">Sherita Johnson joined UMRF Ventures in July 2017 and prides herself on being the first employee of the company. She currently serves as Managing Director responsible for business operations, strategic leadership, and IT support for several customers, including FedEx, Raymond James, and the City of Memphis. She manages an energetic and talented team of IT professionals who support employee development and manage the customer experience. Prior to joining UMRF Ventures, she worked for the University of Memphis IT department, where she acquired her love for student development, higher education, and supportive communication. She has more than 8 years of management and business operations experience. She graduated from the University of Memphis with a B.S. in Chemistry and is a magna cum laude graduate with a Master of Science in Computer Science with a concentration in Data Management and Analysis.</div>
                </div>
            </div>

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>