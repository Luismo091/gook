<?php
session_start();
include "procesos/conexion.php";
if (empty($_SESSION['id'])) {
  header("location:page-404.html");
}
if (isset($_GET["variable1"])) {
  $variable = ($_GET['variable1']);
}
$idusu = $_SESSION['id'];
$sql1 = $conexion->query("SELECT * FROM Favorito WHERE Libro_idLib='$variable' AND Usu_idusu='$idusu'");
$datos=$sql1->fetch_object();
$vadatos=$datos->idFav;
if (!empty($datos->idFav)) {
  $sql2 = $conexion->query("DELETE FROM Favorito WHERE idFav = $vadatos");
  header("location:fichabook.php?variable=$variable");
} else {
  $sql = $conexion->query("INSERT INTO Favorito (Libro_idLib, Usu_idusu) VALUES ('$variable','$idusu')");
  if ($sql) {
      header("location:fichabook.php?variable=$variable");
  } else {
  
  }
}
