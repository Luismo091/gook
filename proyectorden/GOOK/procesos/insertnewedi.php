<?php

 include "conexion.php";
 if (empty($_POST['idEdi'])) {    
    echo'<script type="text/javascript">
    alert("Error Informe a Soporte");
    history.back();
    </script>';
}else{
    $idEdi = $_POST["idEdi"];
    $nomedi = $_POST["nomedi"];
    if(isset($_FILES['imagenedi']['name'])){
        $foto= addslashes(file_get_contents($_FILES['imagenedi']['tmp_name']));

    $sql = $conexion->query("INSERT INTO
         Editorial (idEdi, nomEdi, foto_edi)
         VALUES ('$idEdi','$nomedi','$foto')");
          if ($sql) {
            echo'<script type="text/javascript">
            alert("Autor Registrada");
            </script>';
            header("location:../administrador/listeditoriales.php");
           
          } else {
            echo'<script type="text/javascript">
            alert("Error");
            history.back();
            </script>';
          }
}
echo'<script type="text/javascript">
            alert("Error");
            history.back();
            </script>';
}
?>


