

<!DOCTYPE html>

<?php
    include("includes/db-connect.php");
?>

<html>
    <head>
        <title>Michael Wood Portfolio</title>
        <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1">
        
        <script src="https://kit.fontawesome.com/fc803fbe6f.js" crossorigin="anonymous"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
        <link rel="stylesheet" href="scss/application.css">
    </head>

    <body>
        <div class="grid">
            <?php 
                include("includes/topnav.php");
                include("includes/header.php");
                include("includes/sidenav.php");
            ?>

            <main class="primary content grid-item container">
            <div class="skills-wrapper">
                <div class="subheading" id='main'>
                    <h1 class="topic-header" id="skills">
                        Skills
                    </h1>
                </div>
                <div class="row container">
                    <div class="skills skill-1 col">
                        <div class="icon-container">
                            <i class="fa-brands fa-html5 fa-lg"></i>
                        </div>
                        <h2 class="skill-header">
                            HTML5
                        </h2>
                        <p>
                            Comfortable with semantic markup and general structuring.
                        </p>
                        <a href="coding-eg.php" class="btn project-btn">
                            See More
                        </a>
                    </div>
                    <div class="skills skill-2 col">
                        <div class="icon-container">
                            <i class="fa-brands fa-css3-alt"></i>
                        </div>
                        <h2 class="skill-header">
                            CSS3
                        </h2>
                        <p>
                            Able to create responsive sites and manage layouts with both Flexbox and CSS Grid.
                        </p>
                        <a href="coding-eg.php" class="btn project-btn">
                            See More
                        </a>
                    </div>
                    <div class="skills skill-3 col">
                        <div class="icon-container">
                            <i class="fa-brands fa-sass"></i>
                        </div>
                        <h2 class="skill-header">
                            SCSS/SASS
                        </h2>
                        <p>
                            Experience using SASS alongside CSS to use loops and mixins along with other functionality.
                        </p>
                        <a href="coding-eg.php#sasseg" class="btn project-btn">
                            See More
                        </a>
                    </div>
                    <div class="skills skill-4 col">
                        <div class="icon-container">
                            <i class="fa-brands fa-square-js"></i>
                        </div>
                        <h2 class="skill-header">
                            JavaScript
                        </h2>
                        <p>
                            Experience working with  Vanilla javascript over a few projects including Jquery as well.
                        </p>
                        <a href="coding-eg.php#jseg" class="btn project-btn">
                            See More
                        </a>
                    </div>
                    <div class="skills skill-5 col">
                        <div class="icon-container">
                            <i class="fa-brands fa-php"></i>
                        </div>
                        <h2 class="skill-header">
                            PHP
                        </h2>
                        <p>
                            Basic knowledge of the language, including an understanding of the core features.
                        </p>
                        <a href="coding-eg.php#phpeg" class="btn project-btn">
                            See More
                        </a>
                    </div>
                    <div class="skills skill-6 col">
                        <div class="icon-container">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <h2 class="skill-header">
                            SQL
                        </h2>
                        <p>
                        Comfortable with using queries to research, analyse, and troubleshoot data.
                        </p>
                        <a href="coding-eg.php#sqleg" class="btn project-btn">
                            See More
                        </a>
                    </div>
                </div>
            </div>    
            <div class="subheading" >
                    <h1 class="topic-header" id="portfolio">
                        My Portfolio
                    </h1>
                </div>
                <?php
                    include('includes/mobilenav.php');
                ?>
                    <div class="projects row container">
                        <div class="item-1 col">
                            <div class="img-container">
                                <img  class="project-img" src="img/project-1.png" alt="placeholder img">
                            </div>
                            <div class="project-name">
                                <span>Project One: Netmatters Mock Site</span>
                            </div>
                            <p>This is a mock up of the actual Netmatters website which has been used as a master project for showcasing the use of multiple languages in the same site. Includes a working contact form to send to a database along with responsive layout and design.</p>
                            <p><small>Languages used: HTML, CSS, SASS/SCSS, JS, PHP, SQL</small></p>
                            <div class="project-btn_container">
                                <a href="https://netmatters.michael-wood.netmatters-scs.co.uk/index.php" target="_blank" class="btn project-btn">
                                    <small>View Project <i class="fa-solid fa-arrow-right"></i></small>
                                </a>
                            </div>
                        </div>
                        <div class="item-2 col">
                            <div class="img-container">
                                <img  class="project-img" src="img/Project-2.png" alt="placeholder img">
                            </div>
                            <div class="project-name">
                                <span>Project Two: Random Image Array to assign to emails</span>
                            </div>
                            <p>A site which displays a random image to be assigned to an email which then gets displayed in a container with the email. Comes with dropdown for changing email and seemlessly updating the container with the selected images.</p>
                            <p><small>Languages Used: HTML,CSS, SASS/SCSS, Vanilla Javascript and Jquery</small></p>
                            <div class="project-btn_container">
                                <a href="https://mikewood17.github.io/JS-Array/" class="btn project-btn" target="_blank">
                                    <small>View Project <i class="fa-solid fa-arrow-right"></i></small>
                                </a>
                            </div>
                        </div>
                        <div class="item-3 col">
                            <div class="img-container">
                                <img  class="project-img" src="img/wordpress-project.jpg" alt="placeholder img">
                            </div>
                            <div class="project-name">
                                <span>Project Three: Build A Guardian Wordpress site</span>
                            </div>
                            <p>
                                A site based on my favourite game around builds used in said game with working contact form and news section made in Wordpress
                            </p>
                            <p>
                                <small>Languages used: PHP, SQL, CSS, HTML</small>
                            </p>
                            <div class="project-btn_container">
                                <a href="http://buildaguardian.michael-wood.netmatters-scs.co.uk/" class="btn project-btn">
                                    <small>View Project <i class="fa-solid fa-arrow-right"></i></small>
                                </a>
                            </div>
                        </div>
                    </div>
                <div class="secondary-content container" id="contact-form">
                    <div class="info-container">
                        <div class="subheading">
                            <h1 class="contact-header">
                                Get In Touch
                            </h1>
                        </div>
                        <div class="container">
                            <div>
                                <p>
                                    You can either contact me at the below phone number or email adress. Alternatively you can fill out the contact form and I'll get back to as soon as possible.
                                </p>
                            </div>
                            <div class="contact-number">
                                <a href="#">
                                    <span class="declaration">07398 50 06 69</span>
                                </a>
                            </div>
                            <br>
                            <div>
                                <a href="#">
                                    <span class="declaration">michael.wood@netmatters-scs.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form grid-item">
                        <form class="form" id="form" method="POST" action="index.php#form">
                            <div class="contact-input">
                                <label>First Name <span class="required">*</span> </label>
                                <input class="form-control" type="text" placeholder="John" id="first-name" name="first-name">
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <small>Error message</small>
                            </div>
                            <div class="contact-input">
                                <label>Last Name <span class="required">*</span> </label>
                                <input class="form-control" type="text" placeholder="Smith" id="last-name" name="last-name">
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <small>Error message</small>
                            </div>
                            <div class="contact-input">
                                <label>Email <span class="required">*</span>  </label>
                                <input class="form-control" type="text" placeholder="John.smith@example.com" id="email" name="email">
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <small>Error message</small>
                            </div>
                            <div class="contact-input">
                                <label>Subject <span class="required">*</span> </label>
                                <input class="form-control" type="text" placeholder="Enter Subject here" id="subject" name="subject" maxlength="50">
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <small>Error message</small>
                            </div>
                            <div class="contact-input">
                                <label>Message <span class="required">*</span> </label>
                                <textarea class="form-control message" type="text" placeholder="Enter Message here" id="message" name="message" maxlength="400"></textarea>
                                <i class="fa-solid fa-circle-check"></i>
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <small>Error message</small>
                            </div>
                            <div>
                                <button class="submit btn" value="Submit" name="submit" type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                 </div>
            </main>

            <?php
                include('includes/footer.php');
            ?>
            <?php 
                if (isset($_POST['submit'])) {
                    echo
                    '<div class="fade">
                        <div class="success-popup">
                            <div class="popup-header">
                                <button id="close">&times;</button>
                                <h2>Your message was sent</h2>
                            </div>
                            <div class="popup-content">
                                <p>
                                    I will get in touch with you shortly
                                </p>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
        <script src="js/form.js"></script>
        </div>
    </body>
</html>