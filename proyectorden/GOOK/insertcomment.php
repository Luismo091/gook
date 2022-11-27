<?php
session_start();
if (empty($_POST['rating']) and empty($_POST['comment'])) {
} else {
    $comen= $_POST["comment"];
    $cal= $_POST["rating"];

    $sql = $conexion->query("INSERT INTO Favorito (Libro_idLib, Usu_idusu) VALUES ('variable','idusu')");
}
?>