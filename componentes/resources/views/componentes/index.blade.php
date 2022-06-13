@extends('layouts.app')
@section('content')
<script type="text/javascript">
	function confirmarBorrado(id) {
		if (confirm("¿Desea borrar el componentes?"))
			top.location.href = "/componentes/delete/" + id;
	}


	function getComponente() {
		var direccion = '/ajaxCli/' + $("#IDCOMPONENTE").val();

		console.log(direccion);

		$.ajax({
			url: direccion
		}).done(function(data) {
			if (data.trim() != "") {
				$("#NOMBRECOMPONENTE").val(data);
			} else {
				alert("No existe ningún componente con ese código");
				$("#IDCOMPONENTE").val("");
				$("#NOMBRECOMPONENTE").val("");
			}
		});
	}
</script>

<div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuración /</span> Componentes</h4>

	<!-- Modal -->

	<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">COMPONENTES</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body ">ID<input type="text" name="IDCOMPONENTE" id="IDCOMPONENTE" />
					<input type="text" name="NOMBRECOMPONENTE" id="NOMBRECOMPONENTE" disabled />
					<div class="modal-footer">
						<button type="submit" id="btnGuardar" class="btn btn-success " onclick="javascript:getComponente()"><i class="bi bi-upload">
							</i> CONSULTAR COMPONENTE</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Basic Bootstrap Table -->
	<div class="card">
		<div class="row">
			<div class="card-header col-10">
				<a href='/componentes/create' class="btn btn-primary ml-auto">Añadir componentes</a>
			</div>

			<!-- boton modal -->
			<div class="card-header col-2">
				<button class="btn btn-primary ml-auto" data-bs-toggle="modal" data-bs-target="#basicModal">Buscador</button>
			</div>
		</div>
		<div class="table-responsive text-nowrap col-12">

			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Componente</th>
						<th>Aplicacion</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					@foreach ($componentes as $componente)
					<tr>
						<td>{{$componente->id}}</td>
						<td>{{$componente->Nombre}}</td>
						<td>{{$componente->NombreAplicacion}}</td>


						<td>
							<div class="dropright">
								<a class="dropright-item" href="/componentes/show/{{$componente->id}}">
									<i class="bx bx-show-alt me-1"></i></a>
								<a class="dropright-item" href="/componentes/edit/{{$componente->id}}">
									<i class="bx bx-edit-alt me-1"></i> </a>
								<a class="dropright-item" onclick="javascript:confirmarBorrado({{$componente->id}})">
									<i class="bx bx-trash me-1"></i> </a>
							</div>
						</td>
					</tr>

					@endforeach
				</tbody>
			</table>
			<!-- paginador -->
			<div class="text-center">
				{{$componentes->links()}}
			</div>
		</div>
	</div>
	<!--/ Basic Bootstrap Table -->



</div>
@endsection