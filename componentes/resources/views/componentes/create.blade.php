@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuración /</span> Crear componente</h4>
	<div class="row">
		<!-- Basic Layout -->

		<div class="col-12">
			<div class="card mb-4">
				<div class="row">

					<div class="card-header d-flex align-items-center justify-content-between col-10">
						<h5 class="mb-0">Nuevo Componente</h5>
						<small class="text-muted float-end"></small>
					</div>
					<!-- boton volver -->
					<div class="col-2 d-flex align-items-center justify-content-center">
						<a href="/componentes" class="btn btn-primary">Volver</a>
					</div>
					<!-- finboton -->
				</div>
					<!-- FORMULARIO PARA CREAR COMPONENTE -->
				<div class="card-body">
					<form action="/componentes" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}" />
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label" for="basic-default-name">Nombre del componente</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="NOMBRE" name="NOMBRE" placeholder="" maxchars="50" />
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label" for="basic-default-name">idaplicacion</label>
							<div class="col-sm-10">
								<select class="form-select" id="aplicacion" name="aplicacion">
									<option selected disabled>--Seleccionar una aplicación--</option>
									@foreach ($aplicaciones as $aplicacion)
									<option value="{{$aplicacion->id}}">{{$aplicacion->Nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<!-- campo observaciones -->
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label"  for="basic-default-name">Observaciones</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="observaciones"  name="observaciones" placeholder=""></textarea>
							</div>
						</div>
					<!-- boton guardar -->
						<div class="row justify-content-end">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>
						</div>
					<!-- fin boton -->
					</form>
					<!--FIN DEL FORMULARIO PARA CREAR COMPONENTE -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
