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
    
    if(isset($_FILES['imagen']['name'])){
        $foto= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        


        $sql = $conexion->query("INSERT INTO
        Seguridad (idSeg, email, clave, Rol_idRol)
        VALUES ('$idUsu','$correo','$clave','$rol')");
         if ($sql) {           
           $sql = $conexion->query("INSERT INTO
        Usuario (idUsu,nom1, nom2, ape1, ape2, eda, foto, Seguridad_idSeg,Suscripcion_idSus)
        VALUES ('$idUsu','$nom1','$nom2','$ape1','$ape2','$edad','$foto','$idUsu','1')");
         if ($sql) {
          echo'<script type="text/javascript">
          alert("Usuario Registrado");
          </script>';
          header("location:../administrador/listcuentas.php");
         } else {
         
         }         
         } else {
         
         }

}
}
?>


