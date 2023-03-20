<?php

include("includes/db-connect.php");

// check button press
if(ISSET($_POST["submit"])) {

    //variables
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
        $sql = "INSERT INTO `contact` (Fname, Lname, Email, Subject, Message) VALUES ('". $fname ."', '". $lname ."', '". $email ."', '". $subject ."', '". $message ."')";
        $conn->exec($sql);
    }catch(PDOException $e) {
        echo $e->getMessage();
    }
}


?>