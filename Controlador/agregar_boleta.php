<?php
include '../conexion/conexion.php';


$fecha=date('Y-d-m',strtotime($_POST['fecha']));
$cliente=$_POST['cliente'];
$personal=$_POST['personal'];
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];

$query = "declare @fecha datetime
declare @idcliente int
declare @idpersonal int
declare @idproducto int
declare @cantidad int
declare @nboleta int
declare @stock int
set @fecha='".$fecha."'
set @idcliente=$cliente
set @idpersonal=$personal
set @idproducto=$producto
set @cantidad=$cantidad
set @stock = (select Stock from PRODUCTO where IdProducto=@idproducto)
if @fecha <= GETDATE() and @cantidad<=@stock
begin
exec [dbo].[INSERTAR_BOLETA] '',@fecha,0,@idcliente,@idpersonal
set @nboleta=(select max(N_Boleta) from BOLETA)
exec INSERTAR_DETABOLETA @nboleta,@idproducto,0,@cantidad
update BOLETA set estado=1 where N_Boleta=@nboleta
update PRODUCTO set Stock=@stock-@cantidad where IdProducto=@idproducto
end";

sqlsrv_query($conn,$query);


echo $query;
?>
