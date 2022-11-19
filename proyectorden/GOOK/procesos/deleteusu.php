<?php 
 include "conexion.php";
if (isset($_GET["variable"])) {
    $consulta = ($_GET['variable']);
    $variable = $consulta;
  }


  $sql = $conexion->query("DELETE FROM Usuario WHERE idUsu='$variable'");
  if ($sql) {
    $sql = $conexion->query("DELETE FROM Seguridad WHERE idSeg='$variable'");
    if ($sql) {
        echo'<script type="text/javascript">
    alert("Usuario Eliminado");
    window.location= "../administrador/listcuentas.php";
    </script>
    ';
    }else{
        echo'<script type="text/javascript">
        alert("Error Seguridad No Eliminada");
        window.location= "../administrador/listcuentas.php";
        </script>
        ';
    }

  } else {
    echo'<script type="text/javascript">
    alert("Error");
    window.location= "../administrador/listcuentas.php";
    </script>
    ';
  }


?>