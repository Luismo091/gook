<?php
session_start();
include "conexion.php";
if (empty($_SESSION['id'])) {
  header("location:page-404.html");
}

if (isset($_GET["variablel"])) {
  $consulta = ($_GET['variablel']);
  $variable = $consulta;
}
$idusu = $_SESSION['id'];
$d=rand(1,3000);
$sql = $conexion->query("INSERT INTO Favorito (idFav, Libro_idLib, Usu_idusu) VALUES ('$d','$variable','$idusu')");
if ($sql) {
    header("location:fichabook.php?variable=$variable");
} else {

}
?>