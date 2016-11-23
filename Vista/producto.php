<?php
include '../controlador/producto.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/JQuery.js"></script>
</head>
<body>
	<div id="tbl_producto">
	<button id="btn_agregar_producto">Añadir</button>
	<table >
		<thead>
			<tr>
				<th>IdProducto</th>
				<th>Nombre</th>
				<th>Modelo</th>
				<th>S_O</th>
				<th>Precio_Unitario</th>
        <th>Stock</th>
        <th>tecnologia</th>
        <th>Descripcion</th>

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
        <td><?php echo $fila[5]; ?></td>
        <td><?php echo $fila[6]; ?></td>
        <td><?php echo $fila[7]; ?></td>
				<td><a href="javascript:enviar(<?php echo $fila[0];?>);" id="btn_modificar.php"><img src="imagenes/update.png"></a></td>
				<td><a href="javascript:value(<?php echo $fila[0];?>);" id="btn_eliminar_cliente"><img src="imagenes/delete.png"></a></td>

			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	<div hidden="true" id="agregar_producto">
		<label hidden="true" id="lbl_id_producto"></label>
		<label>Nombre:</label><input type="text" id="txt_nombre_producto"><br>
		<label>Modelo:</label><input type="text" id="txt_modelo_producto"><br>
		<label>SO:</label><input type="text" id="txt_so_producto"><br>
		<label>Precio_Unitario:</label><input type="text" id="txt_precio_unitario"><br>
    <label>Stock:</label><input type="text" id="txt_stock_producto"><br>
    <label>tecnologia:</label><input type="text" id="txt_tecnologia_producto"><br>
    <label>Descripcion:</label><input type="text" id="txt_descripcion_producto"><br>
		<button id="btn_guardar_producto">Guardar</button>
	</div>
	<div id="modificar"></div>
<script type="text/javascript" src="js/producto.js"></script>
</body>
</html>
