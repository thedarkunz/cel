<?php
include '../controlador/boleta.php';
?>
<!DOCTYPE html>
<html><html>

<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body topmargin="0" leftmargin="0" bgcolor="#6D93D2">

<table border="0" width="780" height="585" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" height="103"><img src="1.jpg" width="780" height="103"></td>
  </tr>
  <tr>
    <td width="100%" height="482" valign="top"><table border="0" width="100%" height="482"
    cellspacing="0" cellpadding="0">
      <tr>
        <td width="14"></td>
        <td width="155" valign="top"><table border="0" width="100%" cellspacing="0"
        cellpadding="0">
          <tr>
            <td width="100%"><img src="2.jpg" width="155" height="24"></td>
          </tr>
          <tr>
            <td width="100%"><img src="3.jpg" width="155" height="28"></td>
          </tr>
          <tr>
            <td width="100%"><img src="4.jpg" width="155" height="14"></td>
          </tr>
          <tr>
            <td width="100%"><img src="5.jpg" width="155" height="28"></td>
          </tr>
          <tr>
            <td width="100%"><img src="6.jpg" width="155" height="14"></td>
          </tr>
          <tr>
            <td width="100%"><img src="7.jpg" width="155" height="28"></td>
          </tr>
          <tr>
            <td width="100%"><img src="8.jpg" width="155" height="15"></td>
          </tr>
          <tr>
            <td width="100%"><img src="9.jpg" width="155" height="28"></td>
          </tr>
          <tr>
            <td width="100%"><img src="10.jpg" width="155" height="20"></td>
          </tr>
          <tr>
            <td width="100%"><img src="11.jpg" width="155" height="28"></td>
          </tr>
          <tr>
            <td width="100%"><img src="12.jpg" width="155" height="255"></td>
          </tr>
        </table>
        </td>
        <td width="611" background="13.jpg"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<table border="0" width="780">
  <tr>
    <td width="100%">
      
  </tr>
</table>
</body>
</html>
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
