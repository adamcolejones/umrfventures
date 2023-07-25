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
    <?php include 'head.php'; ?>
    <body>
        <?php
            menu()
        ?>
        <div class="scrollableContent">

            <div class="wwalinks">
                <a href="whoweare.php" class="wwalinkitem">About Us</a>
                <a href="students.php" class="wwalinkitem">Students</a>
                <a href="governance.php" class="wwalinkitem">Governance</a>
                <a href="management.php" class="wwalinkitem current">Management</a>
            </div>

            <div class="governancelist">
                <div>
                    <a class="governanceinfo" href="info/PierreLandaiche.php">
                        <div class="governancename">Pierre Landaiche</div>
                        <div class="governancetitle">CEO</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamPierreLandaiche.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/SheritaJohnson.php">
                        <div class="governancename">Sherita Johnson</div>
                        <div class="governancetitle">Managing Director | Business Division A</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamSheritaJohnson.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/KeithSisson.php">
                        <div class="governancename">Keith Sisson</div>
                        <div class="governancetitle">Managing Director | Business Division B</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamKeithSisson.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/JuttaSchneider.php">
                        <div class="governancenamehigher">Jutta Schneider</div>
                        <div class="governancetitle">Director | Project Management & Corporate Initiatives</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamJuttaSchneider.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/JasmineSankhon.php">
                        <div class="governancename">Jasmine Sankhon</div>
                        <div class="governancetitle">Manager | ECS</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamJasmineSankhon.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/LashawnWillingham.php">
                        <div class="governancename">Lashawn Willingham</div>
                        <div class="governancetitle">Manager | Sedgwick</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamLashawnWillingham.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/KatyHiggins.php">
                        <div class="governancename">Katy Higgins</div>
                        <div class="governancetitle">Manager | FedEx Command Center</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamKatyHiggins.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/CruzSeguraRamirez.php">
                        <div class="governancename">Cruz Segura-Ramirez</div>
                        <div class="governancetitle">Manager | Workforce Management</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamCruzSeguraRamirez.png');" ></div>
                </div>

                <div>
                    <a class="governanceinfo" href="info/LaurenBoyette.php">
                        <div class="governancename">Lauren Boyette</div>
                        <div class="governancetitle">Manager | Raymond James</div>
                    </a>
                    <div class="governancepicture" style="background-image: url('assets/TeamLaurenBoyette.png');" ></div>
                </div>
            </div>
            
            <div class="contactfooter">

            </div>
        </div>
    </body>
</html>