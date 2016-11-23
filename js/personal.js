function value(id) {
var data = {"id":id};

$.ajax
({
	url: "controlador/eliminar_personal.php",
	type: "post",
	data: data,
	success:function () {
		alert("Se elimino el personal");
		//$("#tbl_cliente").load();
	}
});
}

function enviar(id) {
	var data = {"id":id};
	$.ajax
	({
		url: "controlador/recibir_personal.php",
		type: "post",
		data: data,
		success: function (a) {
			$("#modificar").html(a);
			$("#modificar").show();
			$("#agregar_personal").hide();
		}
	});
}

$("#btn_actualizar_personal").click(function () {
	var id =$("#txt_id_personal").val();
	var nombre = $("#txt_nombre_personal_update").val();
	var apellido=$("#txt_apellido_personal_update").val();
	var telefono = $("#txt_telefono_personal_update").val();
	var data = {"id":id,"nombre":nombre,"apellido":apellido,"telefono":telefono};

	$.ajax
	({
		url:"controlador/actualizar_personal.php",
		type:"post",
		data:data,
		success:function () {
			$("#modificar").hide();
		}
	});

})

$("#btn_agregar_personal").click(function () {
$("#agregar_personal").show();
$("#modificar").hide();
})

$("#btn_guardar_personal").click(function () {

	var nombre = $("#txt_nombre_personal").val();
	var apellido=$("#txt_apellido_personal").val();
	var telefono = $("#txt_telefono_personal").val();
	var data = {"nombre":nombre,"apellido":apellido,"telefono":telefono};
	$.ajax
	({
		url:"controlador/agregar_personal.php",
		type:"post",
		data:data,
		success:function () {
			$("#agregar_personal").hide();
		}
	});
})
