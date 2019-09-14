<h2 class="text-center mb-4">Contactos</h2>

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

							$urlEdit = base_url("main_admin/showContacto/{$contacto->idContacto}");
							$urlDel = base_url("main_admin/delContacto/{$contacto->idContacto}");

		

							echo "
								<tr>    
									<td>
										{$contacto->nombre}
									</td>
									<td>
										{$contacto->correo}
									</td>

									<td>
										{$contacto->fecha}
									</td>

									<td class='inline'>				  
										<a href='{$urlEdit}' class='btn btn-primary px-2'><i class='far fa-comments'></i></a>				  
										<a onclick= \"return confirm('¿Estas seguro de eliminar a {$contacto->nombre}?')\" href='{$urlDel}' class='btn btn-danger px-2'><i class='fas fa-trash-alt'></i></a>
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
