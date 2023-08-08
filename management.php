<?php

    // ********************************************************
    // * A DESCRIPTION OF THE FUNCTIONALITY OF THE CODE BELOW *
    // ********************************************************
	// + This page is a found in the sub menu of the whoweare.php page
	// + The menu.php file loads at the top of the page for navigation
    // + head.php handles all of the head tag details to reduce repetitive information
    // + the scrollableContent Class contains all the information on the page adjusting height based on the window and the menu bar above
	// + wwalinks is a submenu for the Who We Are navigation Tab.  This allows user to click through and find UMRF people
	// + A short Description to define the content below
	// + Each member has their own container with their name, picture, and title
	// + 

// + This page is a found in the sub menu of the whoweare.php page
// + The menu.php file loads at the top of the page for navigation
	require 'menu.php';
?>

<!DOCTYPE html>
<html>
<!-- // + head.php handles all of the head tag details to reduce repetitive information -->
    <?php include 'head.php'; ?>
    <body>
<!-- // + The menu.php file loads at the top of the page for navigation -->
        <?php menu() ?>
<!-- // + the scrollableContent Class contains all the information on the page adjusting height based on the window and the menu bar above -->
        <div class="scrollableContent">
<!-- // + wwalinks is a submenu for the Who We Are navigation Tab.  This allows user to click through and find UMRF people -->
            <div class="wwalinks">
                <a href="whoweare.php" class="wwalinkitem">About Us</a>
                <a href="students.php" class="wwalinkitem">Students</a>
                <a href="management.php" class="wwalinkitem current">Management</a>
                <a href="governance.php" class="wwalinkitem">Governance</a>
            </div>
<!-- // + A short Description to define the content below -->
            <div class="governancetextcontent">
                <div class="texttitle">UMRF Ventures Management</div>
                <div class="textdescription"> Our effective management empowers university students by providing guidance, mentorship, and a nurturing environment, fostering confidence and encouraging innovation. This proactive approach enriches the educational experience and prepares students for the dynamic professional world.</div>
            </div>
<!-- // + Each member has their own container with their name, picture, and title -->
            <div class="governancelist">
                <div>
                    <a class="governanceinfo" href="info/SheritaJohnson.php">
                        <div class="governancename">Sherita Johnson</div>
                        <div class="governancetitle">Managing Director | Business Division A</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamSheritaJohnson.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/KeithSisson.php">
                        <div class="governancename">Keith Sisson</div>
                        <div class="governancetitle">Managing Director | Business Division B</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamKeithSisson.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/JuttaSchneider.php">
                        <div class="governancenamehigher">Jutta Schneider</div>
                        <div class="governancetitle">Director | Project Management & Corporate Initiatives</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamJuttaSchneider.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/JasmineSankhon.php">
                        <div class="governancename">Jasmine Sankhon</div>
                        <div class="governancetitle">Manager | ECS</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamJasmineSankhon.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/LashawnWillingham.php">
                        <div class="governancename">Lashawn Willingham</div>
                        <div class="governancetitle">Manager | Sedgwick</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamLashawnWillingham.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/KatyHiggins.php">
                        <div class="governancename">Katy Higgins</div>
                        <div class="governancetitle">Manager | FedEx Command Center</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamKatyHiggins.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/CruzSeguraRamirez.php">
                        <div class="governancename">Cruz Segura-Ramirez</div>
                        <div class="governancetitle">Manager | Workforce Management</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamCruzSeguraRamirez.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/LaurenBoyette.php">
                        <div class="governancename">Lauren Boyette</div>
                        <div class="governancetitle">Manager | Raymond James</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamLaurenBoyette.png');" ></div>
                </div>
<!-- // + Each member has their own container with their name, picture, and title -->
                <div>
                    <a class="governanceinfo" href="info/PierreLandaiche.php">
                        <div class="governancename">Pierre Landaiche</div>
                        <div class="governancetitle">CEO</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamPierreLandaiche.png');" ></div>
                </div>
            </div>
            <div class="contactfooter"></div>
        </div>
    </body>
</html>