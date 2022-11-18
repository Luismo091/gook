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


    $sql = $conexion->query("UPDATE Autor SET nomAut1='$nomaut1', nomAut2='$nomaut2',
                             apeAut1='$apeaut1',apeAut2='$apeaut2', foto_aut='$foto',
                             bio='$bio', banner='$banner'
                             WHERE idAut=$idAut");
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


