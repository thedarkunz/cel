<?php
include '../conexion/conexion.php';

$id=$_POST['id'];

$query = "select * from CLIENTE where idcliente=$id";

$exec = sqlsrv_query($conn,$query);

?>
<form>
	<?php while ($fila = sqlsrv_fetch_array($exec)) {?>
	<input hidden="true" type="text"  id="txt_id_cliente" value="<?php echo $id; ?>">
	<label>Nombre:</label><input type="text" id="txt_nombre_update" value="<?php echo utf8_encode($fila[1]); ?>"><br>
	<label>Apellido:</label><input type="text" id="txt_apellido_update" value="<?php echo $fila[2]; ?>"><br>
	<label>DNI:</label><input type="text" id="txt_dni_update" value="<?php echo $fila[3]; ?>"><br>
	<label>Dirección:</label><input type="text" id="txt_direccion_update" value="<?php echo $fila[4]; ?>"><br>
	<?php }?>
	<button id="btn_actualizar_cliente">Enviar</button>
</form>
<script type="text/javascript" src="js/cliente.js"></script>
