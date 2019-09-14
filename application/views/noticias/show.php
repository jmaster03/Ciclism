<!--<php Layout::setLayout(); ?>-->

<title>BikersRD - <?= $noticia->nombre_n ?></title>

<h2 class="text-center  mt-4 pt-5 text-white "><?=$noticia->nombre_n?></h2>


<div class="text-center container-fluid mb-4">
	<img src="<?php echo (base_url().'files/img/noticias/'.$noticia->foto_n); ?>" class="img-fluid" alt="Responsive image">
</div>


<div class="container mb-4 text-white">
	<?= $noticia->body_n ?>
</div>


<hr>
	<div class="container">
		<p class="text-white"><strong> <b> Publicado el:</b> </strong><?= $noticia->fecha_creado?></p>
	</div>
<hr>


<hr>
