<title>BikersRD - Home</title>
<!--<php Layout::setLayout() ?>-->

<?php
$idSlider = 43;
$res = Listado::getSlider($idSlider);
$slider = $res[0];
?>
<script src="<?php echo base_url('files\js\owl\owl.carousel.min.js'); ?>"></script>
<link href="<?php echo base_url('files\css\owl\owl.carousel.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('files\css\owl\owl.theme.default.min.css'); ?>" rel="stylesheet">

<!--Carousel Wrapper-->
<div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">

	<!--Indicators-->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-1" data-slide-to="1"></li>
		<li data-target="#carousel-example-1" data-slide-to="2"></li>
	</ol>
	<!--/.Indicators-->

	<!--Slides-->
	<div class="carousel-inner" role="listbox">

		<!--First slide-->
		<div class="carousel-item active">
			<!--Mask-->
			<div class="view">
				<div class="full-bg-img flex-center mask rgba-indigo-light white-text">
					<ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
						<li>
							<h1 class="font-weight-bold text-uppercase"><?= $slider->text_1 ?></h1>
						</li>
					</ul>
				</div>
			</div>
			<!--/.Mask-->
		</div>
		<!--/.First slide-->

		<!--Second slide -->
		<div class="carousel-item">
			<!--Mask-->
			<div class="view">
				<div class="full-bg-img flex-center mask rgba-purple-light white-text">
					<ul class="animated fadeInUp col-md-12 list-unstyled">
						<li>
							<h1 class="font-weight-bold text-uppercase"><?= $slider->text_2 ?></h1>
						</li>
					</ul>
				</div>
			</div>
			<!--/.Mask-->
		</div>
		<!--/.Second slide -->

		<!--Third slide-->
		<div class="carousel-item">
			<!--Mask-->
			<div class="view">
				<div class="full-bg-img flex-center mask rgba-blue-light white-text">
					<ul class="animated fadeInUp col-md-12 list-unstyled">
						<li>
							<h1 class="font-weight-bold text-uppercase"><?= $slider->text_3 ?></h1>
						</li>
					</ul>
				</div>
			</div>
			<!--/.Mask-->
		</div>
		<!--/.Third slide-->

	</div>
	<!--/.Slides-->

	<!--Controls-->
	<a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->








