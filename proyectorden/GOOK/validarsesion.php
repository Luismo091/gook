<?php
session_start();
include('conexion.php');
if (empty($_POST['inputEmail']) || empty($_POST['inputPassword'])) {
    include('logingook.php');
    
} else {
    $email = $_POST['inputEmail'];
    $clave = $_POST['inputPassword'];
include 'conexion.php';
$query ="SELECT idSeg, email, clave, 
Rol_idRol,idUsu, nom1, nom2, ape1, ape2, 
eda, foto, Seguridad_idSeg, Favorito_idFav,
 Suscripcion_idSus, Reciente_idReciente 
 FROM Seguridad INNER JOIN Usuario ON Seguridad.idSeg=Usuario.Seguridad_idSeg
WHERE Seguridad.email='$email' AND  Seguridad.clave='$clave'";
$resul = $conexion->query($query);
$contlibro;
if ($row = $resul->fetch_array()) {
 $vemail = $row['email'];
 $vclave=$row['clave'];
 $vrol=$row['Rol_idRol'];
 echo $vemail.' '.$vclave;
echo "hola?";
if ($rol == 1) { //ADMIN
    header("see-book.php");
} else if ($rol == 2) { //EDITOR
    header("see-book.php");
} else if ($rol == 3) { //ESCRITOR
    header("see-book.php");
} else if ($rol == 4) { //LECTOR
    header("see-book.php");
}
}


        
?>
        <?php
        include('error-404.html');
        ?>
        <h1></h1>
<?php
    }





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - No existe este usuario</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/error.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    <script src="https://kit.fontawesome.com/4006f4ca68.js" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="img-error" src="imagesa/Diseño sin título.png" alt="Not Found">
                    <h1 class="error-title">Este usuario no existe</h1>
                    <p class='fs-5 text-gray-600'>Revisa tus credencianles y vuelve a intentarlo.</p>
                    <a href="index.html" class="btn btn-lg btn-outline-primary mt-3"><i class="fa-solid fa-arrow-left"></i> Inicia de nuevo </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>}