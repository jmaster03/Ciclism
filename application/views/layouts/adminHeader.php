<!DOCTYPE html>
		<html lang="en">

		<head>

			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<meta name="description" content="">
			<meta name="author" content="">

			<title>SB Admin - Dashboard</title>


		

			<!-- Font Awesome -->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
			<!-- Bootstrap core CSS -->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
			<!-- Material Design Bootstrap -->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">

			<!-- Custom styles for this template-->
			<link href="<?php echo base_url('files/css/sb-admin.css'); ?>" rel="stylesheet">

			<!-- JQuery -->
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	


		</head>

		<body id="page-top">

			<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">

				<a class="navbar-brand mr-1" href="<?= base_url('main/index');?>">Bikers RD Admin</a>



				<!-- Navbar -->
				<ul class="navbar-nav ml-auto ">
						<a class="nav-link " href="<?php echo base_url('main_admin/contactos') ?>">
							<i class="far fa-envelope fa-fw"></i>
						</a>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-user-circle fa-fw"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="<?= base_url('main_admin/adminInfo');?>">Mi perfil</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">Logout</a>
						</div>
					</li>
				</ul>

			</nav>



			<!-- Sidebar -->
			<ul class="sidebar navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('main_admin/index');?>">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('main_admin/clasificados');?>">
						<i class="fas fa-store"></i>
						<span>Clasificados</span>
					</a>
				</li> 
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('main_admin/usuarios');?>">
						<i class="fas fa-user-cog"></i>
						<span>Usuarios</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('main_admin/grupos');?>">
						<i class="fas fa-users"></i>
						<span>Grupos</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('main_admin/galerias');?>">
						<i class="fas fa-images"></i>
						<span>Galerias</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('main_admin/eventos');?>">
						<i class="fas fa-calendar-alt"></i>
						<span>Eventos</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('main_admin/noticias');?>">
						<i class="fas fa-newspaper"></i>
						<span>Noticias</span></a>
				</li>

			</ul>

			<!-- /#wrapper -->


			<div class="body">
				<div class="container-fluid">
			
