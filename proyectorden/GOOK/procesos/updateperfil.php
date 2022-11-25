<?php
session_start();
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

    
 

    if(isset($_FILES['imagen']['name'])){
        $foto= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            $sql = $conexion->query(" UPDATE Usuario SET nom1='$nom1', nom2='$nom2',ape1='$ape1', ape2='$ape2',
            eda=$edad, foto='$foto'
            WHERE idUsu='$idUsu';");

            if($sql){
                $query = "SELECT * FROM Usuario
                WHERE idUsu='$idUsu'";
                $resul = $conexion->query($query);
                if ($datos = $resul->fetch_array()) {  
                    $_SESSION['nombre1'] = $datos['nom1'];
                    $_SESSION['nombre2'] = $datos['nom2'];
                    $_SESSION['apellido1'] = $datos['ape1'];
                    $_SESSION['apellido2'] = $datos['ape2'];
                    $_SESSION['edad'] = $datos['eda'];
                    $_SESSION['foto'] = $datos['foto'];
                }

                echo'<script type="text/javascript">
                alert("Info Actualizada");
                </script>';
                header("location:../perfil.php");
            }

            
           
          
}
}
?>


