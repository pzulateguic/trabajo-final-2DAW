@extends('layouts.app')

@section('content')
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
                            <h3 class="mb-0 s-6">Mostrar instalación del componente</h3>
                            <small class="text-muted float-end"></small>
                        </div>
                        <!-- boton volver -->
                        <div class="col-2 d-flex align-items-center justify-content-center">
                            <a href="/instalacionesComponentes" class="btn btn-primary">Volver</a>
                        </div>
                        <!-- fin boton volver -->
                    </div>
                    <!-- tabla de datos -->
                    <div class="col-12 mt-1 m-2">
                        <h4 class="m-4">Personal data:</h4>
                        <table class="table table-condensed">
                            <tbody>
                                <tr>
                                    <td>ID:</td>
                                    <td>{{$instalacionesComponentes->id}}</td>
                                </tr>
                                <tr>
                                    <td>CLIENTE:</td>
                                    <td>{{$instalacionesComponentes->NombreCliente}}</td>
                                </tr>

                                <tr>
                                    <td>ACTUALIZACIÓN DEL COMPONENTE:</td>
                                    <td>{{$instalacionesComponentes->NombreActualizacion}}</td>

                                </tr>
                                <tr>
                                    <td>OBSERVACIONES:</td>
                                    <td>{{$instalacionesComponentes->observaciones}}</td>
                                </tr>
                                <tr>
                                    <td>Fecha de creación:</td>
                                    <td>{{$instalacionesComponentes
                                        ->created_at ->format('d/m/Y')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- fin tabla -->                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection