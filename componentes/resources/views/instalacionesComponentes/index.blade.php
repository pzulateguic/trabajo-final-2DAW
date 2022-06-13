@extends('layouts.app')
@section('content')
<script type="text/javascript">
	function confirmarBorrado(id) {
		if (confirm("¿Desea borrar el usuario?"))
			top.location.href = "/instalacionesComponentes/delete/" + id;
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
	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuración /</span>Instalaciones de componentes</h4>
	<!-- Basic Bootstrap Table -->
	<div class="card">
		<div class="row">
			<div class="card-header d-flex align-items-center justify-content-between col-10">
				<h3 class="mb-0 s-6">Instalaciones de componentes</h3>
				<small class="text-muted float-end"></small>
			</div>
		</div>
		
		<form action="/instalacionesComponentes" method="get">
			<div class="row">
				<div class="col-md-3">
					<div class="card-body">
							<label for="NombreB" class="form-label">Clienteb</label>
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
					<div class="card-body">
						
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="card-body">
						<label for="NombreB" class="form-label">Actualizaciones</label>
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
						<div class="card-body "> 
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
						<th>Fecha</th>
						<th>Id</th>
						<th>Cliente</th>
						<th>Actualizacion Componentes</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					@foreach ($instalacionesComponentes as $instalacionescomponentes)
					<tr>
						<td>{{$instalacionescomponentes->created_at}}</td>
						<td>{{$instalacionescomponentes->id}}</td>
						<td>{{$instalacionescomponentes->NombreCliente}}</td>
						<td>{{$instalacionescomponentes->NombreActualizacionComponente}}</td>
						
						
						
						<!-- botones show,edit,delete -->
						<td>
							<div class="dropright">
								<a class="dropright-item" href="/instalacionesComponentes/show/{{$instalacionescomponentes->id}}">
									<i class="bx bx-show-alt me-1"></i></a>
									<a class="dropright-item" href="/instalacionesComponentes/edit/{{$instalacionescomponentes->id}}">
										<i class="bx bx-edit-alt me-1"></i></a>
								<a class="dropright-item" href="javascript:confirmarBorrado({{$instalacionescomponentes->id}})">
									<i class="bx bx-trash me-1"></i></a>

								<a class="dropright-item" onclick="javascript:establecerinstalacionComponentes({{$instalacionescomponentes->id}})" data-bs-toggle="modal" data-bs-target="#basicModal">
								
							</div>
						</td>
						<!-- fin botones s,e,d -->
						
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-10">
			</div>
			<!-- Boton de crear Actualizaciones de componentes -->
			<div class="col-2 d-flex align-items-center justify-content-center">
				<a href="/instalacionesComponentes/create" class="btn btn-primary m-2">Añadir</a>
			</div>
			<!--Fin boton de crear Actualizaciones de componentes -->
		</div>
	</div>

</div>
<div class="text-center m-1">
	{{$instalacionesComponentes->links()}}
</div>
@endsection