<?php
include '../controlador/cliente.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/JQuery.js"></script>
</head>
<body>
	<div id="tbl_cliente">
	<button id="btn_agregar_cliente">Añadir</button>
	<table >
		<thead>
			<tr>
				<th>IdCliente</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>DNI</th>
				<th>Dirección</th>
			</tr>
		</thead>
		<tbody>
			<?php while($fila=sqlsrv_fetch_array($exec)){ ?>
			<tr>
				<td><?php echo $fila[0]; ?></td>
				<td><?php echo utf8_encode($fila[1]); ?></td>
				<td><?php echo $fila[2]; ?></td>
				<td><?php echo $fila[3]; ?></td>
				<td><?php echo $fila[4]; ?></td>
				<td><a href="javascript:enviar(<?php echo $fila[0];?>);" id="btn_modificar.php"><img src="imagenes/update.png"></a></td>
				<td><a href="javascript:value(<?php echo $fila[0];?>);" id="btn_eliminar_cliente"><img src="imagenes/delete.png"></a></td>

			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	<div hidden="true" id="agregar_cliente">
		<label hidden="true" id="lbl_id_cliente"></label>
		<label>Nombre:</label><input type="text" id="txt_nombre"><br>
		<label>Apellido:</label><input type="text" id="txt_apellido"><br>
		<label>DNI:</label><input type="text" id="txt_dni"><br>
		<label>Dirección:</label><input type="text" id="txt_direccion"><br>
		<button id="btn_guardar_cliente">Guardar</button>
	</div>
	<div id="modificar"></div>
<script type="text/javascript" src="js/cliente.js"></script>
</body>
</html>
