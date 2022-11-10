<?php
 session_start();
 include "conexion.php";
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


echo "INSERT INTO `GookPochita`.`Usuario` (`idUsu`, `nom1`, `nom2`, `ape1`, `ape2`, `eda`, `Seguridad_idSeg`, `Suscripcion_idSus`) VALUES ('5', '1', '1', '1', '1', '1', '5', '1')";
echo "INSERT INTO `GookPochita`.`Seguridad` (`idSeg`, `email`, `clave`, `Rol_idRol`) VALUES ('5', '5', '5', '5'); ";

$idSEG;
$sql1 = $conexion->query("SELECT max(idSeg) from Seguridad;");
$datos=$sql1->fetch_array();
$vadatos=$datos["max(idSeg)"];
if (empty($datos["max(idSeg)"])) {
$idSEG=1;
}else{
    $idSEG=$vadatos;
    $idSEG=$idSEG+1;
}

$sql = $conexion->query("INSERT INTO
 Seguridad (idSeg, email, clave, Rol_idRol)
 VALUES ('$idSEG','$email','$clav','$chec')");
  if ($sql) {
    $sql = $conexion->query("INSERT INTO
 Usuario (nom1, nom2, ape1, ape2, eda, Seguridad_idSeg)
 VALUES ('$nom1','$nom2','$ape1','$ape2','$edad','$idSEG')");
  if ($sql) {
      header("");
  } else {
  
  }
      header("");
  } else {
  
  }



?>

?>
