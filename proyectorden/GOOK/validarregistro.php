<?php
 session_start();
 
    $email = $_GET["inputemail"];
    $nom1 = $_GET["inputname1"];
    $nom2 = $_GET["inputname2"];
    $ape1 = $_GET["inputlastname1"];
    $ape2 = $_GET["inputlastname2"];
    $edad = $_GET["inputedad"];
    $chec = $_GET["inputescritor"];
    $clav = $_GET["inputpassword"];
    $clac = $_GET["inputpasswordconfi"];
    
    echo "<script>alert($email$nom1$nom2$ape1$ape2)</script>";
    
?>

