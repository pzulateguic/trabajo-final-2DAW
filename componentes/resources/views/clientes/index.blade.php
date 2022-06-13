@extends('layouts.app')
@section('content')
<script type="text/javascript">
	function confirmarBorrado(id) {
		if (confirm("¿Desea borrar el cliente?"))
			top.location.href = "/clientes/delete/" + id;
	}
</script>
<div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuración /</span> Clientes</h4>


	

	<!-- Basic Bootstrap Table -->
	<div class="card">
		<div class="row">

			<div class="card-header d-flex align-items-center justify-content-between col-10">
			<h3 class="mb-0 s-6">Listado de clientes</h3>
				<small class="text-muted float-end"></small>
			</div>
			<div class="col-2 d-flex align-items-center justify-content-center">
				<a href="/clientes/create" class="btn btn-primary">Crear cliente</a>
			</div>

		</div>

		<div class="table-responsive text-nowrap">
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre y apellidos</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					@foreach ($clientes as $cliente)
					<tr>
						<td>{{$cliente->id}}</td>
						<td>{{$cliente->Nombre}}</td>


						<td class="col-1">
							<div class="dropright">
								<a class="dropright-item" href="/clientes/show/{{$cliente->id}}">
									<i class="bx bx-show-alt me-1"></i></a>
								<a class="dropright-item" href="/clientes/edit/{{$cliente->id}}">
									<i class="bx bx-edit-alt me-1"></i> </a>
								<a class="dropright-item" href="javascript:confirmarBorrado({{$cliente->id}})">
									<i class="bx bx-trash me-1"></i> </a>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{{$clientes->links()}}
			</div>
		</div>
	</div>
	<!--/ Basic Bootstrap Table -->
</div>
@endsection