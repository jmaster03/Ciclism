<h2 class="text-center mb-4">Clasificados</h2>

<div class="card-body">

	<div class="table-responsive text-wrap card-body">


		<table class="table table-hover text-center" id="dataTable">
			<thead class="black white-text">
				<tr>
					<th scope="col">Foto</th>
					<th scope="col">Articulo</th>
					<th scope="col">Precio</th>
					<th scope="col">Fecha</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>


				<?php

				if (is_array($rs)) {

					foreach ($rs as $clasificado) {

						$urlEdit = base_url("main_admin/showClasificado/{$clasificado->idClasificado}");
						$urlDel = base_url("main_admin/delClasificado/{$clasificado->idClasificado}");

						if ($clasificado->foto_c === 'noimage.jpg') {
							$imageR = base_url('files/img/static/noimage.jpg');
						} else {
							$imageR = (base_url() . 'files/img/clasificados/' . $clasificado->foto_c);
						}

						echo "
			<tr>    
				<td>
					<img src='{$imageR}' alt='thumbnail' style='width:40px;'>
				</td>

				<td>
					{$clasificado->nombre_c}
				</td>

				<td>
					{$clasificado->precio_c}
				</td>

				<td>
					{$clasificado->fecha_agregado}
				</td>

				<td class='inline'>				  
					<a href='{$urlEdit}' class='btn btn-primary px-2'><i class='far fa-eye'></i></a>				  
					<a onclick= \"return confirm('¿Estas seguro de eliminar a {$clasificado->nombre_c}?')\" href='{$urlDel}' class='btn btn-danger px-2'><i class='fas fa-trash-alt'></i></a>
				</td>
			</tr>
		";
					}
				}
				?>
			</tbody>
		</table>
	</div>
</div>
