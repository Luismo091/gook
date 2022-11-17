<?php

 include "conexion.php";
 if (empty($_POST['idCate'])||empty($_POST['catego'])) {    
    echo'<script type="text/javascript">
    alert("Complete el formulario");
    history.back();
    </script>';
}else{
    $idCat = $_POST["idCate"];
    $nomcat = $_POST["catego"];

    $sql = $conexion->query("INSERT INTO
         Categoria (idCat, nomCat)
         VALUES ('$idCat','$nomcat')");
          if ($sql) {
            echo'<script type="text/javascript">
            alert("Categoria Registrada");
            </script>';
            header("location:../administrador/listcategorias.php");
           
          } else {
          
          }
}
?>


