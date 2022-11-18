<?php 
 include "conexion.php";
if (isset($_GET["variable"])) {
    $consulta = ($_GET['variable']);
    $variable = $consulta;
  }


  $sql = $conexion->query("DELETE FROM Autor WHERE idAut='$variable'");
  if ($sql) {
    echo'<script type="text/javascript">
    alert("Autor Eliminado");
    window.location= "../administrador/listautor.php";
    </script>
    ';
  } else {
    echo'<script type="text/javascript">
    alert("Error");
    window.location= "../administrador/listautor.php";
    </script>
    ';
  }


?>