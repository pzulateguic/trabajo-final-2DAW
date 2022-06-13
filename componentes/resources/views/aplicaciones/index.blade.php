@extends('layouts.app')
@section('content')
<script type="text/javascript">
	function confirmarBorrado(id) {
		if (confirm("¿Desea borrar el aplicaciones?"))
			top.location.href = "/aplicaciones/delete/" + id;
	}
</script>

 <div class="container-xxl flex-grow-1 container-p-y">
	<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuración /</span> Aplicaciones</h4> 

	<!-- Basic Bootstrap Table -->
<div class="card">
	
	<div class="row">
                <div class="card-header d-flex align-items-center justify-content-between col-9">
                    <h5 class="mb-0">Aplicaciones</h5>
                    <small class="text-muted float-end"></small>
                </div>
                <div class="col-3 d-flex align-items-center justify-content-center">
                    <a href="/aplicaciones/create" class="btn btn-primary">Añadir aplicación</a>
                </div>
            </div>

	@if(session('error'))
		<div class="alert alert-danger">{{session('error')}}</div>
	@endif

	<div class="table-responsive text-nowrap ">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Aplicación</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				@foreach ($aplicaciones as $aplicacion)
				<tr>
					<td>{{$aplicacion->id}}</td>
					<td>{{$aplicacion->Nombre}}</td>

					<td class="col-2">
						<div class="dropright">
							<a class="dropright-item" href="/aplicaciones/show/{{$aplicacion->id}}">
								<i class="bx bx-show-alt me-1"></i> </a>
							<a class="dropright-item" href="/aplicaciones/edit/{{$aplicacion->id}}">
								<i class="bx bx-edit-alt me-1"></i> </a>
							<a class="dropright-item" onclick="javascript:confirmarBorrado({{$aplicacion->id}})">
								<i class="bx bx-trash me-1"></i> </a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<!--/ Basic Bootstrap Table -->
</div>

<!--/ Basic Bootstrap Table -->
<div class="text-center">
	{{$aplicaciones->links()}}
</div>
</div>
@endsection 