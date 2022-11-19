<?php

 include "conexion.php";
 if (empty($_POST['idUsu'])) {    
    echo'<script type="text/javascript">
    alert("Error Informe a Soporte");
    history.back();
    </script>';
}else{
    $idUsu = $_POST["idUsu"];
    $nom1 = $_POST["nom1"];
    $nom2 = $_POST["nom2"];
    $ape1 = $_POST["ape1"];
    $ape2 = $_POST["ape2"];
    $edad = $_POST["edad"];
    $rol = $_POST["rol"];
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];

echo $rol;

    
 

    if(isset($_FILES['imagen']['name'])){
        $foto= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        


    $sql = $conexion->query("UPDATE Seguridad SET email='$correo', clave='$clave',
                             Rol_idRol='$rol'
                             WHERE idSeg='$idUsu'; 
                             
                             ");
          if ($sql) {

            $sql = $conexion->query(" UPDATE Usuario SET nom1='$nom1', nom2='$nom2',ape1='$ape1', ape2='$ape2',
            eda=$edad, foto='$foto'
            WHERE idUsu='$idUsu';");

            if($sql){
                echo'<script type="text/javascript">
                alert("Autor Registrada");
                </script>';
                header("location:../administrador/listcuentas.php");
            }

            
           
          } else {
          
          }
}
}
?>


