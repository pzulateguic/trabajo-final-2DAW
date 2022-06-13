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
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">

        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="row">
                        <div class="card-header d-flex align-items-center justify-content-between col-10">
                            <h3 class="mb-0 s-6">Editar componente</h3>
                            <small class="text-muted float-end"></small>
                        </div>
                        <!-- Boton de volver a clientes -->
                        <div class="col-2 d-flex align-items-center justify-content-center">
                            <a href="/componentes" class="btn btn-primary">Volver</a>
                        </div>
                        <!--Fin boton de crear usuarios -->
                    </div>

                    <div class="card-body">
                        <form action="/componentes" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" class="form-control" id="ID" name="ID" value="{{$componentes->id}}" />
                            <div class="row mb-3">
                                <label class="col-sm-1 col-form-label" for="basic-default-name">Nombre</label>
                                <div class="col-sm-11">
                                    <input type="text" class="form-control" value="{{$componentes->Nombre}}" id="NOMBRE" name="NOMBRE" placeholder="" maxchars="50" />
                                </div>
                            </div>
                            <h6>Seleccionar Aplicación</h6>
                            <!-- SELECIONADOR DE APLICACION -->
                            <select class="form-select" id="aplicacion" name="aplicacion" aria-label="Default select example" selected>
                                @foreach ($aplicaciones as $aplicacion)

                                <option value="{{$aplicacion->id}}" aria-label="Default select example" selected>{{$aplicacion->Nombre}}</option>

                                @endforeach
                            </select>
                            <!-- CAMPO DE OBSERVACIONES -->
                            <div class="row mt-3 mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Observaciones</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="observaciones" name="observaciones">{{$componentes->observaciones}}</textarea>
                                </div>
                                <!-- boton enviar -->
                                <div class="row justify-content-end">
                                    <div class="col-sm-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                                <!-- fin boton -->
                            </div>
                        </form>
                    </div>


                    <div class="card-footer py-2">
                        <nav class="d-flex justify-content-end" aria-label="...">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection