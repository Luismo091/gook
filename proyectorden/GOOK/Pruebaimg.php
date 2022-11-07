<?php
include 'conexion.php';
$query ="SELECT * FROM Usuario WHERE idUsu='1'";
$resul = $conexion->query($query);
$contlibro;
if ($row = $resul->fetch_array()) {
 $contenido = $row["foto"];
 $contlibro=base64_encode($contenido);
 ?>
     <img src="data:image/png;base64,<?=base64_encode($row["foto"])?>" />
     <input type="checkbox"   id="acceptTerms" name="acceptTerms" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
      <?php
}

?>
