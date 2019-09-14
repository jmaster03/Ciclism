<h2 class="text-center mb-4">Grupos <a href="<?php echo base_url('main_admin/nuevoGrupo') ?>" class="btn btn-primary"><i class="fas fa-plus-square"></i> Crear grupo</a>
</h2>

<div class="card-body">

	<div class="table-responsive text-wrap card-body">


		<table class="table table-hover text-center" id="dataTable">
			<thead class="black white-text">
				<tr>
					<th scope="col">Logo</th>
					<th scope="col">Nombre</th>
					<th scope="col">Ubicacion</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
			
				<?php

					if (is_array($rs)) {

						foreach ($rs as $grupo) {

							$urlEdit = base_url("main_admin/editGrupo/{$grupo->idGrupo}");
							$urlDel = base_url("main_admin/delGrupo/{$grupo->idGrupo}");

							if ($grupo->logo_g === 'noimage.jpg') {
								$imageR = base_url('files/img/static/noimage.jpg');
							} else {
								$imageR = (base_url() . 'files/img/grupos/' . $grupo->logo_g);
							}

							echo "
								<tr>    
									<td>
										<img src='{$imageR}' alt='thumbnail' style='width:40px;'>
									</td>

									<td>
										{$grupo->nombre_g}
									</td>

									<td>
										{$grupo->ubicacion_g}
									</td>

									<td class='inline'>				  
										<a href='{$urlEdit}' class='btn btn-primary px-2'><i class='fas fa-edit'></i></a>				  
										<a onclick= \"return confirm('¿Estas seguro de eliminar a {$grupo->nombre_g}?')\" href='{$urlDel}' class='btn btn-danger px-2'><i class='fas fa-trash-alt'></i></a>
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
