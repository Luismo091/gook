<?php 
 include "conexion.php";
if (isset($_GET["variable"])) {
    $consulta = ($_GET['variable']);
    $variable = $consulta;
  }


  $sql = $conexion->query("DELETE FROM LibAut WHERE Libro_idLib='$variable'");
  $sql = $conexion->query("DELETE FROM LibEdi WHERE Libro_idLib='$variable'");
  //$sql = $conexion->query("DELETE FROM Libro WHERE idLib='$variable'");
  if ($sql) {
    echo'<script type="text/javascript">
    alert("Libro Eliminado");
    window.location= "../administrador/listbook.php";
    </script>
    ';
  } else {
    echo'<script type="text/javascript">
    alert("Error");
    window.location= "../administrador/listbook.php";
    </script>
    ';
  }


?>