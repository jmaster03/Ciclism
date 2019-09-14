<h2 class="text-center mb-4">Usuarios <a href="<?php echo base_url('main_admin/nuevoUsuario') ?>" class="btn btn-primary"><i class="fas fa-plus-square"></i> Crear usuario</a>
</h2>

<div class="card-body">

	<div class="table-responsive text-wrap card-body">


		<table class="table table-hover text-center" id="dataTable">
			<thead class="black white-text">
				<tr>
					<th scope="col">Foto</th>
					<th scope="col">Nivel</th>
					<th scope="col">cedula</th>
					<th scope="col">Nombre</th>
					<th scope="col">Apellido</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
			
				<?php 

					if (is_array($rs)) {

						foreach ($rs as $usuario) {

							$urlEdit = base_url("main_admin/editUsuario/{$usuario->idUsuario}");
							$urlDel = base_url("main_admin/delUsuario/{$usuario->idUsuario}");

							if ($usuario->foto_U === 'noimage.jpg') {
								$imageR = base_url('files/img/static/noimage.jpg');
							} else { 
								$imageR = (base_url() . 'files/img/usuarios/' . $usuario->foto_U);
							}

							echo "
								<tr>    
									<td>
										<img src='{$imageR}' alt='thumbnail' style='width:40px;'>
									</td>

									<td>
										{$usuario->tipo}
									</td>

									<td>
										{$usuario->cedula}
									</td>

									<td>
										{$usuario->nombre}
									</td>

									<td>
										{$usuario->apellido}
									</td>

									<td class='inline'>				  
										<a href='{$urlEdit}' class='btn btn-primary px-2'><i class='fas fa-edit'></i></a>				  
										<a onclick= \"return confirm('¿Estas seguro de eliminar a {$usuario->nombre}?')\" href='{$urlDel}' class='btn btn-danger px-2'><i class='fas fa-trash-alt'></i></a>
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
