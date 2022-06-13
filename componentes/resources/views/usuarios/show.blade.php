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
                    <h3 class="mb-0 s-6">Mostrar usuario</h3>
                    <small class="text-muted float-end"></small>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-center">
                    <a href="/usuarios" class="btn btn-primary">Volver</a>
                </div>
            </div>

                    <div class="col-12 mt-1 m-2">
                        <h4>Datos personales:</h4>
                        <table class="table table-condensed">
                            
                            <tbody>
                                <tr>
                                    <td>Código:</td>
                                    <td>{{$user->id}}</td>
                                </tr>
                                <tr>
                                    <td>Nombre:</td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Apellido:</td>
                                    <td>{{$user->apellido}}</td>
                                </tr>
                                <tr>
                                    <td>Correo electrónico:</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <td>ROL:</td>
                                    <td>
                                        @if ($user->Rol == 1)
                                            Administrador
                                            @else
                                            Tecnico
                                            @endif
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Fecha de creación:</td>
                                    <td>{{$user->created_at ->format('d/m/Y')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

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