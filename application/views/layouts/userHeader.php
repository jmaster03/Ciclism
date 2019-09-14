
<!DOCTYPE html>
		<html lang="en">

		<head>

			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<meta name="description" content="">
			<meta name="author" content="">
			<!-- Font Awesome -->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
			<!-- Bootstrap core CSS -->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
			<!-- Material Design Bootstrap -->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">

            <link href="<?php echo base_url('files/css/sb-admin.css'); ?>" rel="stylesheet">

		</head>
<body id="page-top">
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
    <a class="navbar-brand" href="<?php echo base_url('main/index')?>">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('main_usuario/mensajes');?>"> Mensajes  </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('main_usuario/clasificados');?>">Clasificados</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> Profile </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
            <a class="dropdown-item" href="<?= base_url('main_usuario/myProfile');?>">Mi perfil</a>
            <a class="dropdown-item" href="<?php echo base_url('auth/logout')?>">Cerrar sesion</a>
            </div>
        </li>
        </ul>
    </div>
    </nav>
	<!--/.Navbar -->
	

    <div class="container">
