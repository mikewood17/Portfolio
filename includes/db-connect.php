<?php

//connect to local databse

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=portfolio", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

// connect to database
// try {
//     $servername = "localhost:3306";
//     $username = "michaelw_michaelwood";
//     $password = "MeggyCat!123";

//     $conn = new PDO("mysql:host=$servername; dbname=michaelw_portfolio", $username, $password);
//     $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// } catch(PDOException $e) {
//     echo "error!: " . $e -> getMessage();
//     die();
// }

?>