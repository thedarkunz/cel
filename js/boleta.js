function value(id) {
var data = {"id":id};

$.ajax
({
	url: "controlador/eliminar_boleta.php",
	type: "post",
	data: data,
	success:function () {
		alert("Se elimino el registro");
		//$("#tbl_cliente").load();
	}
});
}

function enviar(id) {
	var data = {"id":id};
	$.ajax
	({
		url: "controlador/recibir_boleta.php",
		type: "post",
		data: data,
		success: function (a) {
			$("#modificar").html(a);
			$("#modificar").show();
			$("#agregar_boleta").hide();
		}
	});
}

$("#btn_actualizar_boleta").click(function () {
	var id =$("#txt_id_boleta").val();
	var fecha = $("#txt_fecha_boleta_update").val();
	var cliente=$("#cb_cliente_update").val();
	var personal = $("#cb_personal_update").val();
	var producto = $("#cb_producto_update").val();
	var cantidad = $("#txt_cantidad_update").val();
	var data = {"id":id,"fecha":fecha,"cliente":cliente,"personal":personal,"producto":producto,"cantidad":cantidad};

	$.ajax
	({
		url:"controlador/actualizar_boleta.php",
		type:"post",
		data:data,
		success:function () {
			$("#modificar").hide();
		}
	});

})

$("#btn_agregar_boleta").click(function () {
$("#agregar_boleta").show();
$("#modificar").hide();
})

$("#btn_guardar_boleta").click(function () {

	var fecha = $("#txt_fecha_boleta").val();
	var cliente=$("#cb_cliente").val();
	var personal = $("#cb_personal").val();
	var producto = $("#cb_producto").val();
	var cantidad = $("#txt_cantidad").val();
	var data = {"fecha":fecha,"cliente":cliente,"personal":personal,"producto":producto,"cantidad":cantidad};

	$.ajax
	({
		url:"controlador/agregar_boleta.php",
		type:"post",
		data:data,
		success:function () {
			$("#agregar_personal").hide();
		}
	});
})
