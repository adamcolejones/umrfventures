<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// - 1. This is the about page for umrfventures.com
	// - 2. The menu.php file loads at the top of the page for navigation
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
        <!-- - 2. The menu.php file loads at the top of the page for navigation -->
        <?php
            menu()
        ?>
        <div class="scrollableContent">

            <div class="wwalinks">
                <a href="whoweare.php" class="wwalinkitem current">About Us</a>
                <a href="students.php" class="wwalinkitem">Students</a>
                <a href="management.php" class="wwalinkitem">Management</a>
                <a href="governance.php" class="wwalinkitem">Governance</a>
            </div>

            <div class="wwacontainer">
                <img class="wwaphoto" src="assets/StockStudy.png" alt="">
                <div class="wwatext">
                    <div class="wwasubtitle">About Us</div>
                    <div class="wwadescription">UMRF Ventures is a company staffed by students who attend the University of Memphis. Today’s students have to successfully balance life with their school commitments. Many students take on significant debt to further their education and work multiple jobs while they go to school to meet their financial obligations. UMRF Ventures mission is to help our students succeed by providing good-paying, part-time jobs, scheduled around their classroom commitments, and conveniently located on campus.</div>
                    <!-- <br> -->
                    <div class="wwadescription">Today we have over 200 undergraduate and graduate students working at UMRF Ventures for our partner companies, who frequently hire our students as full-time employees after they graduate.</div>
                </div>
            </div>

            <div class="wwacontainerbottom">
                <div class="wwatextleft">
                    <div class="wwasubtitle">Students</div>
                    <div class="wwadescription">Our student employees work in a variety of different ventures, providing paid services to our partner companies. We operate both inbound and outbound Call Centers, on the Memphis and Lambuth campuses. We have student internship programs with partner companies. Our students provide services to both for-profit and nonprofit companies in Memphis.  Our employees are both undergraduate and graduate students from a variety of academic curriculums. They work approximately 10-20 hours per week; after training, they earn approximately $15/per hour to $25/hour. Many earn more in supervisory positions.</div>
                </div>
                <img class="wwaphoto" src="assets/DeskSpaces.png" alt="">
            </div>

            <!-- <div class="dykcontainer">
                <div class="dyktop"><div class="dyktitle">Did you know?</div><button class="dykbutton" onclick="changeString()">Next</button></div>
                <div id="displayedString" class="dykdescription">Click here to see the next fact!</div>
            </div> -->

            <!-- <div class="wwacontacttext">
                <div class="wwacontactsubtitle">Want to reach out?</div>
                <div class="wwacontactdescription">UMRF Ventures is always open to talking about our work, but we do request that any visits be scheduled through the manager. Service centers are off limits unless explicitly approved.</div>
            </div> -->

            <!-- <script>
                function getRandomString() {
                    const stringsList = [
                        "Since our incorporation in 2017, UMRF Ventures has paid nearly $8 million dollars in student wages.",
                        "More than 750 University of Memphis students have worked for UMRF Ventures.",
                        "Since 2017, our active student-employee population has grown by more than 920%.",
                        "We have placed 38 student employees in full-time positions with our company or current partners.",
                        "We manage all Level 1 customer service calls for a national waterfowl gear and duck hunting company.",
                        "In 2021, we handled 214,643 customer facing chats for Sedgwick Claims Management.",
                        "Ten University of Memphis faculty members have received UMRF Ventures Professorship grants valued at $10,000 each.",
                        "Efficiencies discovered in Google Cloud Platform queries, by our InfoSec team, saves FedEx $60,000 a month.",
                        "Health Sciences students placed more than 130,000 calls to 80,000 Memphians on behalf of the City of Memphis as part of their COVID Vaccine Advocacy Program.",
                        "UMRF Ventures' agents are responsible for all Level 2 tasks for the FedEx Enterprise Common Services IT help desk.",
                        "The 35 students on our Raymond James team work directly with systems that dictate the flow of money between RJ branches and firms."
                        // Add more strings here as needed
                    ];

                    const randomIndex = Math.floor(Math.random() * stringsList.length);
                    return stringsList[randomIndex];
                }

                // Function to change the displayed string on button click
                function changeString() {
                    const displayedElement = document.getElementById("displayedString");
                    const randomString = getRandomString();
                    displayedElement.textContent = randomString;
                }
                document.addEventListener("DOMContentLoaded", function() {
                    changeString();
                });
            </script> -->

            

            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>