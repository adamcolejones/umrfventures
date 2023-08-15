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
                <!-- <img class="managementphoto" src="../assets/GovernanceLanWang.png" alt=""> -->
                <div class="managementphoto" style="background-image: url('../assets/GovernanceLanWang.png');" alt=""></div>

                <div class="managementtext">
                    <div class="managementsubtitle">Lan Wang</div>
                    <div class="managementdescription">Dr. Wang joined the Department in Fall 2004 after finishing her PhD at UCLA. She was promoted to Associate Professor in 2010 and to Full Professor in 2016. She became the department chair in Feb. 2016. Her research focuses on improving the scalability, reliability, and security of the Internet. She has received multiple major research grants from NSF, NIST, and DoD as well as several grants from the university. Most recently, she is on a team that received over $15 million from NSF for their "Named Data Networking" project. At the University of Memphis, Dr. Wang has taught a variety of courses including Networking and Information Assurance, Advanced Computer Networks, Wireless and Mobile Computing, Models of Computation, Web Services and the Internet, and Data Structures. As an active member of the research community, she has served on the program committee of more than 50 conferences and workshops. She is also interested in promoting female participation in computer science, co-organizing a "Networking Networking Women" panel at ACM SIGCOMM 2008 and an N2Women dinner at ACM SIGCOMM 2019. She started and has been advising the Women in Computing student chapter at the university.</div>
                </div>
            </div>

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>