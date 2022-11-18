<?php

 include "conexion.php";
 if (empty($_POST['idCat'])) {    
    echo'<script type="text/javascript">
    alert("Error Informe a Soporte");
    history.back();
    </script>';
}else{
    $idCat = $_POST["idCat"];
    $nomcat = $_POST["nomcat"];
    $sql = $conexion->query("UPDATE Categoria SET nomCat='$nomcat'    
                             WHERE idCat=$idCat");
          if ($sql) {
            echo'<script type="text/javascript">
            alert("Editorial Actualizada");
            </script>';
            header("location:../administrador/listcategorias.php");
           
          } else {
          
          }

}
?>


