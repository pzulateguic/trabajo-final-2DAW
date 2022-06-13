 @extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Añadir</span> Aplicaciones</h4>
  <div class="row">
    <!-- Basic Layout -->
 <div class="col-xxl"> 
  <div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5 class="mb-0">Nueva aplicacion</h5>
      <small class="text-muted float-end">...</small>
    </div>
    <div class="card-body">
      <form action="/aplicaciones" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="NOMBRE" name="NOMBRE" placeholder="" />
          </div>
        </div>
        <div class="col-4 text-right">
          <a href="/aplicaciones" class="btn btn-sm btn-primary">Volver</a>
        </div>

      <div class="row justify-content-end">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
@endsection -->