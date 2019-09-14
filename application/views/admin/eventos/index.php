<h2 class="text-center mb-4">Eventos<a href="<?php echo base_url('main_admin/nuevoEvento') ?>" class="btn btn-primary"><i class="fas fa-plus-square"></i>Crear evento</a>
</h2>

<div class="card-body">

	<div class="table-responsive text-wrap card-body">


		<table class="table table-hover text-center" id="dataTable">
			<thead class="black white-text">
				<tr>
					<th scope="col">Foto</th>
					<th scope="col">Titulo</th>
					<th scope="col">Fecha inicio</th>
					<th scope="col">Fecha de cierre</th>
					<th scope="col">Organizador</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>

				<?php

				if (is_array($rs)) {

					foreach ($rs as $evento) {

						$urlEdit = base_url("main_admin/editEvento/{$evento->id}");
						$urlDel = base_url("main_admin/delEvento/{$evento->id}");

						if ($evento->foto_g === 'noimage.jpg') {
							$imageR = base_url('files/img/static/noimage.jpg');
						} else {
							$imageR = $evento->foto_g;
						}

						echo "
								<tr>    
									<td>
										<img src='{$imageR}' alt='thumbnail' style='width:40px;'>
									</td>

									<td>
										{$evento->title}
									</td>

									<td>
										{$evento->start}
									</td>

									<td>
										{$evento->end}
									</td>

									<td>
										{$evento->nombre_g}
									</td>

									<td class='inline'>				  
										<a href='{$urlEdit}' class='btn btn-primary px-2'><i class='fas fa-edit'></i></a>				  
										<a onclick= \"return confirm('¿Estas seguro de eliminar a {$evento->title}?')\" href='{$urlDel}' class='btn btn-danger px-2'><i class='fas fa-trash-alt'></i></a>
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
