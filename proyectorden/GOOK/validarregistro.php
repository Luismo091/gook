<?php
 session_start();
 
    $email = $_GET["inputemail"];
    $nom1 = $_GET["firstname"];
    $nom2 = $_GET["2firstname"];
    $ape1 = $_GET["lastname"];
    $ape2 = $_GET["lastname"];
    
    echo "<script>alert($email$nom1$nom2$ape1$ape2)</script>";
    
?>

