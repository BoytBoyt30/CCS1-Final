<!DOCTYPE html>
<html>
    <head>
        <title>SDG 14: Life Below Water</title>
        <link rel="icon" href="Images/webIcon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body class="main">
        <header>
            <nav class="navBar">
                <div class="navDiv">
                    <div class="icon">
                        <a href="home.php">
                            <img src="Images/SDG.png" height="80" width="80">
                        </a>
                        <p class="icon">
                            <span class="spanIcon">Welcome,</span>
                            <?php
                            session_start(); // Start the session
                            
                            // Retrieve session variables
                            $firstName = $_SESSION['firstName'] ?? 'Guest';
                            $lastName = $_SESSION['lastName'] ?? '';
                            ?>
                        </p>
                    </div>
                    <ul>
                        <li class="home"><a href="developers.php">The Developers</a></li>
                        <li class="home"><a href="project.php">Projects</a></li>
                        <li class="home"><button><a href="contact.php">Contact Us</a></button></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="projectContainer">
                <div id="firstColumn">
                    <a href="https://www.rappler.com/environment/city-gentle-people-fights-save-coastal-life-dumaguete-reclamation/" target="_blank">
                        <img src="Images/NOTO174.png">
                    </a>
                </div>
                <div id="secondColumn">
                    <div id="secondColumnTop">
                        <a href="https://www.sunstar.com.ph/dumaguete/feature/coastal-clean-up-held-in-dumaguete" target="_blank">
                            <img src="Images/SunstarCoastalCleanUpDumaguete.png">
                        </a>
                    </div>
                    <div id="secondColumnBot">
                        <a href="https://www.facebook.com/share/p/19UcKSBTon/" target="_blank">
                            <img src="Images/PROOCEAN.jpg">
                        </a>
                    </div>
                </div>
                <div id="thirdColumn">
                    <div id="thirdColumnTop">
                        <a href="https://www.gridmagazine.ph/news-feed/in-dumaguete-city-locals-stand-against-proposed-reclamation-project" target="_blank">
                            <img src="Images/defenseOfMarineProtectedAreas.jpeg">
                        </a>
                    </div>
                    <div id="thirdColumnBot">
                        <a href="https://www.pna.gov.ph/articles/1207011" target="_blank">
                            <img src="Images/dumaguete-reef-dome-.png">
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footerContainer">
                <a href="https://sdgs.un.org/goals">
                    <img src="Images/SDGlogo.png" height="80" width="147">
                </a>
                <ul>
                    <label class="footerLabel">Explore</label><br>
                    <li class="footerLink"><a href="home.php">Home</a></li>
                    <li class="footerLink"><a href="developers.php">The Developers</a></li>
                    <li class="footerLink"><a href="project.php">Projects</a></li>
                    <li class="footerLink"><a href="contact.php">Contact Us</a></li>
                </ul>
                <address>
                    <label class="footerLabel">Contact Us</label><br>
                    <img src="Images/phone-call.png" class="contactIcons">8631-0966<br>
                    <img src="Images/gmailfooter.png" class="contactIcons"><a href="mailto:sdg@neda.gov.ph">sdg@neda.gov.ph</a><br>
                    <img src="Images/location.png" class="contactIcons">12 St. J.Escriva Drive,<br>
                    Ortigas Center, Pasig City
                </address>
            </div>
            <div class="copyright">
                <p>&copy;copyright 2024; designed by 
                    <span class="designer">Keith Justin C. Mandal | Ethan Mario T. Abalahin</span>
                </p>
            </div>
        </footer>
    </body>
<html>