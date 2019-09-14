<!--<php Layout::setLayout() ?>-->

<title>Bikers RD - Grupos</title>

<h2 class="text-center mt-5 pt-5 text-white">Ve dentro de nuestro catalogo de grupos y enterate de sus locaciones y como unirte!</h2>


<div class="container mt-5"> 
	<!-- Section: Blog v.1 -->
	<section class="my-5">
	<div class="row">
		
		<?php

	

		if (is_array($rs)) {
			foreach ($rs as $grupo) {

				
				$urlShow = base_url("main/grupo/{$grupo->idGrupo}");
				$imageR = (base_url().'files/img/grupos/'.$grupo->logo_g); 
				
				echo "

				<div class='col mb-4'>
				<div class='card' style='width: 18rem;'>
				<a href='{$urlShow}'>
				<img src='{$imageR}' class='card-img-top' alt='{$grupo->nombre_g}'></a>
				<div class='card-body bg-dark'>
					<h6 class='card-text text-white'>{$grupo->nombre_g}</h6>
				</div>
				</div>
				
			

				</div>
				";
			}
		}else{
			echo "
				<h2 class='text-center white-text'> No se encontraron grupo :(</h2>
			";

		}
		?>
</div>
	</section>
</div>


