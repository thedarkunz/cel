<?php
include '../conexion/conexion.php';

$id=$_POST['id'];

$query = "select * from personal where idpersonal=$id";

$exec = sqlsrv_query($conn,$query);

//Cliente

$sql_cliente="select IdCliente,nombre +' '+apellido from Cliente where estado=1";

$exec_cliente=sqlsrv_query($conn,$sql_cliente);

//Personal
$sql_personal="select IdPersonal,nombre+' '+apellido from Personal where estado=1";

$exec_personal=sqlsrv_query($conn,$sql_personal);

//Producto
$sql_producto="select IdProducto,modelo from Producto where estado=1";

$exec_producto=sqlsrv_query($conn,$sql_producto);
?>
<form>

	<input hidden="true" type="text"  id="txt_id_boleta" value="<?php echo $id; ?>">
	<label>Fecha:</label><input type="date" id="txt_fecha_boleta_update"><br>
	<label>Cliente:</label>
	<select type="text" id="cb_cliente_update">
		<?php while ($row_cliente=sqlsrv_fetch_array($exec_cliente)) { ?>
		<option value="<?php echo $row_cliente[0]; ?>"><?php echo utf8_encode($row_cliente[1]); ?></option>
		<?php } ?>
	</select><br>
	<label>Personal:</label>
	<select type="text" id="cb_personal_update">
		<?php while($row_personal=sqlsrv_fetch_array($exec_personal)){  ?>
		<option value="<?php echo $row_personal[0]; ?>"><?php echo $row_personal[1]; ?></option>
		<?php } ?>
	</select>
		<br>
		<label>Producto:</label>
		<select type="text" id="cb_producto_update">
			<?php while($row_producto=sqlsrv_fetch_array($exec_producto)){  ?>
			<option value="<?php echo $row_producto[0]; ?>"><?php echo $row_producto[1]; ?></option>
			<?php } ?>
		</select> <br>
		<label>Cantidad:</label>
		<input type="text" id="txt_cantidad_update"><br>
	<button id="btn_actualizar_boleta">Enviar</button>
</form>
<script type="text/javascript" src="js/boleta.js"></script>
