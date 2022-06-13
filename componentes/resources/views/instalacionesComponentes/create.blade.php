@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Instalaciones de componentes</span> </h4>
	<div class="row">
		<!-- Basic Layout -->
		<div class="col-4 text-right">
			<a href="/instalacionesComponentes" class="btn btn-sm btn-primary">Volver</a>
		</div>
		<div class="col-xxl">
			<!-- FORMULARIO PARA CREAR INSTALACIONES DE COMPONENTE -->
			<div class="card-body">
				<form action="/instalacionesComponentes" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-default-name">idcliente</label>
						<div class="col-sm-10"> 
							<select class="form-select" id="idcliente" name="idcliente">
								<option selected disabled>--Seleccionar un cliente--</option>
								@foreach ($clientes as $cliente)
								<option value="{{$cliente->id}}">{{$cliente->Nombre}}</option>
								@endforeach
							</select>
						</div>
						
					</div>
					
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-default-name">Actualizaciones Componentes</label>
						<div class="col-sm-10"> 
							<select class="form-select" id="idactualizacioncomponente" name="idactualizacioncomponente">
								<option selected disabled>--Seleccionar una actualizacion--</option>
								@foreach ($actualizacionesComponentes as $actualizacionComponente)
								<option value="{{$actualizacionComponente->id}}">{{$actualizacionComponente->Nombre}}</option>
								@endforeach
							</select>
						</div>
						
					</div>
					<!-- boton guardar -->
					
						<!-- campo observaciones -->
						<div class="row mb-3">
							<label class="col-sm-2 col-form-label"  for="basic-default-name">Observaciones</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="observaciones"  name="observaciones" placeholder=""></textarea>
							</div>
						</div>

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