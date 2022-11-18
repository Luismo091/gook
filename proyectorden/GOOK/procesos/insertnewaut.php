<?php

 include "conexion.php";
 if (empty($_POST['idAut'])) {    
    echo'<script type="text/javascript">
    alert("Error Informe a Soporte");
    history.back();
    </script>';
}else{
    $idAut = $_POST["idAut"];
    $nomaut1 = $_POST["nomaut1"];
    $nomaut2 = $_POST["nomaut2"];
    $apeaut1 = $_POST["apeaut1"];
    $apeaut2 = $_POST["apeaut2"];
    $bio = $_POST["bio"];
    
    $_FILES["imagenban"];

    if(isset($_FILES['imagenaut']['name'])&&isset($_FILES['imagenban']['name'])){
        $foto= addslashes(file_get_contents($_FILES['imagenaut']['tmp_name']));
        $banner= addslashes(file_get_contents($_FILES['imagenban']['tmp_name']));

    $sql = $conexion->query("INSERT INTO
         Autor (idAut, nomAut1, nomAut2, apeAut1, apeAut2, foto_aut, bio, banner)
         VALUES ('$idAut','$nomaut1','$nomaut2','$apeaut1','$apeaut2','$foto','$bio','$banner')");
          if ($sql) {
            echo'<script type="text/javascript">
            alert("Autor Registrada");
            </script>';
            header("location:../administrador/listautor.php");
           
          } else {
          
          }
}
}
?>


