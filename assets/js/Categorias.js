const urlAjax = "http://localhost/erp/";

/*===================================
EDITAR CATEGORIA
====================================*/

$(".editarCategoria").on("click", function () {
	let idCategoria = $(this).attr("idCategoria");
	$.ajax({
		url: urlAjax + "categorias/getCategoria",
		method: "POST",
		data: {idCategoria: idCategoria},
		dataType: "json",
		success: function (data) {
			$(".tituloModalCategoria").html(
				"<i class='fa fa-edit'></i> Editar Categoria"
			);
			$("#idCategoria").val(data["Id"]);
			$("#Categoria").val(data["Categoria"]);
			$("#btnGuardar").removeClass("btn-success")
				.addClass("btn-warning text-white");

		}
	})
});

/*===================================
ELIMINAR CATEGORIA
====================================*/
$(".eliminarCategoria").on("click", function () {
	let idCategoria = $(this).attr("idCategoria");
	swal({
		title: '¿Está seguro de borrar el registro?',
		text: "¡Si no lo está puede cancelar la accíón!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si'
	}).then(function (result) {
		if (result.value) {
			$.ajax({
				url: urlAjax + "categorias/deleteCategoria",
				method: "POST",
				data: {idCategoria: idCategoria},
				dataType: "json",
				success: function (data) {
					swal({
						type: "success",
						title: "¡La Categoria ha sido eliminada!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					}).then(function (result) {
						if (result.value) {
							window.location = urlAjax + "categorias";
						}
					});
				}
			})
		}
	})
});


