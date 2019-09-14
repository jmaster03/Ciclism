<title>BikersRD - <?= $grupo->nombre_g ?></title>



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
	<a href="<?php echo base_url('main/grupos') ?>">
		<h4 class="ml-auto  mt-4 pt-5 text-white "><i class="fas fa-arrow-left"></i></h4>
	</a>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">
					<div class="box-with-header">
						<h3 class="text-center text-white"><?= $grupo->nombre_g ?></h3>
					</div>


					<?php


					if ($grupo->foto_g === 'noimage.jpg') {
						$imageR = base_url('files/img/static/noimage.jpg');
					} else {
						$imageR = $grupo->foto_g;
					}


					if ($grupo->logo_g === 'noimage.jpg') {
						$logog = base_url('files/img/static/noimage.jpg');
					} else {
						$logog = (base_url() . 'files/img/grupos/' . $grupo->logo_g);
					}
					?>

					<div class="panel-body container">
						<!-- Jumbotron -->
						<div class=" text-center ">


							<!-- Card image -->
							<div class="my-4">
								<img src="<?= $imageR ?>" class="img-fluid">

							</div>


							<hr>


						</div>
						<!-- Jumbotron -->




					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header">
								<h3 class="text-center">Detalles</h3>
							</div>
							<div class="content-box-large box-with-header text-white">
								<div class="row">

									<div class="">
										<img src="<?= $logog ?>" alt="" width="85px">
									</div>

									<div class="col text-white text-left">
										<div class="col">
											<a><b>Ubicacion: </b> <?= $grupo->ubicacion_g ?></a>
										</div>

										<div class="col-8">
											<a><b>Descripcion:</b> <?= $grupo->descripcion_g ?></a>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



</div>
