<title>BikersRD - <?= $galeria->nombre_ga ?></title>

<h2 class="text-center  mt-4 pt-5 text-white "><?= $galeria->nombre_ga ?></h2>




<div class="container  py-5">
	<ul class="galeria">
		<li class="galeria__item"><img src="<?= $galeria->foto1_ga ?>" class="galeria__img"></li>
		<li class="galeria__item"><img src="<?= $galeria->foto2_ga ?>" class="galeria__img"></li>
		<li class="galeria__item"><img src="<?= $galeria->foto3_ga ?>" class="galeria__img"></li>
		<li class="galeria__item"><img src="<?= $galeria->foto4_ga ?>" class="galeria__img"></li>
		<li class="galeria__item"><img src="<?= $galeria->foto5_ga ?>" class="galeria__img"></li>
		<li class="galeria__item"><img src="<?= $galeria->foto6_ga ?>" class="galeria__img"></li>
		<li class="galeria__item"><img src="<?= $galeria->foto7_ga ?>" class="galeria__img"></li>
		<li class="galeria__item"><img src="<?= $galeria->foto8_ga ?>" class="galeria__img"></li>
	</ul>
</div>


<hr>
<div class="container">
	<p class="text-white"><b>Fecha:</b> <?= $galeria->fecha_creado ?></p>

	<p class="text-white"><b>Autor:</b> <?= $galeria->nombre ?></p>
</div>
<hr>


<style>
	* {
		box-sizing: border-box;
		list-style: none
	}


	img {
		display: block;
		max-width: 100%;
	}

	.galeria {
		padding: 20px;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
	}

	.galeria__item {
		width: 80%;
		cursor: pointer;
	}

	@media (min-width:480px) {
		.galeria__item {
			width: 48%;
			margin: 5px;
		}
	}

	@media (min-width:768px) {
		.galeria__item {
			width: 30%;
		}
	}

	@media (min-width:1024px) {
		.galeria__item {
			width: 20%;
			margin: 15px;
		}
	}

	.modal {
		position: fixed;
		width: 100%;
		height: 100vh;
		background: rgba(0, 0, 0, 0.7);
		top: 0;
		left: 0;

		display: flex;
		justify-content: center;
		align-items: center;
	}

	.modal__img {
		width: 70%;
		max-width: 700px;
	}

	.modal__boton {
		width: 50px;
		height: 50px;
		color: #fff;
		font-weight: bold;
		font-size: 25px;
		font-family: monospace;
		line-height: 50px;
		text-align: center;
		background: red;
		border-radius: 50%;
		cursor: pointer;

		position: absolute;
		right: 10px;
		top: 10px;
	}
</style>


<script>
	$('.galeria__img').click(function(e) {
		var img = e.target.src;
		var modal = '<div class="modal" id="modal"><img src="' + img + '" class="modal__img"><div class="modal__boton" id="modal__boton">X</div></div>';
		$('body').append(modal);
		$('#modal__boton').click(function() {
			$('#modal').remove();
		})
	});


	$(document).keyup(function(e) {
		if (e.which == 27) {
			$('#modal').remove();
		}
	})
</script>
