<title>BikersRD - <?= $evento->title ?></title>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />


<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>



<style>
	#mapid {
		margin: auto;
		width: 500px;
		height: 300px;
	}

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


<div class="page-content container-fluid">
	<a href="<?php echo base_url('main/eventos') ?>">
		<h4 class="ml-auto  mt-4 pt-5 text-white "><i class="fas fa-arrow-left"></i></h4>
	</a>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
					<div class="box-with-header">
						<h3 class="text-center text-white"><?= $evento->title ?></h3>
					</div>


					<?php

						
						if ($evento->foto_g === 'noimage.jpg') {
							$imageR = base_url('files/img/static/noimage.jpg');
						} else {
							$imageR = $evento->foto_g;
						}


						if($evento->logo_g === 'noimage.jpg'){
							$logog = base_url('files/img/static/noimage.jpg');
						}else{
							$logog = (base_url() . 'files/img/grupos/' . $evento->logo_g);

						}
					?>

					<div class="panel-body container">
						<!-- Jumbotron -->
						<div class=" text-center ">


							<!-- Card image -->
							<div class="my-4">
								<img src="<?=$imageR?>" class="img-fluid" >

							</div>


							<hr>
							<h5 class="text-white">Detalles</h5>
							<div class="row">

								<div class="col-4">
									<img src="<?= $logog?>" alt="" width="85px">
								</div>

								<div class="col text-white text-left">
									<div class="col">
										<a><b>Fecha: </b> <?= $evento->start ?> <b>to</b> <?= $evento->end ?></a>
									</div>

									<div class="col">
										<a><b>Hora: </b> <?= $evento->h_inicio?> <b>to</b> <?= $evento->h_fin ?></a>
									</div>

									<div class="col ">
										<a><b>Organizado por: </b> <?= $evento->nombre_g ?></a>
									</div>

									<div class="col">
										<a><b>Telefono: </b> <?= $evento->nombre_g ?></a>
									</div>
								</div>
								
							</div>

						</div>
						<!-- Jumbotron -->




					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header">
								<h3 class="text-center">Proximos eventos</h3>
							</div>
							<div class="content-box-large box-with-header text-white">

							<?php
								$rs = Listado::listadoEvento();
								$eventoL = base_url('main/eventos');

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
									<a href='{$eventoL}' class='btn btn-primary btn-block mt-2'>Ver todos</a>
								";
								?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<h3 class="py-2 text-center text-white">Ubicacion</h3>


	<div id="mapid" class="mb-4"></div>

</div>


<script>
	var lati = <?= $evento->lat?>;
	var lngd = <?= $evento->lng?>;

	console.log(lati);

	var mymap = L.map('mapid').setView([lati, lngd], 13);

	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
		id: 'mapbox.streets',
	}).addTo(mymap);

	

	var marker = L.marker([lati, lngd]).addTo(mymap);


</script>
