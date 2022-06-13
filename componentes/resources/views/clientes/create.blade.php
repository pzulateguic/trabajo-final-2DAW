@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuracion / </span>Crear cliente</h4>
  <div class="row">
    <!-- Basic Layout -->
    
    <!--Añadir cliente-->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="row">
					<div class="card-header d-flex align-items-center justify-content-between col-10">
						<h3 class="mb-0 s-6">Nuevo cliente</h3>
						<small class="text-muted float-end"></small>
					</div>
					<!-- Boton de volver a clientes -->
					<div class="col-2 d-flex align-items-center justify-content-center">
						<a href="/clientes" class="btn btn-primary">Volver</a>
					</div>
					<!--Fin boton de crear usuarios -->
				</div>
        <div class="card-body">
          <form action="/clientes" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="row mb-3">
              <label class="col-sm-1 col-form-label" for="basic-default-name">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="NOMBRE" name="NOMBRE" placeholder="" />
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