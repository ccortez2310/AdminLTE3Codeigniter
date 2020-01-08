<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Categorias</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('categorias') ?>">Categorias</a></li>
						<li class="breadcrumb-item active">Todas las Categorias</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header align-items-center">
							<h5 class="mt-1 float-left">
								<i class="fa fa-tag text-info"></i> Listado de Categorias
							</h5>
							<button type="button" class="btn btn-info float-right" data-toggle="modal"
									data-target="#modalCategoria">
								<i class="fas fa-plus-circle"></i> Nueva Categoria
							</button>
						</div>
						<div class="card-body">
							<table class="table table-hover dtes dt-responsive nowrap tblCategorias">
								<thead>
								<tr>
									<th>#</th>
									<th>Categoria</th>
									<th>Acciones</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($categorias as $key => $value): ?>
									<tr>
										<td><?php echo($key + 1) ?></td>
										<td><?php echo $value->Categoria ?></td>
										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-warning editarCategoria" title="Editar Categoria"
														data-toggle="modal"
														data-target="#modalCategoria"
														idCategoria="<?php echo $value->Id ?>">
													<i class="fa fa-edit text-white"></i>
												</button>
												<button type="button" class="btn btn-danger eliminarCategoria" title="Eliminar Categoria"
														idCategoria="<?php echo $value->Id ?>">
													<i class="fa fa-trash"></i>
												</button>
											</div>
										</td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modalCategoria" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<form action="<?php echo base_url("categorias/guardar") ?>" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title tituloModalCategoria">
						<i class="fa fa-plus-circle"></i>
						Agregar Categoria
					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="Categoria">Categoria:</label>
						<input type="text" class="form-control" id="Categoria" name="Categoria"
							   placeholder="Ingrese el nombre de la categoria">
						<input type="hidden" id="idCategoria" name="idCategoria">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-info" id="btnGuardar">
						<i class="fa fa-save"></i> Guardar Categoria
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
