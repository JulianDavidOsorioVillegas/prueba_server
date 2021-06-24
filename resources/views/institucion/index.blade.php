@extends("theme.$theme.layout")

@section('content')
<div class="container">
    <h2 align="center">Listar Institucion</h2>
    <div class="card border-dark">
        <div class="card-header bg-dark text-white">
            <a class="btn  btn-secondary" href="{{Route('institucion.create')}}">Crear Institucion</a>
        </div>
    </div>
<table class="table table-bordered">
    <tr>
        <th class="btn-secondary">Id Institucion</th>
        <th class="btn-secondary">Institucion</th>
        <th class="btn-secondary">Telefono</th>
        <th class="btn-secondary">Acceso</th>
    </tr>
    @foreach($institucion as $institucion)
    <tr>
        <th>{{$institucion->id}}</th>
        <th>{{$institucion->nombre}}</th>
        <th>{{$institucion->telefono}}</th>
        <th>
        <form id="Eliminar" action="{{route('institucion.destroy',$institucion->id)}}" method="POST">
        <a class="btn btn-primary" href="{{Route('institucion.edit',$institucion->id)}}">Editar</a>

        @csrf
        @method('DELETE')
    <button class="btn btn-outline btn-danger"><i class="fa fa-trash"></i></button>
    </form>
        </th>
    </tr>
    @endforeach
</table>
</div>
@endsection