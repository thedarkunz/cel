<?php
include '../conexion/conexion.php';

$id=$_POST['id'];

$query = "select * from personal where idpersonal=$id";

$exec = sqlsrv_query($conn,$query);

?>
<form>
	<?php while ($fila = sqlsrv_fetch_array($exec)) {?>
	<input hidden="true" type="text"  id="txt_id_personal" value="<?php echo $id; ?>">
	<label>Nombre:</label><input type="text" id="txt_nombre_personal_update" value="<?php echo utf8_encode($fila[1]); ?>"><br>
	<label>Apellido:</label><input type="text" id="txt_apellido_personal_update" value="<?php echo $fila[2]; ?>"><br>
	<label>Telefono:</label><input type="text" id="txt_telefono_personal_update" value="<?php echo $fila[3]; ?>"><br>
	<?php }?>
	<button id="btn_actualizar_personal">Enviar</button>
</form>
<script type="text/javascript" src="js/personal.js"></script>
