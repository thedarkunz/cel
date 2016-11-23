<?php
include '../controlador/personal.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/JQuery.js"></script>
</head>
<body>
	<div id="tbl_personal">
	<button id="btn_agregar_personal">Añadir</button>
	<table >
		<thead>
			<tr>
				<th>IdPersonal</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Telefono</th>
			</tr>
		</thead>
		<tbody>
			<?php while($fila=sqlsrv_fetch_array($exec)){ ?>
			<tr>
				<td><?php echo $fila[0]; ?></td>
				<td><?php echo utf8_encode($fila[1]); ?></td>
				<td><?php echo $fila[2]; ?></td>
				<td><?php echo $fila[3]; ?></td>
				<td><a href="javascript:enviar(<?php echo $fila[0];?>);" id="btn_modificar.php"><img src="imagenes/update.png"></a></td>
				<td><a href="javascript:value(<?php echo $fila[0];?>);" id="btn_eliminar_cliente"><img src="imagenes/delete.png"></a></td>

			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	<div hidden="true" id="agregar_personal">
		<label hidden="true" id="lbl_id_personal"></label>
		<label>Nombre:</label><input type="text" id="txt_nombre_personal"><br>
		<label>Apellido:</label><input type="text" id="txt_apellido_personal"><br>
		<label>Telefono:</label><input type="text" id="txt_telefono_personal"><br>
		<button id="btn_guardar_personal">Guardar</button>
	</div>
	<div id="modificar"></div>
<script type="text/javascript" src="js/personal.js"></script>
</body>
</html>
