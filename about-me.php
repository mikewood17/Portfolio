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
                            <img class="about-img" src="img/mecambridge.jpg">
                        </div>
                        <div class="about-txt">
                            <div class="short">
                                <h1 class="about-heading">
                                    <small>Who is Mike?</small>
                                </h1>
                            </div>
                            <div class="long">
                                <p>
                                    Mike Wood is a Junior Web developer from the mustard capitol of England, Norwich in Norfolk.
                                </p>
                                <p>
                                    I have been training to become a web developer and currently searching for my first junior role. To see more about this check out my Portfolio Page.
                                </p>
                                <p>
                                    I am a creative thinker who loves to design whatever my ADHD brain comes up with. This usually includes tattoo styled designs based around other interests. I'm also a big sports fan who loves nothing more than sitting infront of red-zone for hours watching the NFL or staying up late to catch my favourite NBA team the Toronto Raptors play.
                                </p>  
                                    <div class="about-contact">
                                        <p>
                                            If you would like to get in contact with me please click the button below:
                                        </p>
                                        <a class="btn" href="index.php#contact-form">Contact</a>
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