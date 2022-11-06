<?php
session_start();
if (empty($_SESSION['usuario'])) {
    header("location:page-404.html");
}
include('conexion.php');

if (empty($_POST['inputEmail']) || empty($_POST['inputPassword'])) {
    echo '<script type="text/javascript">
  alert("Complete el Formulario");
</script>';
    include('logingook.php');
    
} else  {
    
    $email = $_POST['inputEmail'];
    $clave = $_POST['inputPassword'];
    $query = "SELECT idSeg, email, clave, 
    Rol_idRol,idUsu, nom1, nom2, ape1, ape2, 
    eda, foto, Seguridad_idSeg, Favorito_idFav,
     Suscripcion_idSus, Reciente_idReciente 
     FROM Seguridad INNER JOIN Usuario ON Seguridad.idSeg=Usuario.Seguridad_idSeg
    WHERE Seguridad.email='$email' AND  Seguridad.clave='$clave'";
    $resul = $conexion->query($query);
    if ($datos = $resul->fetch_array()) {
        
        $_SESSION['id'] = $datos['idSeg'];
        $_SESSION['email'] = $datos['email'];
        $_SESSION['nombre1'] = $datos['nom1'];
        $_SESSION['nombre2'] = $datos['nom2'];
        $_SESSION['apellido1'] = $datos['ape1'];
        $_SESSION['apellido2'] = $datos['ape2'];
        $_SESSION['edad'] = $datos['eda'];
        $_SESSION['foto'] = $datos['fot'];
        $typeusu['tipousurio'] =$datos['Rol_idRol'];
echo $typeusu['tipousurio'];
echo "hola";

        if ($typeusu['tipousurio'] == 1) { //ADMIN
            header("location:see-book.php");
        } else if ($typeusu['tipousurio'] == 2) {
            header("location:see-book.php");
        } else if ($typeusu['tipousurio'] == 3) {
            header("location:see-book.php");
        }else if ($typeusu['tipousurio'] == 4) {
            header("location:see-book.php");
        }else{
?>
            <?php
            include('page-404.html');
            ?>
            
<?php
        }
    }
}
?>
