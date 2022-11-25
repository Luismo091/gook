<?php
 include "conexion.php";

$idSeg = $_POST["idSeg"];
$email = $_POST["correo"];
$claveact = $_POST["claveact"];
$clavenew = $_POST["clavenew"];
$clavecon = $_POST["clavecon"];
$rol = $_POST["rol"];

$sql = $conexion->query("SELECT * from Seguridad WHERE idSeg='$idSeg';");
    if ($datos = $sql->fetch_array()) { 
        $clave=$datos['clave'];
        if ($clave==$claveact){
            if($clavenew==$clavecon){
                if($clavecon==""){
                    if($email==$datos['email']){
                        $sql2 = $conexion->query("UPDATE Seguridad SET Rol_idRol='$rol'
                                 WHERE idSeg=$idSeg");
                                if ($sql2) {
                                    echo'<script type="text/javascript">
                                    alert("Seguridad Actualizada");
                                    </script>';
                                    header("location:../perfil.php");                            
                                } 
    
                    }else{
                        $sql1 = $conexion->query("SELECT email from Seguridad WHERE email='$email';");
                        $datos1=$sql1->fetch_array();
                        if (empty($datos1["email"])) {
                            $sql2 = $conexion->query("UPDATE Seguridad SET email='$email', Rol_idRol='$rol'
                                                    WHERE idSeg=$idSeg");
                                if ($sql2) {
                                    echo'<script type="text/javascript">
                                    alert("Seguridad Actualizada");
                                    </script>';
                                    header("location:../perfil.php");                            
                                } 
                        }else{
                            echo'<script type="text/javascript">
                            alert("Email ya en uso");
                            history.back();
                            </script>'; 
                        }
                    }
                }else{
                    if($email==$datos['email']){
                        $sql2 = $conexion->query("UPDATE Seguridad SET clave='$clavecon', Rol_idRol='$rol'
                                 WHERE idSeg=$idSeg");
                                if ($sql2) {
                                    echo'<script type="text/javascript">
                                    alert("Seguridad Actualizada");
                                    </script>';
                                    header("location:../perfil.php");                            
                                } 
    
                    }else{
                        $sql1 = $conexion->query("SELECT email from Seguridad WHERE email='$email';");
                        $datos1=$sql1->fetch_array();
                        if (empty($datos1["email"])) {
                            $sql2 = $conexion->query("UPDATE Seguridad SET email='$email', clave='$clavecon', Rol_idRol='$rol'
                                                    WHERE idSeg=$idSeg");
                                if ($sql2) {
                                    echo'<script type="text/javascript">
                                    alert("Seguridad Actualizada");
                                    </script>';
                                    header("location:../perfil.php");                            
                                } 
                        }else{
                            echo'<script type="text/javascript">
                            alert("Email ya en uso");
                            history.back();
                            </script>'; 
                        }
                    }
                }
                

               
            }else{
                echo'<script type="text/javascript">
                    alert("No coinciden las Claves");
                    history.back();
                    </script>'; 
            }
        }else{
            echo'<script type="text/javascript">
            alert("Clave Actual Incorrecta");
            history.back();
            </script>';  
        }
    }
?>


