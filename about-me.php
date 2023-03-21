<!DOCTYPE html>
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
            <main>
                <div class="about-main container">
                    <div class="subheading" id='main'>
                        <h1 class="about-me-header" id="about-me">
                            About Me
                        </h1>
                    </div>
                    <div class="about-container">
                        <div class="about-img-container">
                            <img class="about-img" src="img/about-me.GIF">
                        </div>
                            <div class="short">
                                <h1 class="about-heading">
                                    <small>The short</small>
                                </h1>
                                <p>
                                    I am a trainee web developer with a focus on front-end web development. Currently studing from home in Norwich Norfolk on the Netmatters Scion Coalition Scheme.
                                </p>
                            </div>
                            <div class="long">
                                <h1 class="about-heading">
                                    <small>The Long</small>
                                </h1>
                                <p>
                                    My name is Michael Wood and I am an aspiring web developer. I didn’t start my journey into the technological industry until late. Initially, I attended Sheffield Hallam University with dreams of wanting to become a physiotherapist but realised it wasn't for me. So I moved to Norwich and during lockdown, I started my first piece of coding by doing a javascript course on Udemy. This led me to where I am now, currently undertaking the Netmatters Scion Coalition Scheme. My reason for wanting to become a front-end developer is I believe it merges my two strongest skills which are creativity and problem-solving along with my passion for wanting to help people. I believe this comes from my keen interest in technology whether through gaming or creating digital art. 
                                </p>  
                                    <div class="about-contact">
                                        <p>
                                            If you would like to get in contact with me please click the button below:
                                        </p>
                                        <a class="btn" href="index.html#contact-form">Contact</a>
                                    </div>  
                            </div>
                        </div>
                    </div>
                <?php
                    include('includes/mobilenav.php');
                ?>
            </main>


            <?php
                include('includes/footer.php');
            ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>