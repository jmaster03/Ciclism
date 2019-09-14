<h2 class="text-center mb-4">Galerias <a href="<?php echo base_url('main_admin/nuevaGaleria') ?>" class="btn btn-primary"><i class="fas fa-plus-square"></i> Nueva </a>
</h2>

<div class="card-body">

	<div class="table-responsive text-wrap card-body">


		<table class="table table-hover text-center" id="dataTable">
			<thead class="black white-text">
				<tr>
					<th scope="col">Foto</th>
					<th scope="col">Nombre</th>
					<th scope="col">Fecha</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
			
				<?php 

					if (is_array($rs)) {

						foreach ($rs as $galeria) {

							$urlEdit = base_url("main_admin/editGaleria/{$galeria->idGaleria}");
							$urlDel = base_url("main_admin/delGaleria/{$galeria->idGaleria}");

							if ($galeria->foto1_ga === '') {
								$imageR = base_url('files/img/static/noimage.jpg');
							} else {
								$imageR =  $galeria->foto1_ga;
							}

							echo "
								<tr>    
									<td>
										<img src='{$imageR}' alt='thumbnail' style='width:40px;'>
									</td>

									<td>
										{$galeria->nombre_ga}
									</td>

									<td>
										{$galeria->fecha_creado}
									</td>

									<td class='inline'>				  
										<a href='{$urlEdit}' class='btn btn-primary px-2'><i class='fas fa-edit'></i></a>				  
										<a onclick= \"return confirm('¿Estas seguro de eliminar a {$galeria->nombre_ga}?')\" href='{$urlDel}' class='btn btn-danger px-2'><i class='fas fa-trash-alt'></i></a>
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
