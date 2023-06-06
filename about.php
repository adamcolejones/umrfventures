<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - This is for the "who we are" page
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
            menu()
        ?>
        <div class="scrollableContent">
            <div><a href="services.php" class="back">Back</a></div>
            <div>
                <h2>About Us - Who We Are / What We Do</h2>
                <img class="defaultpicture" src="assets/UMRFGroupPhoto.png" alt="">
                <img class="defaultpicture" src="assets/WorkRoom.png" alt="">
                <img class="defaultpicture" src="assets/WorkRoomAttentive.png" alt="">
                <img class="defaultpicture" src="assets/DeskSpaces.png" alt="">
                <ul>
                    <li>About Us</li>
                    <li>UMRF Ventures is a company staffed by students who attend the University of Memphis. Today’s students have to successfully balance life with their school commitments. Many students take on significant debt to further their education and work multiple jobs while they go to school to meet their financial obligations. UMRF Ventures mission is to help our students succeed by providing good-paying, part-time jobs, scheduled around their classroom commitments, and conveniently located on campus.</li>
                    <li>Today we have over 200 undergraduate and graduate students working at UMRF Ventures for our partner companies, who frequently hire our students as full-time employees after they graduate.</li>
                    <li>Students</li>
                    <li>Our student employees work in a variety of different ventures, providing paid services to our partner companies. We operate both inbound and outbound Call Centers, on the Memphis and Lambuth campuses. We have student internship programs with partner companies. Our students provide services to both for-profit and nonprofit companies in Memphis.</li>
                    <li>Our employees are both undergraduate and graduate students from a variety of academic curriculums. They work approximately 10-20 hours per week; after training, they earn approximately $15/per hour to $25/hour. Many earn more in supervisory positions.</li>
                    <li>Photo</li>
                    <li>Want to reach out?</li>
                    <li>UMRF Ventures is always open to talking about our work, but we do request that any visits be scheduled through the manager. Service centers are off limits unless explicitly approved.</li>
                    <li>Contact Us</li>
                    <li>WHAT WE DO STARTS HERE-------------------------</li>
                    <li>Photo</li>
                    <li>Services We Offer</li>
                    <li>Our student employees are diverse, talented, and hard-working. What they can do is almost limitless. We currently operate basic and advanced call center operations, data mining and analytical services, telephone sales support, ticket sales, event support, and donor solicitation.</li>
                    <li>Custom Ventures</li>
                    <li>We develop custom ventures with our business partners, then hire the right students to support them. Need Computer Science students to support your automation efforts? UMRF Ventures can do that! If you need our help to support your business, please contact us and we can begin to develop a custom venture.</li>
                    <li>Photo</li>
                    <li>Call Center Logo</li>
                    <li>Call Center</li>
                    <li>Student employees at the support center will handle technical support calls including "first level" technical support, like phone configuration and basic application and computing device troubleshooting.</li>
                    <li>Analytics Logo</li>
                    <li>Analytics</li>
                    <li>The students, primarily in science, technology, engineering and mathematics work with command center teams, using advanced software technologies to dig into operational and network performance data and look for possible system improvements.</li>
                    <li>Much More... Logo</li>
                    <li>Much More...</li>
                    <li>We have the unique opportunity to have our student employees assist with any need your company may have. From accounting to marketing, we can offer student employees who are constantly learning the newest practices in their trade.</li>
                    <li>Next Steps...</li>
                    <li>Do you want to establish a talent pipeline for your future hiring needs? Come work with UMRF Ventures and our talented students!</li>
                    <li>Contact Us</li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>