<?php

 include "conexion.php";
 if (empty($_POST['idCate']) ||empty($_POST['idCate'])) {    
    
}else{
    
}

$email = $_POST["inputemail"];
$nom1 = $_POST["inputname1"];
$nom2 = $_POST["inputname2"];
$ape1 = $_POST["inputlastname1"];
$ape2 = $_POST["inputlastname2"];
$edad = $_POST["inputedad"];
$clav = $_POST["inputpassword"];
$clac = $_POST["inputpasswordconfi"];





if(isset($_FILES['imagen']['name'])){
$foto= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));




echo "INSERT INTO `GookPochita`.`Usuario` (`idUsu`, `nom1`, `nom2`, `ape1`, `ape2`, `eda`, `Seguridad_idSeg`, `Suscripcion_idSus`) VALUES ('5', '1', '1', '1', '1', '1', '5', '1')";
echo "INSERT INTO `GookPochita`.`Seguridad` (`idSeg`, `email`, `clave`, `Rol_idRol`) VALUES ('5', '5', '5', '5'); ";


if($clav==$clac){

    $idSEG;
    $sql = $conexion->query("SELECT email from Seguridad WHERE email='$email';");
    $datos=$sql->fetch_array();
    if (empty($datos["email"])) {
    
        $idSEG;
        $sql1 = $conexion->query("SELECT max(idSeg) from Seguridad;");
        $datos=$sql1->fetch_array();
        $vadatos=$datos["max(idSeg)"];
        if (empty($datos["max(idSeg)"])) {
        $idSEG=1;
        }else{
            $idSEG=$vadatos;
            $idSEG=$idSEG+1;
        }
        $idUSU;
        $sql1 = $conexion->query("SELECT max(idUsu) from Usuario;");
        $datos=$sql1->fetch_array();
        $vadatos=$datos["max(idUsu)"];
        if (empty($datos["max(idUsu)"])) {
        $idUSU=1;
        }else{
            $idUSU=$vadatos;
            $idUSU=$idUSU+1;
        }
        
        $sql = $conexion->query("INSERT INTO
         Seguridad (idSeg, email, clave, Rol_idRol)
         VALUES ('$idSEG','$email','$clav','$chec')");
          if ($sql) {
           
          
            //$d=rand(1,300);
            $sql = $conexion->query("INSERT INTO
         Usuario (idUsu,nom1, nom2, ape1, ape2, eda, foto, Seguridad_idSeg,Suscripcion_idSus)
         VALUES ('$idUSU','$nom1','$nom2','$ape1','$ape2','$edad','$foto','$idSEG','1')");
          if ($sql) {
            header("location:registrotomain.php?email=$email&clave=$clav");
          } else {
          
          }         
          } else {
          
          }
        
    
    
    }else{
        //echo "<script>alert('emailocupado')</script>";
        
        //header("location:registrogook.php");
        echo'<script type="text/javascript">
    alert("emailocupado");
    history.back();
    </script>';
        
    }


}else{
    echo'<script type="text/javascript">
    alert("La contraseña no coincide");
    history.back();
    </script>';

}


}else{

}



?>


