<?php 
 include "conexion.php";
if (isset($_GET["variable"])) {
    $consulta = ($_GET['variable']);
    $variable = $consulta;
  }


  $sql = $conexion->query("DELETE FROM Editorial WHERE idEdi='$variable'");
  if ($sql) {
    echo'<script type="text/javascript">
    alert("Editorial Eliminada");
    window.location= "../administrador/listeditoriales.php";
    </script>
    ';
  } else {
    echo'<script type="text/javascript">
    alert("Error");
    window.location= "../administrador/listeditoriales.php";
    </script>
    ';
  }


?>