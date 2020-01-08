<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-navy">

	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
		</li>
	</ul>
	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item mt-1">
			<span class="dateday" id="dateday"></span>
			<span class="dateday" id="datedays"></span>
		</li>
		<li class="nav-item ml-2">
			<span class="datetime" id="datetime"></span>
		</li>
		<li class="nav-item ml-5">
			<a class="nav-link" href="salir"><i
					class="fas fa-power-off"></i> Salir</a>
		</li>
	</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?=base_url() ?>inicio" class="brand-link navbar-navy">
		<img src="<?=base_url() ?>assets/img/plantilla/logo.png" alt="CDMYPE" class="brand-image img-circle elevation-3"
			 style="opacity: 1">
		<span class="brand-text font-weight-light"><b>ERP</b></span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?=base_url() ?>assets/img/usuarios/default/anonymous.png" class="img-circle elevation-2" alt="usuario">;
			</div>
			<div class="info">
				<a href="javascript:void(0)" class="d-block">Usuario</a>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item has-treeview">
					<a href="javascript:void(0)" class="nav-link">
						<i class="nav-icon fas fa-money-check"></i>
						<p>
							Facturación
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item menu-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Ventas</p>
							</a>
						</li>
						<li class="nav-item menu-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Compras</p>
							</a>
						</li>
						<li class="nav-item menu-item">
							<a href="<?php echo base_url('welcome') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Cuentas por Cobrar</p>
							</a>
						</li>
						<li class="nav-item menu-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Cuentas por Pagar</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a href="javascript:void(0)" class="nav-link">
						<i class="nav-icon fas fa-list-alt"></i>
						<p>
							Gestión de Inventario
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item menu-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Productos</p>
							</a>
						</li>
						<li class="nav-item menu-item">
							<a href="<?php echo base_url('categorias') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Categorias</p>
							</a>
						</li>
						<li class="nav-item menu-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Unidades de Medida</p>
							</a>
						</li>
						<li class="nav-item menu-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Ajustes de Inventario</p>
							</a>
						</li>
					</ul>
				</li>
				<!--          <li class="nav-item">-->
				<!--            <a href="#" class="nav-link">-->
				<!--              <i class="nav-icon fas fa-th"></i>-->
				<!--              <p>-->
				<!--                Simple Link-->
				<!--                <span class="right badge badge-danger">New</span>-->
				<!--              </p>-->
				<!--            </a>-->
				<!--          </li>-->
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>

