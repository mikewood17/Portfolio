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

            <main class="container scheme-container">
                <div class="heading container" id='main'>
                    <h1 class="topic header" id="scheme">
                        SCS Scheme
                    </h1>
                </div>
                <div class="container">
                    <div class="scs-content subheading">
                        <h1>Introduction To Scion Coalition Scheme</h1>
                    </div>
                    <div class="scs content">
                        <p>
                            The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order to give willing candidates the opportunity to enter the industry as web developers. Under the supervision of senior web developers, scions generally aim to complete training within six to nine months. The course is intensive and therefore the level of learning achieved is extensive in a short space of time. For more information please follow the link below.
                        </p>
                        <div>
                            <a class="btn" href="https://www.netmatters.co.uk/train-for-a-career-in-tech/scion-scheme-frequently-asked-questions" target="_blank"><i class="fa-solid fa-code"></i> SCS FAQ</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="">
                        <h1>
                            Treehouse
                        </h1>
                    </div>
                    <div class="treehouse content">
                        <p>
                            Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to C# programming, iOS development, data analysis, and more. By completing courses users can earn points, allowing them to track their progress and see how much they've covered in certain areas. Follow the link below to see my progress.
                        </p>
                        <div>
                            <a class="btn" href="https://teamtreehouse.com/profiles/mikewood3" target="_blank"> <i class="fa-solid fa-tree"></i>  Treehouse Score</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="about-netmatters">
                        <h1 class="subheading">
                            About Netmatters
                        </h1>
                        <ul class="content">
                            <li>Established in 2008</li>
                            <li>Norfolk's leading technology company</li>
                            <li>Winner of the Princess Royal Training Award</li>
                            <li>Winner of EDP Skills of Tomorrow Award</li>
                            <li>80+ staff, 2 locations across Norfolk</li>
                            <li>Digital Marketing, Website & Software development & IT Support</li>
                            <li>Broad spectrum of clients, working nationwide</li>
                            <li>Operate to strict company values</li>
                        </ul>
                    </div>
                </div>
            <?php
                include('includes/mobilenav.php');
            ?>
            </main>
            <?php
                include('includes/footer.php')
            ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>