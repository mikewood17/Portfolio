<!DOCTYPE html>
<html>
    <head>
        <title>Michael Wood Portfolio</title>
        <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/fc803fbe6f.js" crossorigin="anonymous"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
        
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="scss/application.css">
    </head>

    <body>
        <div class="grid">
        <?php 
            include("includes/topnav.php");
            include("includes/header.php");
            include("includes/sidenav.php");
        ?>

            <main class="main-content">
                <div class="subheading" id='main'>
                    <h1 class="topic-header" id="coding-eg">
                        Coding Examples
                    </h1>
                </div>
                <div class="coding-examples container" id="jseg">
                    <div class="coding-header">
                        <h2>
                            Example 1: JavaScript Typing Banner Effect
                        </h2>
                    </div>
                    <div class="coding-img carousel">
                        <div>
                            <img class="placeholder-img" src="img/coding-eg1/coding-eg1_part1.png" alt="placeholder img">
                            
                        </div>
                        <div>
                            <img class="placeholder-img" src="img/coding-eg1/coding-eg1_part2.png" alt="placeholder img">
                        </div>
                        <div>
                            <img class="placeholder-img" src="img/coding-eg1/coding-eg1_part3.png" alt="placeholder img">
                        </div>
                        <div>
                            <img class="placeholder-img" src="img/coding-eg1/coding-eg1_part4.png" alt="placeholder img">
                        </div>
                        <div>
                            <img class="placeholder-img" src="img/coding-eg1/coding-eg1_part5.png" alt="placeholder img">
                        </div>
                        <div>
                            <img class="placeholder-img" src="img/coding-eg1/coding-eg1_part6.png" alt="placeholder img">
                        </div>
                    </div>
                    <div>
                        <p>
                            In slide one you can see how I set up the basic HTML structure adding an element for the 'sentance' part and another for the cursor both wrapped in a parent div.
                            <br> The second slide shows how I made the sentance and cursor appear on the same line using CSS. 
                            <br> The third slide shows how I then made the animation to make the cursor blink.
                            <br> I then added JavaScript using 2 functions. The first to make the sentance appear as if its typing adding a single letter each time. The second function is to create the delay between each append.
                            <br> The fifth slide then shows the function for deleting the sentance removing a letter 1 by 1 from the array.
                            <br> Finally the sixth slide shows how I call these functions to create a typing text carousel.
                        </p>
                    </div>
                </div>
                <div class="coding-examples container" id="sqleg">
                    <div class="coding-header">
                        <h2>
                            Example 2: SQL subquery
                        </h2>
                    </div>
                    <div class="coding-img carousel">
                        <div>
                            <img class="placeholder-img" src="img/coding-eg2/coding-eg2_part1.jpeg" alt="placeholder img">  
                        </div>
                        <div>
                            <img class="placeholder-img" src="img/coding-eg2/coding-eg2_part2.jpeg" alt="placeholder img">
                        </div>
                        <div>
                            <img class="placeholder-img" src="img/coding-eg2/coding-eg2_part3.jpeg" alt="placeholder img">
                        </div>
                    </div>
                    <div>
                        <p>
                            In the first slide you will see a database about movies, their genre, the actors, reviews and reviewers. My objective was to show the actors and their corresponding movies which had acheived a rating of over 8 stars.
                            <br>
                            <br> The second slide shows the query I used to do this. I started off selecting the names of the actors and using concat to combine their first and last name setting the alias to name. I then also selected the other variable I wanted to display, the movie title. I then used a left out join to combine the actor table with the movie cast table whilst also doing this again to combine them both with the movie table. afterwards I made the where function to use a subquery to only display the movies which received a rating of above 8 stars and sorted by movie titles into ascending order.
                            <br>
                            <br>  The third slide shows the table presented by my query.

                        </p>
                    </div>
                </div>
                <div class="coding-examples container" id="sasseg">
                    <div class="coding-header">
                        <h2>
                            Example 3: SASS loop for colour theme
                        </h2>
                    </div>
                    <div class="coding-img carousel">
                        <div>
                            <img class="placeholder-img" src="img/coding-eg3/coding-eg3_part1.png" alt="placeholder img">  
                        </div>
                        <div>
                            <img class="placeholder-img" src="img/coding-eg3/coding-eg3_part2.png" alt="placeholder img">
                        </div>
                        <div class="scrollableY-img">
                            <img class="scrollY-img" src="img/coding-eg3/coding-eg3_part3.png" alt="placeholder img">
                        </div>
                    </div>
                    <div>
                        <p>
                            In the first slide you will see the navigation bar and Our Services part of my Netmatters Mock site. It has different colours allocated to each service as part of a theme. This example will show how used a SASS loop to allocate these colours in each segment of the site.
                            <br>
                            <br> The second slide is the map of each colour and assigned to the variable $colors.
                            <br>
                            <br> The third slide is the loop itself going through the map $colors and applying the colour theme to each element in the html periodically.
                        </p>
                    </div>
                </div>
                <div class="coding-examples container" id="phpeg">
                    <div class="coding-header">
                        <h2>
                            Example 4: Inserting content from a database through PHP
                        </h2>
                    </div>
                    <div class="coding-img carousel">
                        <div>
                            <img class="placeholder-img" src="img/coding-eg4/coding-eg4_part1.png" alt="placeholder img">  
                        </div>
                        <div class="scrollableX-img">
                            <img class="scrollX-img" src="img/coding-eg4/coding-eg4_part2.png" alt="placeholder img">
                        </div>
                        <div class="scrollableY-img">
                            <img class="scrollY-img" src="img/coding-eg4/coding-eg4_part3.png" alt="placeholder img">
                        </div>
                        <div class="scrollableY-img">
                            <img class="scrollY-img" src="img/coding-eg4/coding-eg4_part4.png" alt="placeholder img">
                        </div>
                    </div>
                    <div>
                        <p>
                            In this first slide you can see the News section on my Netmatters mock site. Each part of information inside the card is generated from a SQL database and inputted through PHP.
                            <br>
                            <br> The second slide shows the information inside of the database which can be updated at any time to replace the content of the news card.
                            <br>
                            <br> The third slide shows a mixture of SQL and PHP on how I fetch the information from the database.
                            <br>
                            <br> Finally the fourth slide shows how I input the information fetched in slide 3 into the HTML. 
                        </p>
                    </div>
                <div class="closer container">
                    <h2>
                        If you wish to see more of my work please check out my portfolio or contact me for any extra examples.
                    </h2>
                    <div>
                        <a class="btn project-btn" href="index.php#portfolio">Portfolio</a>
                        <a class="btn project-btn" href="index.php#contact-form">Contact Me</a>
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
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/owl.js"></script>
        
    </body>
</html>