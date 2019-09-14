<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">

	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



	<link href="<?php echo base_url(); ?>files/css/owl/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>files/css/owl/owl.theme.default.min.css" rel="stylesheet">


	<link href="<?php echo base_url('files/fullcalendar/packages/core/main.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('files/fullcalendar/packages/daygrid/main.css'); ?>" rel="stylesheet">


	<script src="<?php echo base_url('files/fullcalendar/packages/core/main.js'); ?>"></script>
	<script src="<?php echo base_url('files/fullcalendar/packages/interaction/main.js'); ?>"></script>
	<script src="<?php echo base_url('files/fullcalendar/packages/daygrid/main.js'); ?>"></script>

</head>

<body>


	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top z-depth-0">

		<!-- Navbar brand -->
		<a class="navbar-brand" href="<?= base_url('main/index'); ?>">Bikers RD</a>

		<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Collapsible content -->
		<div class="collapse navbar-collapse " id="basicExampleNav">

			<!-- Links -->
			<ul class="navbar-nav ml-auto ">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('main/index'); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('main/eventos') ?>">Eventos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('main/galerias'); ?>">Galerias</a>
				</li>



				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('main/clasificados'); ?>">Clasificados</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('main/contactanos'); ?>">Contactanos</a>
				</li>
				<?php if ($this->session->userdata('tipo') === '12') : ?>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle bg-warning" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Mi cuenta
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="<?php echo base_url('main_usuario/index') ?>">Dashboard</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">Cerrar sesion</a>
						</div>
					</li>

				<?php elseif ($this->session->userdata('tipo') === '43') : ?>


					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle bg-warning" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Admin
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="<?php echo base_url('main_admin/index') ?>">Dashboard</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">Cerrar sesion</a>
						</div>
					</li>

				<?php else : ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('auth/loginReg') ?>">Acceder</a>
					</li>
				<?php endif; ?>
			</ul>
			<!-- Links -->
		</div>
		<!-- Collapsible content -->

	</nav>
	<!--/.Navbar-->
