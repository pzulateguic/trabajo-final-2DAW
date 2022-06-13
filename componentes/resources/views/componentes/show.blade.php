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
                    <!-- encabezado -->

                    <div class="row">
                        <div class="card-header d-flex align-items-center justify-content-between col-10">
                            <h3 class="mb-0 s-6">Mostrar Componente</h3>
                            <small class="text-muted float-end"></small>
                        </div>
                        <!-- boton volver -->
                        <div class="col-2 d-flex align-items-center justify-content-center">
                            <a href="/componentes" class="btn btn-primary">Volver</a>
                        </div>
                        <!-- fin boton volver -->
                    </div>
                    <!-- tabla de datos -->
                    <div class="col-12 mt-1 m-2">
                        <h4>Datos:</h4>
                        <table class="table table-condensed">

                            <tbody>
                                <tr>
                                    <td>Nombre:</td>
                                    <td>{{$componentes->Nombre}}</td>
                                </tr>
                                <tr>
                                    <td>Aplicacion:</td>
                                    <td>{{$aplicacion->Nombre}}</td>
                                </tr>

                                <tr>
                                    <td>Observaciones:</td>
                                    <td>{{$componentes->observaciones}}</td>
                                </tr>
                                <tr>
                                    <td>Fecha:</td>
                                    <td>{{$componentes->created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--Fin tabla de datos -->
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection