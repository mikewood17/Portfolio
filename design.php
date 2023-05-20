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

            <?php
                include('includes/mobilenav.php');
            ?>
            <?php
                include('includes/footer.php');
            ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>