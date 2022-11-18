<?php 
if (isset($_GET["variable"])) {
    $consulta = ($_GET['variable']);
    $variable = $consulta;
  }
?>

<script>let eliminar= confirm("Estas seguro de eliminar");
if(eliminar){
    window.location= '../procesos/deletecat.php?variable=<?php echo $variable?>';
}else {
    alert( "No Elimino La Categoria" );
    history.back();
}
</script>