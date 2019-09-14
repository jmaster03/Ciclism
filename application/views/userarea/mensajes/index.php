<h2 class="text-center mb-4">Mensajes</h2>

<div class="card-body">

	<div class="table-responsive text-wrap card-body">


		<table class="table table-hover text-center" id="dataTable">
			<thead class="black white-text">
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Correo</th>
					<th scope="col">Fecha</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
			
				<?php 

					if (is_array($rs)) {

						foreach ($rs as $contacto) {

							$urlEdit = base_url("main_usuario/showContacto/{$contacto->Id_mensaje}");
							$urlDel = base_url("main_usuario/delContacto/{$contacto->Id_mensaje}");

		

							echo "
								<tr>    
									<td>
										{$contacto->nombre_mensaje}
									</td>
									<td>
										{$contacto->correo_mensaje}
									</td>

									<td>
										{$contacto->fecha_mensaje}
									</td>

									<td class='inline'>				  
										<a href='{$urlEdit}' class='btn btn-primary px-2'><i class='far fa-comments'></i></a>				  
										<a onclick= \"return confirm('¿Estas seguro de eliminar a {$contacto->nombre_mensaje}?')\" href='{$urlDel}' class='btn btn-danger px-2'><i class='fas fa-trash-alt'></i></a>
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
