<!--<php Layout::setLayout(); ?>-->

<title>BikersRD - <?= $clasificado->nombre_c ?></title>

<h2 class="text-center  mt-4 pt-5 text-white "><?=$clasificado->nombre_c?></h2>


<div class="text-center container mb-4">
	<img src="<?php echo (base_url().'files/img/clasificados/'.$clasificado->foto_c); ?>" class="img-fluid" alt="Responsive image">
</div>


<div class="container mb-4 text-white">
	<?= $clasificado->body_c ?>
</div>


<hr>
	<h3 class="text-center text-white">Detalles</h3>
	<div class="container">
		<p class="text-white"><strong> <b> Vendedor:</b> </strong><?= $clasificado->nombre?></p>
		<p class="text-white"><strong> <b>Precio </b> </strong><i class="fas fa-dollar-sign"><?= $clasificado->precio_c?></i></p>
		<p class="text-white"><strong> <b> Publicado el:</b> </strong><?= $clasificado->fecha_agregado?></p>
	</div>
<hr>

<hr>

<div class="container">

	<form class="text-center p-4" method="POST" action="<?php echo base_url('main/contactUser') ?>">
	<h3 class="text-center text-white">Contacta al vendedor</h3>

		<!-- Name -->
		<input type="text" id="" name="nombre_mensaje" class="form-control mb-4" placeholder="Nombre">

		<!-- Email -->
		<input type="email" id="correo" name="correo_mensaje" class="form-control mb-4" placeholder="Correo">


		<!-- Message -->
		<div class="form-group">
			<textarea class="form-control rounded-0" id="comentario_mensaje" name="comentario_mensaje" rows="3" placeholder="Preguntale acerca del articulo"></textarea>
		</div>
		<input type="text" name="clasificado_mensaje" value="<?= $clasificado->idClasificado?>">



		<!-- Send button -->
		<button class="btn btn-primary btn-block" type="submit">Enviar</button>

	</form>
	<!-- Default form contact -->
</div>

<hr>
