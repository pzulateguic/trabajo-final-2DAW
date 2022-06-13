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
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="card-header d-flex align-items-center justify-content-between col-10">
                                <h3 class="mb-0 s-6">Actualizaciones de componentes</h3>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <a href="/actualizacionesComponentes" class="btn btn-primary">Volver</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 mt-1 m-4">
                        <h4>Personal data:</h4>
                        <table class="table table-condensed">
                            <tbody>
                                <tr>
                                    <td>ID:</td>
                                    <td>{{$actualizacionesComponentes->id}}</td>
                                </tr>
                                <tr>
                                    <td>NOMBRE:</td>
                                    <td>{{$actualizacionesComponentes->Nombre}}</td>
                                </tr>
                                <tr>
                                    <td>COMPONENTE:</td>
                                    <td>
                                        @if ($componentes != null)
                                            {{$componentes->Nombre}}
                                        @endif
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>OBSERVACIONES:</td>
                                    <td>{{$actualizacionesComponentes->observaciones}}</td>
                                </tr>

                                <tr>
                                    <td>CREATION DATE:</td>
                                    <td>{{$actualizacionesComponentes->created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection