@extends('layouts.app')

@section('content')
<script type='text/javascript'>
    function clickButton() {
        if (confirm("¿Desea continuar?")) {
            alert("Confirmado");
        } else {
            alert("No confirmado");
        }
    }
</script>
<div class="main-content">

    <div class="container-fluid mt--7">
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <h3 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuración /</span>Editar cliente</h3>
            </div>
        </div>

        <div class="card mb-4">
            <div class="row">
                <div class="card-header d-flex align-items-center justify-content-between col-10">
                    <h3 class="mb-0 s-6">Editar cliente</h3>
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
                    <input type="hidden" id="ID" name="ID" value="{{$cliente->id}}" />
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="NOMBRE" name="NOMBRE" placeholder="" maxchars="50"  value="{{$cliente->Nombre}}"/>
                            
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
@endsection