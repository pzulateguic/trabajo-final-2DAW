@extends('layouts.app')
@section('content')
<script type="text/javascript">
	function confirmarBorrado(id) {
		if (confirm("¿Desea borrar el usuario?"))
			top.location.href = "/actualizacionesComponentes/delete/" + id;
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
<div class="container-xxl flex-grow-1 container-p-y ">
	<h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Configuración /</span> Actualizaciones de componentes</h4>
	<!-- Basic Bootstrap Table -->
	<div class="card">
		<div class="row">
			<div class="card-header d-flex align-items-center justify-content-between col-10">
				<h4 class="mb-0 s-6">Actualizaciones de componentes</h4>
				<small class="text-muted float-end"></small>
			</div>
		</div>
		<!-- filtros de busqueda -->
		<form action="/actualizacionesComponentes" method="get">
			<div class="row">
				<div class="col-md-3">
					<div class="card-body">
							<label for="NombreB" class="form-label">Cliente</label>
							<input type="text" class="form-control" id="NombreB" name="NombreB"/>
					</div>
				</div>
				<!-- <div class="col-md-3">
					<div>
						<div class="card-body">
							<label for="NombreB" class="form-label">Aplicaciónc</label>
							<input type="text" class="form-control" id="NombreC" name="NombreC" />
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card-body">
						<label for="NombreB" class="form-label">Componented</label>
						<input type="text" class="form-control" id="NombreD" name="NombreD" />
					</div>
				</div>
				<div class="col-md-3">
					
				</div>
			<div class="row">
				<div class="col-md-3">
					<div class="card-body">
						<label for="NombreB" class="form-label">Actualizacione</label>
						<input type="text" class="form-control" id="NombreE" name="NombreE" />
					</div>
				</div>
				<div class="col-md-3">
					<div class="card-body">
						<label for="NombreB" class="form-label">Fecha instalacion desde</label>
						<input type="text" class="form-control" id="NombreF" name="NombreF" />
					</div>
				</div>
				<div class="col-md-3">
					<div class="card-body">
						<label for="NombreB" class="form-label">Fecha instalacion hasta</label>
						<input type="text" class="form-control" id="NombreG" name="NombreG" />
					</div>
				</div> -->
				<div class="col-md-3">
					<div class="">
						<div class="card-body"> 
							<div>
								<button type="submit" class="btn btn-success ml-4 btn-lb mt-4 ">Filtrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>


		<div class="table-responsive text-nowrap">

			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Fecha</th>
						<th>Ultima actualizacion</th>
						<th>Componente</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					@foreach ($actualizacionesComponentes as $componentes)
					<tr>
						<td>{{$componentes->id}}</td>
						<td>{{$componentes->Nombre}}</td>
						<td>{{$componentes->created_at}}</td>
						<td>{{$componentes->updated_at}}</td>
						<td>{{$componentes->NombreComponente}}</td>

						<td>
							<div class="dropright">
								<a class="dropright-item" href="/actualizacionesComponentes/show/{{$componentes->id}}">
									<i class="bx bx-show-alt me-1"></i></a>
								<a class="dropright-item" href="/actualizacionesComponentes/edit/{{$componentes->id}}">
									<i class="bx bx-edit-alt me-1"></i></a>
								<a class="dropright-item" href="javascript:confirmarBorrado({{$componentes->id}})">
									<i class="bx bx-trash me-1"></i></a>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="text-center mr-4">
			{{$actualizacionesComponentes->appends('NombreB')->links()}}
		</div>

		<!-- Boton de crear Actualizaciones de componentes -->
		<div class="row">
			<div class="col-10">
			</div>
			<div class="col-2 d-flex align-items-center justify-content-center">
				<a href="/actualizacionesComponentes/create" class="btn btn-primary m-2">Añadir</a>
			</div>
			<!--Fin boton de crear Actualizaciones de componentes -->
		</div>
	</div>

</div>
@endsection