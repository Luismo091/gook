<?php
 session_start();
 
 if (empty($_GET['inputescritor'])) {    
    $chec = "0";
}else{
    $chec = "1"; 
}

$email = $_GET["inputemail"];
$nom1 = $_GET["inputname1"];
$nom2 = $_GET["inputname2"];
$ape1 = $_GET["inputlastname1"];
$ape2 = $_GET["inputlastname2"];
$edad = $_GET["inputedad"];
$clav = $_GET["inputpassword"];
$clac = $_GET["inputpasswordconfi"];

?>
