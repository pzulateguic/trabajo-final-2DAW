@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuración /</span> Crear usuario</h4>
	<div class="row">
		<!-- Basic Layout -->
		
		<div class="col-12">
			<div class="card mb-4">
				<div class="row">

					<div class="card-header d-flex align-items-center justify-content-between col-10">
						<h5 class="mb-0">Nuevo Usuario</h5>
						<small class="text-muted float-end"></small>
					</div>
					<div class="col-2 d-flex align-items-center justify-content-center">
						<a href="/usuarios" class="btn btn-primary">Volver</a>
					</div>

				</div>	

				<div class="card-body">
					<form action="/usuarios" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label" for="basic-default-name">Nombre</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="NOMBRE" name="NOMBRE" placeholder="" maxchars="50" />
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label" for="basic-default-name">Apellido</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="APELLIDO" name="APELLIDO" placeholder="" />
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
							<div class="col-sm-10">
								<div class="input-group input-group-merge">
									<input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-default-email2" id="EMAIL" name="EMAIL" />
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label" for="basic-default-name">Rol</label>
							<div class="col-sm-10">
								<select class="form-select" id="ROL" name="ROL" aria-label="Default select example">
									<option value="1">Administrador</option>
									<option value="2">Técnico</option>
								</select>
							</div>
						</div>
						<!--
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label" for="basic-default-name">Activo</label>
							<div class="col-sm-10">
								<input type="checkbox" id="ACTIVO" name="ACTIVO" checked/>
							</div>
                        </div>
					-->
					
						<div class="row justify-content-end">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>
							
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection