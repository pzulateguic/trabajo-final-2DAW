@extends('layouts.app')
@section('content')
<script type="text/javascript">
	function confirmarBorrado(id) {
		if (confirm("¿Desea borrar el usuario?"))
			top.location.href = "/usuarios/delete/" + id;
	}

	function establecerusuario(id) {
		$("#ID").val(id);
		alert($("#ID").val());
	}

	function comprobarClave() {
		if ($("#password").val() == $("#cpassword").val()) {
			return true;
		} else {
			alert("Contraseña incorrecta")
			return false;
		}
	}
</script>

<!-- Basic Bootstrap Table -->
<div class="card">
	<div class="container-xxl flex-grow-1 container-p-y ">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuración /</span> Usuarios</h4>

		<div class="col">
			<div class="card shadow">
				<div class="row">
					<div class="card-header d-flex align-items-center justify-content-between col-10">
						<h3 class="mb-0 s-6">Mostrar usuario</h3>
						<small class="text-muted float-end"></small>
					</div>
					<!-- Boton de crear usuarios -->
					<div class="col-2 d-flex align-items-center justify-content-center">
						<a href="/usuarios/create" class="btn btn-primary">Crear usuario</a>
					</div>
					<!--Fin boton de crear usuarios -->
				</div>

				<div class="table-responsive text-nowrap ">

					<table class="table">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nombre</th>
								<th>Email</th>
								<th>Rol</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody class="table-border-bottom-0">
							@foreach ($usuarios as $usuario)
							<tr>
								<td>{{$usuario->id}}</td>
								<td>{{$usuario->name}}</td>
								<td>{{$usuario->email}}</td>
								<td>
									@if ($usuario->Rol == 1)
									Administrador
									@else
									Técnico
									@endif
								</td>



								<td>
									<div class="dropright">
										<a class="dropright-item" href="/usuarios/show/{{$usuario->id}}">
											<i class="bx bx-show-alt me-1"></i></a>
										<a class="dropright-item" href="/usuarios/edit/{{$usuario->id}}">
											<i class="bx bx-edit-alt me-1"></i></a>
										<a class="dropright-item" href="javascript:confirmarBorrado({{$usuario->id}})">
											<i class="bx bx-trash me-1"></i></a>

										<a class="dropright-item" onclick="javascript:establecerusuario({{$usuario->id}})" data-bs-toggle="modal" data-bs-target="#basicModal">
											<i class="bi bi-key"></i></a>
									</div>
								</td>
							</tr>
							@endforeach
							<!-- Modal -->
							<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">

										<!-- modal para cambiar contraseña -->
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel1">Cambio de contraseña</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<form action="/storepass" id="formulario" method="POST">
												<input type="hidden" name="_token" value="{{ csrf_token() }}" />
												<input type="hidden" id="ID" name="ID" />


												<div class="row g-2">
													<div class="col mb-0">
														<label for="emailBasic" class="form-label">Contraseña nueva</label>
														<input type="password" id="password" name="password" class="form-control" placeholder="***********" />
													</div>
													<div class="col mb-0">
														<label for="dobBasic" class="form-label">Repetir contraseña</label>
														<input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="***********" />
													</div>
												</div>

										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
												Cerrar
											</button>
											<button type="submit" onclick=" javascript:return comprobarClave()" class="btn btn-primary">Salvar cambios</button>
										</div>
										</form>
									</div>
								</div>
							</div>
						</tbody>
					</table>
				</div>
			</div>

		</div>
		<div class="text-center">
			{{$usuarios->links()}}
		</div>
		@endsection