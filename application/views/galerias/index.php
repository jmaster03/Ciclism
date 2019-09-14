<title>BikersRD Galerias</title>

<h2 class="text-center mt-5 pt-5 mb-4 text-white">Álbumes con las fotos mas importantes de nuestras actividades</h2>



<div class="container">

<div class='row mb-2 mt-4'>
	<?php

	if (is_array($rs)) {
		foreach ($rs as $galeria) {


			$urlShow = base_url("main/galeria/{$galeria->idGaleria}");

			if ($galeria->foto1_ga === 'noimage.jpg') {
				$imageR = base_url('files/img/static/noimage.jpg');
			} else {
				$imageR = (base_url() . 'files/img/galerias/' . $galeria->foto1_ga);
			}


			echo "
   
  
				   <!-- Grid column -->
					 <div class='col-lg-3 col-md-6 mb-lg-0 mb-4'>
            <!-- Card -->
            <div class='card align-items-center mb-4 bg-dark'>
                <!-- Card image -->
                <div class='view overlay'>
                    <img width='80px' height='150px' class='card-img-top' src='{$galeria->foto1_ga}'
                        alt='{$galeria->nombre_ga}'>
                    <a href='{$urlShow}'>
                        <div class='mask rgba-white-slight'></div>
                    </a>
                </div>
                <!-- Card image -->
                <!-- Card content -->
                <div class='card-body text-center'>
                    <!-- Category & Title -->
                    <a href='{$urlShow}' class='grey-text'>
                        <h5>{$galeria->nombre_ga}</h5>
										</a>
										<small class='text-white'><i class='far fa-calendar-alt'></i> {$galeria->fecha_creado}</small>
                </div>
                <!-- Card content -->
            </div>
            <!-- Card -->
        </div>
        <!-- Grid column -->
   
		";
		}
	} else {
		echo "
		<h2 class='text-center white-text'> No se encontraron noticias :(</h2>
	";
	}
	?>
	 </div>
</div>
