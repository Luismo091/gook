<?php
include "../procesos/conexion.php";
if (isset($_GET["variable"])) {
    $variable = ($_GET['variable']);
    $sql = $conexion->query("UPDATE Libro SET estado=2    
    WHERE idLib=$variable");
    if ($sql) {
        echo '<script type="text/javascript">
alert("Libro Rechazado");
</script>';
        header("location:listbooked.php");
    } else {
    }
} else {
    echo 'No se han recibido datos';
}
?>