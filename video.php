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

	require 'menu.php';
    
?>

<!DOCTYPE html>
<html>
	<head>
		<title>UMRF</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            menu()
        ?>
        <div class="scrollableContent">
            <div class="videocontainer">
                <!-- The video -->
                <video autoplay muted loop id="homevideo">
                    <source src="assets/homevideo.mp4" type="video/mp4">
                </video>

                <!-- Optional: some overlay text to describe the video -->
                <!-- I think this video is blocking the contact footer -->
                <div class="videooverlay">
                    <h1>UMRF Ventures</h1>
                    <p>Your Best Choice Towards Your Brightest Future</p>
                    <p>(This is a live video)</p>
                    <!-- Use a button to pause/play the video with JavaScript -->
                    <button id="myBtn" onclick="myFunction()">Pause</button>
                </div>
            </div>
        </div>
        
        <script>
            // Get the video
            var video = document.getElementById("homevideo");

            // Get the button
            var btn = document.getElementById("myBtn");

            // Pause and play the video, and change the button text
            function myFunction() {
            if (video.paused) {
                video.play();
                btn.innerHTML = "Pause";
            } else {
                video.pause();
                btn.innerHTML = "Play";
            }
            }
        </script>
        <div class="contactfooter">

        </div>
    </body>
</html>