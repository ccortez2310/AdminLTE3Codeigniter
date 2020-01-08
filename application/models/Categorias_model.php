<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Categorias_model extends CI_Model
{
	public function getCategorias()
	{
		$categorias = $this->db->query("SELECT * FROM Categorias");
		return $categorias->result();
	}

	public function getCategoria($idCategoria)
	{
		$categoria = $this->db->query("SELECT * FROM Categorias WHERE Id = $idCategoria");
		return $categoria->row();
	}

	public function saveOrUpdateCategoria($data)
	{
		$idCategoria = $data["idCategoria"];
		$datos = [
			"Categoria" => $data["Categoria"]
		];
		if (empty($idCategoria)) {
			return $this->db->insert("Categorias", $datos);
		} else {
			$this->db->where("Id", $idCategoria);
			return $this->db->update("Categorias", $datos);
		}
	}

	public function deleteCategoria($id)
	{
		$this->db->where("Id", $id);
		return $this->db->delete("Categorias");
	}

}
