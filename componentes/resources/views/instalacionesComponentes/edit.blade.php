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
                            <h3 class="mb-0 s-6">Editar instalación del componente</h3>
                            <small class="text-muted float-end"></small>
                        </div>
                        <!-- Boton de volver a clientes -->
                        <div class="col-2 d-flex align-items-center justify-content-center">
                            <a href="/instalacionesComponentes" class="btn btn-primary">Volver</a>
                        </div>
                        <!--Fin boton de crear usuarios -->
                    </div>

                    <div class="card-body">
                        <form action="/instalacionesComponentes" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" class="form-control" id="ID" name="ID" value="{{$instalacionesComponentes->id}}" />
                            <div class="row mb-3 mt-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">idcliente</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="idcliente" name="idcliente">
                                        <option selected disabled>--Seleccionar un cliente--</option>
                                        @foreach ($clientes as $cliente)
                                        <option value="{{$cliente->id}}"
										@if ($instalacionesComponentes->idcliente == $cliente->id)
											selected
										@endif
										>{{$cliente->Nombre}}</option>
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
                                        <option value="{{$actualizacionComponente->id}}"
										@if ($instalacionesComponentes->idactualizacionescomponentes == $actualizacionComponente->id)
											selected
										@endif
										>{{$actualizacionComponente->Nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>
                            <!-- CAMPO DE OBSERVACIONES -->
                            <div class="row mt-3 mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Observaciones</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="observaciones" name="observaciones">{{$instalacionesComponentes->observaciones}}</textarea>
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