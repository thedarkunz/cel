<?php
include '../conexion/conexion.php';

$id=$_POST['id'];

$query = "select * from producto where IdProducto=$id";

$exec = sqlsrv_query($conn,$query);

//echo $query;
?>
<form>
	<?php while ($fila = sqlsrv_fetch_array($exec)) {?>
	<input hidden="true" type="text"  id="txt_id_producto" value="<?php echo $id; ?>">
  <label>Nombre:</label><input type="text" value="<?php echo $fila[1]; ?>" id="txt_nombre_producto_update"><br>
  <label>Modelo:</label><input type="text" value="<?php echo $fila[2]; ?>" id="txt_modelo_producto_update"><br>
  <label>SO:</label><input type="text" value="<?php echo $fila[3]; ?>" id="txt_so_producto_update"><br>
  <label>Precio_Unitario:</label><input type="text" value="<?php echo $fila[4]; ?>" id="txt_precio_unitario_update"><br>
  <label>Stock:</label><input type="text" value="<?php echo $fila[5]; ?>" id="txt_stock_producto_update"><br>
  <label>tecnologia:</label><input type="text" value="<?php echo $fila[6]; ?>" id="txt_tecnologia_producto_update"><br>
  <label>Descripcion:</label><input type="text" value="<?php echo $fila[7]; ?>" id="txt_descripcion_producto_update"><br>
	<?php }?>
	<button id="btn_actualizar_producto">Enviar</button>
</form>
<script type="text/javascript" src="js/producto.js"></script>