<div class="page-content container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
					<div class="content-box-header box-with-header">
						<h3 class="text-center">Noticias recientes</h3>
					</div>
					<div class="content-box-large ">



						<div class="panel-body">
							<?php
							$rs = Listado::listadoNoticia();
							$noticias = base_url('main/noticias');

							if (is_array($rs)) {
								foreach ($rs as $noticia) {


									$urlShow = base_url("main/noticia/{$noticia->idNoticia}");

									if ($noticia->foto_n === 'noimage.jpg') {
										$imageR = base_url('files/img/static/noimage.jpg');
									} else {
										$imageR = (base_url() . 'files/img/noticias/' . $noticia->foto_n);
									}


									echo "


									<!-- Grid row -->
									<div class='row'>

									<!-- Grid column -->
									<div class='col-lg-5'>
										<!-- Featured image -->
										<div class='view overlay rounded mb-lg-0 mb-4'>
										<img class='img-fluid rgba-red-light' src='{$imageR}' alt='Sample image'>
										<a href='{$urlShow}'>
										<div class='mask'></div>
										</a>
										</div>

									</div>
									<!-- Grid column -->
									
									<div class='col-lg-7 text-white'>

										<!-- Post title -->
										<h3 class='font-weight-bold mb-3 mt-2'><strong>{$noticia->nombre_n}</strong></h3>
										<!-- Excerpt -->
										<p>{$noticia->descripcion_n}</p>
				
										<!-- Read more button -->
										<a href='{$urlShow}' class='btn btn-primary btn-md'>Leer mas</a>

									</div>
									<!-- Grid column -->

									</div>
									<!-- Grid row -->

									<hr class='my-5'>

									";
								}
							} else {
								echo "
                    <h2 class='text-center white-text'> No se encontraron noticias :(</h2>
                  ";
							}
							echo "
                    <a href='{$noticias}' class='btn btn-primary btn-block'>Ver todos los articulos</a>
                ";
							?>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header ">
								<h3 class="text-center">Articulos en venta</h3>
							</div>
							<div class="content-box-large box-with-header">
								<?php
								$rs = Listado::listadoClasificado();
								$clasificados = base_url('main/clasificados');

								if (is_array($rs)) {
									foreach ($rs as $clasificado) {


										$urlShow = base_url("main/clasificado/{$clasificado->idClasificado}");

										if ($noticia->foto_n === 'noimage.jpg') {
											$imageR = base_url('files/img/static/noimage.jpg');
										} else {
											$imageR = (base_url() . 'files/img/clasificados/' . $clasificado->foto_c);
										}


										echo "
													<div class='row mt-2'>
										<div class='col-xm-4'>
										<a href='{$urlShow}'>
										<img width='96px;' src='{$imageR}' alt='Sample image'>
										</a>
										</div>
										<div class='col-xm-8'>
										<h5 class='text-white'>{$clasificado->nombre_c}</h5>
										</div>
									</div>
									<hr>
									";
									}
								} else {
									echo "
									<h2 class='text-center white-text'> No se encontraron noticias :(</h2>
									";
								}
								echo "
									<a href='{$clasificados}' class='btn btn-primary btn-block mt-2'>Ver todos</a>
								";
								?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header">
								<h3 class="text-center">Proximos eventos</h3>
							</div>
							<div class="content-box-large box-with-header">
								<?php
								$rs = Listado::listadoEvento();
								$evento = base_url('main/eventos');

								if (is_array($rs)) {
									foreach ($rs as $nearEvento) {


										$urlShow = base_url("main/evento/{$nearEvento->id}");
										echo "
											<!-- Small news -->
											<div class='single-news mb-3'>

												<!-- Title -->
												<div class='d-flex justify-content-between text-white'>
													<div class='col-8 text-truncate pl-0 mb-3'>
														<a href='{$urlShow}' class='text-white'>{$nearEvento->title}</a>
													</div>
													<small><b>Fecha: </b>$nearEvento->start</small>
												</div>
												<hr>
											</div>
											<!-- Small news -->
											";
									}
								} else {
									echo "
									<h2 class='text-center white-text'> No se encontraron noticias :(</h2>
									";
								}
								echo "
									<a href='{$evento}' class='btn btn-primary btn-block mt-2'>Ver todos</a>
								";
								?>

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 panel-warning">
					<div class="content-box-header panel-heading">
						<?php
						$rs = Listado::listadoGaleria();
						$galerias = base_url('main/galerias');

						?>

						<a href="<?= $galerias ?>" class="text-white">
							<h3 class="text-center">Galerias</h3>
						</a>
					</div>
					<div class="content-box-large box-with-header">
						<div class="owl-carousel owl-theme">

							<?php

							if (is_array($rs)) {
								foreach ($rs as $galeria) {


									$urlShow = base_url("main/galeria/{$galeria->idGaleria}");
									$imageR = $galeria->foto1_ga;

									echo "
								<div class='item'> <a href='{$urlShow}'><img src='{$imageR}'></a> </div>
								";
								}
							} else {
								echo "
							<h2 class='text-center white-text'> No hay galerias disponibles :(</h2>
							";
							}

							?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>








<script>
	$('.owl-carousel').owlCarousel({
		center: true,
		loop: false,
		margin: 10,
		nav: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 5
			}
		}
	})
</script>
<style>
	.page-content>.row {
		margin-left: 0px !important;
		margin-right: 0px !important;
		margin-top: 30px;
	}



	.content-box-large {
		padding: 20px;
	}



	.content-box-header {
		min-height: 40px;
		font-size: 16px;
		background: #111;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
		padding: 10px;
		color: #fff;
	}
</style>
