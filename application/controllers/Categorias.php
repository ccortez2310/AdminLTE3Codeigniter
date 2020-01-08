<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/BaseController.php';

class Categorias extends BaseController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Categorias_model');

	}

	public function index()
	{
		$data = [
			"categorias" => $this->Categorias_model->getCategorias()
		];
		$this->loadViews("categorias/categorias", null, $data);
	}

	public function getCategoria()
	{
		$idCategoria = $_POST["idCategoria"];
		$categoria = $this->Categorias_model->getCategoria($idCategoria);
		echo json_encode($categoria);
	}

	public function guardar()
	{
		$data = $this->input->post();
		if ($this->Categorias_model->saveOrUpdateCategoria($data)) {
			echo '<script>
					swal({
						type: "success",
						title: "¡Datos Almacenados!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					}).then(function (result) {
						if (result.value) {
							window.location = "categorias";
						}
					});
				</script>';
		} else {
			echo '<script>
					swal({
						type: "error",
						title: "¡Error al guardar los datos!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					}).then(function (result) {
						if (result.value) {
							window.location = "categorias";
						}
					});
				</script>';
		}
	}

	public function deleteCategoria()
	{
		$idCategoria = $_POST["idCategoria"];
		if ($this->Categorias_model->deleteCategoria($idCategoria)) {
			echo json_encode("ok");
		} else {
			echo json_encode("error");
		}
	}
}
