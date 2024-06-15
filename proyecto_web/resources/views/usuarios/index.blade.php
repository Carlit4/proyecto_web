@extends('templates.master')

@section('contenido-principal')
<!-- tabla  -->
<div class="col">
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-info">
            <tr>
                <th>N°</th>
                <th>Correo</th>
                <th class="d-none d-lg-block">Nombre</th>
                <th>Tipo</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $num=>$usuario)
            <tr>
                <td>{{$num+1}}</td>
                <td>{{$usuario->email}}
                    <div class="d-lg-none">
                        <small>{{$usuario->nombre}}</small>
                    </div>
                </td>
                <td class="d-none d-lg-block">{{$usuario->nombre}}</td>
                <td>{{$usuario->perfil->nombre}}</td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-warning">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
                <td class="text-center">
                <button type="submit" class="btn btn-sm btn-danger" >
                    <i class="fa fa-trash-o"></i>
                </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- fin tabla -->
<div class="row mt-2">
    <div class="d-grid gap-2 d-lg-flex justify-content-md-end">
        <button class="btn btn-primary">Crear Usuario</button>
    </div>
</div>
@endsection