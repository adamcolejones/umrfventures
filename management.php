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

            <div class="whowearelinks">
                <a href="whoweare.php" class="whowearelinkitem">About Us</a>
                <a href="students.php" class="whowearelinkitem">Students</a>
                <a href="governance.php" class="whowearelinkitem">Governance</a>
                <a href="management.php" class="whowearelinkitem current">Management</a>
            </div>
            
            <img class="defaultpicture" src="assets/UMRFFrontLawn.png" alt="">

            <div class="textcontent">
                <img class="defaultpicture" src="assets/TeamPierreLandaiche.png" alt="">
                <div class="texttitle">Pierre Landaiche - CEO</div>
                <div class="textdescription">Pierre Landaiche joined UMRF Ventures in September 2020.  Prior to joining the company, he led the startup of the Memphis Sports Hall of Fame and for 22 years, managed the Renasant Convention Center – formerly the Memphis Cook Convention Center.  He is a native of Baton Rouge and graduate of Louisiana State University. He is involved in various community boards including the former chairman of the Better Business Bureau Board of Directors, The Hospitality Hub, the Dorothy Day House and the Bridge Street Newspaper among others. He is a member and former President of the Rotary Club of Memphis.  Pierre enjoys spending time with his wife of 31 years, Gay, and his daughter Caroline, a student at Spring Hill College.  He also enjoys duck hunting, fishing, tinkering with his 1967 Mustang convertible, cooking and breaking bread with friends and family. </div>
            </div>

            <div class="textcontent">
            <img class="defaultpicture" src="assets/TeamSheritaJohnson.png" alt="">
                <div class="texttitle">Sherita Johnson – Managing Director | Business Division A</div>
                <div class="textdescription">Sherita Johnson joined UMRF Ventures in July 2017 and prides herself on being the first employee of the company. She currently serves as Managing Director responsible for business operations, strategic leadership, and IT support for several customers, including FedEx, Raymond James, and the City of Memphis. She manages an energetic and talented team of IT professionals who support employee development and manage the customer experience. Prior to joining UMRF Ventures, she worked for the University of Memphis IT department, where she acquired her love for student development, higher education, and supportive communication. She has more than 8 years of management and business operations experience. She graduated from the University of Memphis with a B.S. in Chemistry and is a magna cum laude graduate with a Master of Science in Computer Science with a concentration in Data Management and Analysis.</div>
            </div>

            <div class="textcontent">
            <img class="defaultpicture" src="assets/TeamKeithSisson.png" alt="">
                <div class="texttitle">Keith Sisson – Managing Director | Business Division B</div>
                <div class="textdescription">Keith Sisson joined UMRF Ventures in March 2018 as Managing Director for the IT Command Center. Prior to his tenure with Ventures, Keith served as graduate program director and senior lecturer at the University of Memphis and Johns Hopkins University. He also served as Chief Research Consultant for the TN Board of Regents’ Office of Emerging Technologies and Mobilization. In addition to his years of experience directing and teaching in graduate degree programs, Keith has published scholarship and lectured widely on the incorporation of digital technology in higher education. In 2011, he co-authored a chapter published in the peer-reviewed work The Professor’s Guide to Taming Technology. In 2013, he gave the lecture “From Medieval Lectores to Mobile Devices: Innovations in Higher Education and Methods of Delivery” at the University of Oxford. He holds a BA, MA, and PhD from the University of Memphis.</div>
            </div>

            <div class="textcontent">
            <img class="defaultpicture" src="assets/TeamJuttaSchneider.png" alt="">
                <div class="texttitle">Jutta “JT” Schneider – Director | Project Management & Corporate Initiatives</div>
                <div class="textdescription">Jutta “JT” Schneider joined UMRF Ventures in November 2019 as Director of Project Management and Corporate Initiatives, bringing over 25 years of experience in organizational development and customer service. Prior to joining UMRF Ventures, she worked at TRUGREEN managing the call center workforce planning team. A native of Germany, JT relocated to Memphis with her family in 2016. After earning a master’s degree in Information Science from Saarland University in Saarbruecken, Germany, she held several leadership positions in customer service, process improvement, and organizational structure. In 2009, she created her own management consulting firm with clients including an international online bank and a global telecommunications company. In her free time, JT enjoys spending time with family and cooking. Her German dishes are a favorite among friends and neighbors in Memphis. She is happiest juggling multiple home improvement projects at once. Training the family dog Maya is an ongoing “process improvement” project.</div>
            </div>

            <div class="textcontent">
            <img class="defaultpicture" src="assets/TeamJasmineSankhon.png" alt="">
                <div class="texttitle">Jasmine Sankhon – Manager | ECS</div>
                <div class="textdescription">Jasmine Sankhon joined UMRF Ventures in August 2017 and currently serves as Manager of the Level 1 and Level 2 Enterprise Common Services Desks for the company’s venture with FedEx. She previously served as a Supervisor and Assistant Manager for Level 1 ECS. She is very proud of her contributions to the development of the training and quality programs used within the company today. Prior to joining UMRF Ventures, she was a Technical Lead for the University of Memphis’s IT Support Desk and a Senior Phonathon Supervisor for the University of Memphis’s Annual Giving department. She is a proud University of Memphis graduate with a B.A. in Anthropology with a minor in Biology. In her free time, she enjoys working out, traveling, and spending time with her friends and family.</div>
            </div>

            <div class="textcontent">
            <img class="defaultpicture" src="assets/TeamLashawnWillingham.png" alt="">
                <div class="texttitle">LaShawn Willingham – Manager | Sedgwick</div>
                <div class="textdescription">LaShawn Willingham joined UMRF Ventures in July 2018 and currently serves as Manager for the Sedgwick Support Center. She previously served as the Supervisor of the Sedgwick Support Center. Before her management role with Sedgwick, she was a Level 1 agent with the ECS Venture, where she was shortly promoted to shift lead as well as a Level 2 agent. She is a University of Memphis graduate with a B.S. in Health Service Administration with a minor in Public Relations. In her spare time, she enjoys cooking, reading, and journaling.</div>
            </div>

            <div class="textcontent">
            <img class="defaultpicture" src="assets/TeamKatyHiggins.png" alt="">
                <div class="texttitle">Katy Higgins – Manager | FedEx Command Center</div>
                <div class="textdescription">Katy Higgins joined UMRF Ventures in June 2018 and currently serves as Manager for the Systems Analytics and Information Security teams. She previously served as Operations Lead. Before her position with UMRF Ventures, she held a variety of different leadership positions in retail and academic research settings. She is a magna cum laude graduate with B.S. degrees in Psychology and German, and is currently pursuing a master’s degree in Information Systems and a master’s certificate in Business Project Management. In her spare time, she likes to read, paint, and ride her horse.</div>
            </div>

            <div class="textcontent">
            <img class="defaultpicture" src="assets/TeamCruzSeguraRamirez.png" alt="">
                <div class="texttitle">Cruz Segura-Ramirez – Manager | Workforce Management</div>
                <div class="textdescription">Cruz Segura-Ramirez joined UMRF Ventures in September 2017 and currently serves as Manager of Workforce Management and Business Analyst. He previously served as a Technical Support Agent, Technical Support Shift Lead and Level 2 Technical Support Agent. Prior to UMRF Ventures, he worked in education through curriculum design, lecture and instruction, and tutoring. Cruz holds a B.S. in Physics from the University of Central Arkansas and an M.S. in Electrical and Computer Engineering from the University of Memphis.</div>
            </div>

            <div class="textcontent">
            <img class="defaultpicture" src="assets/TeamLaurenBoyette.png" alt="">
                <div class="texttitle">Lauren Boyette – Manager | Raymond James</div>
                <div class="textdescription">Lauren Boyette joined UMRF Ventures in October 2018 and currently serves as Manager of the Raymond James ventures. She previously served as a Technical Support Agent, Technical Support Shift Lead, and Supervisor. Lauren graduated from the University of Memphis in 2021 with a B.B.A. in Management. Lauren strives to help students develop professionally. She is proud of her academic and professional achievements and loves to assist in the success of others.</div>
            </div>
            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>