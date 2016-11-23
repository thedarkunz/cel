function value(id) {
var data = {"id":id};

$.ajax
({
	url: "controlador/eliminar_cliente.php",
	type: "post",
	data: data,
	success:function () {
		alert("Se elimino el cliente");
		//$("#tbl_cliente").load();
	}
});
}

function enviar(id) {
	var data = {"id":id};
	$.ajax
	({
		url: "controlador/recibir_cliente.php",
		type: "post",
		data: data,
		success: function (a) {
			$("#modificar").html(a);
			$("#modificar").show();
			$("#agregar_cliente").hide();
		}
	});
}

$("#btn_actualizar_cliente").click(function () {
	var id =$("#txt_id_cliente").val();
	var nombre = $("#txt_nombre_update").val();
	var apellido=$("#txt_apellido_update").val();
	var dni = $("#txt_dni_update").val();
	var direccion = $("#txt_direccion_update").val();
	var data = {"id":id,"nombre":nombre,"apellido":apellido,"dni":dni,"direccion":direccion};

	$.ajax
	({
		url:"controlador/actualizar_cliente.php",
		type:"post",
		data:data,
		success:function () {
			$("#modificar").hide();
		}
	});

})

$("#btn_agregar_cliente").click(function () {
$("#agregar_cliente").show();
$("#modificar").hide();
})

$("#btn_guardar_cliente").click(function () {

	var nombre = $("#txt_nombre").val();
	var apellido=$("#txt_apellido").val();
	var dni = $("#txt_dni").val();
	var direccion = $("#txt_direccion").val();
	var data = {"nombre":nombre,"apellido":apellido,"dni":dni,"direccion":direccion};
	$.ajax
	({
		url:"controlador/agregar_cliente.php",
		type:"post",
		data:data,
		success:function () {
			$("#agregar_cliente").hide();
		}
	});
})
