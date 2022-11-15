<?php
session_start();
include "conexion.php";












$file = $_FILES["fileTest"]["name"]; //Nombre de nuestro archivo

$validator = 1; //Variable validadora

$file_type = strtolower(pathinfo($file,PATHINFO_EXTENSION)); //Extensión de nuestro archivo

$url_temp = $_FILES["fileTest"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

//dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
$url_insert = dirname(__FILE__) . ""; //Carpeta donde subiremos nuestros archivos
$prueba=$url_insert;

str_replace(array("procesos"), "assets\libros/", $prueba);

$prueba=str_replace(array("procesos"), "assets\libros/", $prueba);
//Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
$url_target = str_replace('\\', '/', $prueba) . '' . $file;

//Si la carpeta no existe, la creamos
if (!file_exists($prueba)) {
    mkdir($prueba, 0777, true);
};

//Validamos el tamaño del archivo
$file_size = $_FILES["fileTest"]["size"];
if ( $file_size > 1000000) {
  echo "El archivo es muy pesado";
  $validator = 0;
}

//Validamos la extensión del archivo
if($file_type != "pdf") {
  echo "Solo se permiten archivos PDF";
  $validator = 0;
}

//movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
if($validator == 1){
    if (move_uploaded_file($url_temp, $url_target)) {
        echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
        echo $url_target;
        echo "-------".$prueba;
    } else {
        echo "Ha habido un error al cargar tu archivo.";
    }
}else{
    echo "Error: el archivo no se ha cargado";
}



?>
