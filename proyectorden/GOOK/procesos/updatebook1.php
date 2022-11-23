<?php

 include "conexion.php";
 if (empty($_POST['idAut'])) {    
    echo'<script type="text/javascript">
    alert("Error Informe a Soporte");
    history.back();
    </script>';
}else{
    
if ($_FILES["imagen"]["size"]!==0 ){}
    echo "No FILE";
}else{
    echo "File";
}
}
?>


