<?php 
 include "conexion.php";
if (isset($_GET["variable"])) {
    $consulta = ($_GET['variable']);
    $variable = $consulta;
  }


  $sql = $conexion->query("DELETE FROM Categoria WHERE idCat='$variable'");
  if ($sql) {
    echo'<script type="text/javascript">
    alert("Categoria Eliminada");
    window.location= "../administrador/listcategorias.php";
    </script>
    ';
  } else {
    echo'<script type="text/javascript">
    alert("Error");
    window.location= "../administrador/listcategorias.php";
    </script>
    ';
  }


?>