$("#btn_cliente").click(function () {
	$.ajax
	({
		url: "vista/cliente.php",
		success:function (a) {
			$("#pantalla").html(a);
		}
	});
});

$("#btn_producto").click(function () {
	$.ajax
	({
		url: "vista/producto.php",
		success:function (a) {
			$("#pantalla").html(a);
		}
	});
});

$("#btn_personal").click(function () {
	$.ajax
	({
		url: "vista/personal.php",
		success:function (a) {
			$("#pantalla").html(a);
		}
	});
});

$("#btn_boletas").click(function () {
	$.ajax
	({
		url: "vista/boleta.php",
		success:function (a) {
			$("#pantalla").html(a);
		}
	});
});
