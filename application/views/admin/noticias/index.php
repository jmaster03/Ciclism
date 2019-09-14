<h2 class="text-center mb-4">Noticias <a href="<?php echo base_url('main_admin/nuevaNoticia') ?>" class="btn btn-primary"><i class="fas fa-plus-square"></i> Crear articulo</a>
</h2>

<div class="card-body">

	<div class="table-responsive text-wrap card-body">


		<table class="table table-hover text-center" id="dataTable">
			<thead class="black white-text">
				<tr>
					<th scope="col">Foto</th>
					<th scope="col">Articulo</th>
					<th scope="col">Fecha</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
			
				<?php 

					if (is_array($rs)) {

						foreach ($rs as $noticia) {

							$urlEdit = base_url("main_admin/editNoticia/{$noticia->idNoticia}");
							$urlDel = base_url("main_admin/delNoticia/{$noticia->idNoticia}");

							if ($noticia->foto_n === 'noimage.jpg') {
								$imageR = base_url('files/img/static/noimage.jpg');
							} else {
								$imageR = (base_url() . 'files/img/noticias/' . $noticia->foto_n);
							}

							echo "
								<tr>    
									<td>
										<img src='{$imageR}' alt='thumbnail' style='width:40px;'>
									</td>

									<td>
										{$noticia->nombre_n}
									</td>

									<td>
										{$noticia->fecha_creado}
									</td>

									<td class='inline'>				  
										<a href='{$urlEdit}' class='btn btn-primary px-2'><i class='fas fa-edit'></i></a>				  
										<a onclick= \"return confirm('¿Estas seguro de eliminar a {$noticia->nombre_n}?')\" href='{$urlDel}' class='btn btn-danger px-2'><i class='fas fa-trash-alt'></i></a>
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
