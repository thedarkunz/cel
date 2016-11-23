<?php
include '../controlador/boleta.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/JQuery.js"></script>
</head>
<body>
	<div id="tbl_boleta">
	<button id="btn_agregar_boleta">Agregar Pedido</button>
	<table >
		<thead>
			<tr>
				<th>N_Boleta</th>
				<th>Fecha</th>
				<th>DNI</th>
				<th>Nombre_Cliente</th>
        <th>Apellido_Cliente</th>
				<th>Telefono_personal</th>
				<th>Nombre_personal</th>
				<th>Apellido_Personal</th>
        <th>Producto</th>
				<th>Modelo</th>
				<th>SO</th>
				<th>Precio</th>
        <th>Cantidad</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<?php while($fila=sqlsrv_fetch_array($exec)){ ?>
			<tr>
				<td><?php echo $fila[0]; ?></td>
				<td><?php echo date_format($fila[1], 'd-m-Y'); ?></td>
				<td><?php echo $fila[2]; ?></td>
				<td><?php echo $fila[3]; ?></td>
        <td><?php echo $fila[4]; ?></td>
				<td><?php echo $fila[5]; ?></td>
        <td><?php echo $fila[6]; ?></td>
				<td><?php echo $fila[7]; ?></td>
        <td><?php echo $fila[8]; ?></td>
				<td><?php echo $fila[9]; ?></td>
        <td><?php echo $fila[10]; ?></td>
        <td><?php echo "S/.".number_format($fila[11],2); ?></td>
        <td><?php echo number_format($fila[12]); ?></td>
        <td><?php echo "S/.".number_format(round($fila[13],2)); ?></td>
				<td><a href="javascript:enviar(<?php echo $fila[0];?>);" id="btn_modificar.php"><img src="imagenes/update.png"></a></td>
				<td><a href="javascript:value(<?php echo $fila[0];?>);" id="btn_eliminar_cliente"><img src="imagenes/delete.png"></a></td>

			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	<div hidden="false" id="agregar_boleta">
		<label hidden="true" id="lbl_id_boleta"></label>
		<label>Fecha:</label><input type="date" id="txt_fecha_boleta"><br>
		<label>Cliente:</label>
    <select type="text" id="cb_cliente">
      <?php while ($row_cliente=sqlsrv_fetch_array($exec_cliente)) { ?>
      <option value="<?php echo $row_cliente[0]; ?>"><?php echo utf8_encode($row_cliente[1]); ?></option>
      <?php } ?>
    </select><br>
		<label>Personal:</label>
    <select type="text" id="cb_personal">
      <?php while($row_personal=sqlsrv_fetch_array($exec_personal)){  ?>
      <option value="<?php echo $row_personal[0]; ?>"><?php echo $row_personal[1]; ?></option>
      <?php } ?>
    </select>
      <br>
      <label>Producto:</label>
      <select type="text" id="cb_producto">
        <?php while($row_producto=sqlsrv_fetch_array($exec_producto)){  ?>
        <option value="<?php echo $row_producto[0]; ?>"><?php echo $row_producto[1]; ?></option>
        <?php } ?>
      </select> <br>
      <label>Cantidad:</label>
      <input type="text" id="txt_cantidad"><br>
		<button id="btn_guardar_boleta">Guardar</button>
	</div>
	<div id="modificar"></div>
<script type="text/javascript" src="js/boleta.js"></script>
</body>
</html>
