@extends('layouts.app')

@section('content')

<div class="main-content">
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">

        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="mb-0">Editar usuario</h3>
                    <!-- boton volver -->
                    <div class="col-1 d-flex align-items-center justify-content-center">
                        <a href="/usuarios" class="btn btn-sm btn-primary ">Volver</a>
                    </div>
                    <!-- fin boton -->
                </div>
                <div class="card-body">
                    <form action="/usuarios" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" id="ID" name="ID" value="{{$usuario->id}}" />
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$usuario->name}}" id="NOMBRE" name="NOMBRE" placeholder="" maxchars="50" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Apellido</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="APELLIDO" name="APELLIDO" value="{{$usuario->apellido}}" placeholder="" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control" placeholder="" aria-label="" value="{{$usuario->email}}" aria-describedby="basic-default-email2" id="EMAIL" name="EMAIL" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-clave">Clave</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control" placeholder="" aria-label="" value="{{$usuario->clave}}" aria-describedby="basic-default-email2" id="CLAVE" name="CLAVE" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Rol</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="ROL" name="ROL" aria-label="Default select example">
                                    <option value="1" @if ($usuario->Rol == 1)
                                        selected
                                        @endif
                                        >Administrador</option>
                                    <option value="2" @if ($usuario->Rol == 2)
                                        selected
                                        @endif
                                        >Técnico</option>
                                </select>
                            </div>
                        </div>
                        <!-- boton enviar -->
                        <div class="row justify-content-end">
                            <div class="col-sm-10 mt-2">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                        <!-- fin boton -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection