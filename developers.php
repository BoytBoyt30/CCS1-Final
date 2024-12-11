<!DOCTYPE html>
<html>
    <head>
        <!--Webpage title-->
        <title>SDG 14: Life Below Water</title>
        <link rel="icon" href="Images/webIcon.png">

        <!--Embedded Font from google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <!--linked stylesheet-->
        <link rel="stylesheet" href="styles.css">
    </head>
    <!--different body class with different background-image-->
    <body class="bodyDev">
        <!--also different header class to match the body-->
        <header class="lightHeader">
            <nav class="navBarLight">
                <div class="navDiv">
                    <div class="icon">
                        <a href="home.php">
                            <img src="Images/SDG.png" height="80" width="80">
                        </a>
                        <!--welcome, name-->
                        <p class="lightIcon">
                            <span class="spanIconLight">Welcome,</span>
                            <!--php code for printing session vars from forms-->
                            <?php
                                session_start();
                                echo $_SESSION['firstName'] . " " . $_SESSION['lastName'];
                            ?>
                        </p>
                        <!--logout using forms to make it simple-->
                        <form action="index.php" method="POST">
                            <button type="submit" name="submit" class="lightLogout">Log Out</button>
                        </form>
                    </div>
                    <!--site navigation-->
                    <ul>
                        <li class="lightNav"><a href="developers.php">The Developers</a></li>
                        <li class="lightNav"><a href="project.php">Projects</a></li>
                        <li class="lightButton"><button><a href="contact.php">Contact Us</a></button></li>
                    </ul>
                </div>
            </nav>
        </header>    
        <main>
            <div class="devContainer">
                <!--ethan abalahin dev description-->
                <div class="ethanContainer">
                    <p class="devIntro">Meet</p>
                    <p class="devText">The Developers</p>
                    <div class="Ethan">
                        <img src="Images/ethan.png" class="portrait" height="450" width="310">
                        <div>
                            <p class="nameP">Ethan Mario T. Abalahin</p>
                            <p>A fun loving guy with a passion for computers. Currently studying BS Computer Science at Silliman University and part of the Badminton Varsity team. Believes that having a healthy body and mind is key to the pursuit of academics. Also loves playing video games and building computers.
                            </p>
                            <!--ethan socials-->
                            <a href="mailto:ethanmariotabalahin@su.edu.ph"><img src="Images/gmail.png" class="socials" height="20px">ethanmariotabalahin@su.edu.ph</a><br>
                            <a href="https://www.instagram.com/rensuzushima"><img src="Images/instagram.png" class="socials" height="20px">@rensuzushima</a>
                        </div>
                    </div>
                </div>
                <!-- keith mandal dev description-->
                <div class="Keith">
                    <div>
                        <p class="nameP">Keith Justin C. Mandal</p>
                        <p>An Aspiring Software Engineer and Cybersecurity Specialist. Currently taking up BS Computer Science in Silliman University. Enjoys physical activities such as badminton, weightlifting, and running. Plays a lot of video games and also plays instruments like the guitar and the piano in his downtime.
                        </p>
                        <!--keith socials-->
                        <a href="mailto:keithjustincmandal@su.edu.ph">keithjustincmandal@su.edu.ph<img src="Images/gmail.png" class="socials" height="20px"></a><br>
                        <a href="https://www.instagram.com/kjoe.star">@kjoe.star<img src="Images/instagram.png" class="socials"  height="20px"></a>
                    </div>
                    <img src="Images/keith.jpg" class="portrait" height="450" width="310">
                </div>
            </div>
        </main>  
        <footer>
            <!--footer content container-->
            <div class="footerContainer">

                <!--SDG main site href-->
                <a href="https://sdgs.un.org/goals">
                    <img src="Images/SDGlogo.png" height="80" width="147">
                </a>

                <!--navigation-->
                <ul>
                    <label class="footerLabel">Explore</label><br>
                    <li class="footerLink"><a href="home.php">Home</a></li>
                    <li class="footerLink"><a href="developers.php">The Developers</a></li>
                    <li class="footerLink"><a href="project.php">Projects</a></li>
                    <li class="footerLink"><a href="contact.php">Contact Us</a></li>
                </ul>
                <!--contact info-->
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
                    <span class="designer">KEITH JUSTIN C. MANDAL | ETHAN MARIO T. ABALAHIN</span>
                </p>
            </div>
        </footer>
    </body>
</html>