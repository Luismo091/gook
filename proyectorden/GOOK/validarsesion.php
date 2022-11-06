<?php
session_start();
include('conexion.php');

if (empty($_POST['inputEmail']) || empty($_POST['inputPassword'])) {
    include('index.php');
} else {

    $email = $_POST['inputEmail'];
    $clave = $_POST['inputPassword'];
    $query = "SELECT idSeg, email, clave, 
    Rol_idRol,idUsu, nom1, nom2, ape1, ape2, 
    eda, foto, Seguridad_idSeg, Favorito_idFav,
     Suscripcion_idSus
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
        $_SESSION['foto'] = $datos['foto'];
        $typeusu['tipousurio'] = $datos['Rol_idRol'];
        echo $typeusu['tipousurio'];
        echo "hola";

        if ($typeusu['tipousurio'] == 1) { //Admin
            header("location:main.php");
        } else if ($typeusu['tipousurio'] == 2) {//Editor
            header("location:see-book.php");
        } else if ($typeusu['tipousurio'] == 3) {//Escritor
            header("location:see-book.php");
        } else if ($typeusu['tipousurio'] == 4) {//Lector
            header("location:main.php");
        } else {
?>
            <?php
            include('page-404.html');
            ?>
            <h1></h1>
<?php
        }
    }
}



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>No se encuentra el usuario</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme">
</head>

<body class="dark ">
    <div class="wrapper vh-100">
        <div class="align-items-center h-100 d-flex w-50 mx-auto">
            <div class="mx-auto text-center">
                <h1 class="display-1 m-0 font-weight-bolder text-muted" style="font-size:80px;">500</h1>
                <h1 class="mb-1 text-muted font-weight-bold">OOPS!</h1>
                <h6 class="mb-3 text-muted">El usuario y/o clave incorrector o no existen.</h6>
                <a href="index.php" class="btn btn-lg btn-primary px-5">Iniciar Sesion</a>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
</body>

</html>
</body>

</html>