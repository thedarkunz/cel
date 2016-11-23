function value(id) {
var data = {"id":id};

$.ajax
({
	url: "controlador/eliminar_producto.php",
	type: "post",
	data: data,
	success:function () {
		alert("Se elimino el producto");
		//$("#tbl_cliente").load();
	}
});
}

function enviar(id) {

	var data = {"id":id};
	$.ajax
	({
		url: "controlador/recibir_producto.php",
		type: "post",
		data: data,
		success: function (a) {
			$("#modificar").html(a);
			$("#modificar").show();
			$("#agregar_producto").hide();
		}
	});
}

$("#btn_actualizar_producto").click(function () {
	var id =$("#txt_id_producto").val();
	var nombre = $("#txt_nombre_producto_update").val();
  var modelo = $("#txt_modelo_producto_update").val();
	var so=$("#txt_so_producto_update").val();
	var precio = $("#txt_precio_unitario_update").val();
	var stock = $("#txt_stock_producto_update").val();
  var tecnologia = $("#txt_tecnologia_producto_update").val();
  var descripcion = $("#txt_descripcion_producto_update").val();

	var data = {"id":id,"nombre":nombre,"modelo":modelo,"so":so,"precio":precio,
              "stock":stock,"tecnologia":tecnologia,"descripcion":descripcion};

	$.ajax
	({
		url:"controlador/actualizar_producto.php",
		type:"post",
		data:data,
		success:function () {
			$("#modificar").hide();
		}
	});

})

$("#btn_agregar_producto").click(function () {
$("#agregar_producto").show();
$("#modificar").hide();
})

$("#btn_guardar_producto").click(function () {


	var nombre = $("#txt_nombre_producto").val();
  var modelo = $("#txt_modelo_producto").val();
	var so=$("#txt_so_producto").val();
	var precio = $("#txt_precio_unitario").val();
	var stock = $("#txt_stock_producto").val();
  var tecnologia = $("#txt_tecnologia_producto").val();
  var descripcion = $("#txt_descripcion_producto").val();

	var data = {"nombre":nombre,"modelo":modelo,"so":so,"precio":precio,
              "stock":stock,"tecnologia":tecnologia,"descripcion":descripcion};
	$.ajax
	({
		url:"controlador/agregar_producto.php",
		type:"post",
		data:data,
		success:function () {
			$("#agregar_producto").hide();
		}
	});
})
