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
    <body class="main">
        <header>
            <!--header container-->
            <nav class="navBar">
                <div class="navDiv">
                    <!--this is the welcome, name, part-->
                    <div class="icon">
                        <a href="home.php">
                            <img src="Images/SDG.png" height="80" width="80">
                        </a>
                        <p class="icon">
                            <span class="spanIcon">Welcome,</span>
                            <!--print the session var submitted from the forms with php-->
                            <?php
                                session_start();
                                echo $_SESSION['firstName'] . " " . $_SESSION['lastName'];
                            ?>
                        </p>
                        <!--used forms button for logout to make it short and simple-->
                        <form action="index.php" method="POST">
                            <button type="submit" name="submit" class="logout">Log Out</button>
                        </form>
                    </div>
                    <!--navigation for other pages-->
                    <ul>
                        <li class="home"><a href="developers.php">The Developers</a></li>
                        <li class="home"><a href="project.php">Projects</a></li>
                        <li class="home"><button><a href="contact.php">Contact Us</a></button></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <!--main contact content container-->
            <div id="contactContainer">
                <div class="divContact">
                    <p class="contactHead">Contact Us</p>
                    <p class="contactDescription">
                        Need to get in touch with us? Either fill out this form or you can contact us at:
                        <address class="contactAlt">
                            <img src="Images/phone-call.png" class="contactIcons" height="20">8631-0966<br>
                            <img src="Images/gmailfooter.png" class="contactIcons" height="20"><a href="mailto:sdg@neda.gov.ph">sdg@neda.gov.ph</a><br>
                            <img src="Images/location.png" class="contactIcons" height="20">12 St. J.Escriva Drive, Ortigas Center, Pasig City
                        </address>
                    </p>
                </div>
                
                <!--contact forms-->
                <div class="formContainer">
                    <div class="contactForm">
                        <form method="POST">
                            <label class="loginForm">Name(Optional):</label><br>
                            <input class="contactInput" type="text" name="firstName" placeholder="ex. Juan Dela Cruz..."><br>
                            <label class="loginForm">Email Address:</label><br>
                            <input class="contactInput" type="email" name="lastName" placeholder="ex. juandelacruz@gmail.com..." required><br>
                            <label class="loginForm">What are your concerns?</label><br>
                            <textarea id="concernTextArea" name="concerns" required></textarea><br>
                            <input id="contactSubmit" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>

            <!--after submitting, contact container changes to this thank you form-->
            <div id="thanksContainer">
                <p id="contactThanks">Thank you for getting in touch!</p>
                <p id="thanksDesc">
                    Your message has been received by the team. If you'd like to fill up the forms again,
                    <a id="returnContact" href="contact.html">click here.</a>
                </p>
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
        <!--main script for all pages-->
        <script src="script.js"></script>
    </body>
<html>