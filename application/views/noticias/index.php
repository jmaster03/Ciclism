<!--<php Layout::setLayout() ?>-->

<title>Bikers RD - Noticias</title>

<h2 class="text-center mt-5 pt-5 text-white">Mantente infomado con las noticias del mundo del Ciclismo</h2>


<style>
	.tWrap{
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
</style>
<div class="container mt-5"> 
	<section class="my-5">
		<?php

	

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
						<div class='view overlay rounded z-depth-2 mb-lg-0 mb-4'>
						<img class='img-fluid rgba-red-light' src='{$imageR}' alt='Sample image'>
						<a href='{$urlShow}'>
							<div class='mask rgba-white-slight'></div>
						</a>
						</div>

					</div>
					<!-- Grid column -->

					
					<div class='col-lg-7 text-white'>

						<!-- Post title -->
						<h3 class='font-weight-bold mb-3 mt-2'><strong>{$noticia->nombre_n}</strong></h3>
						<!-- Excerpt -->
						<p>{$noticia->descripcion_n}</p>
						<!-- Post data -->
						<p>creado por <a><strong>Carine Fox</strong></a>, {$noticia->fecha_creado}</p>

						<!-- Read more button -->
						<a href='{$urlShow}' class='btn btn-primary btn-md'>Leer mas</a>

					</div>
					<!-- Grid column -->

					</div>
					<!-- Grid row -->

					<hr class='my-5'>

				";
			}
		}else{
			echo "
				<h2 class='text-center white-text'> No se encontraron noticias :(</h2>
			";

		}
		?>

	</section>
	<!-- Section: Blog v.1 -->
</div>
