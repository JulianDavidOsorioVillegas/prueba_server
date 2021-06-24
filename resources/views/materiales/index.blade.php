@extends("theme.$theme.layout")

@section('content')
<div class="container">
<h2 align="center">Lista Materiales</h2>
    <div class="card border-dark">
        <div class="card-header bg-dark text-white">
            <a class="btn  btn-secondary" href="{{route('materiales.create')}}">Agregar Material</a>
        </div>
    </div>

<table class="table table-bordered" >
    <tr>
        <th class="btn-secondary">Id Material</th>
        <th class="btn-secondary">Material</th>
        <th class="btn-secondary">Puntaje</th>
        <th class="btn-secondary">Kilo</th>
        <th class="btn-secondary">Acciones</th>
    </tr>
    @foreach($materiales as $material)
    
    <tr>
    <th>{{$material->id}}</th> 
    <th>{{$material->nombre}}</th> 
    <th>{{$material->puntaje}}</th>
    <th>{{$material->kilos}}</th> 
    <td> ERROR ._.
    <!--<form method="POST" action="{{ route('materiales.destroy', $material->id )}}">
	@method('DELETE')
	@csrf
    <button id="eliminarProducto"  onclick="eliminarArticulo({{$material->id}})" class="btn btn-outline btn-danger"><i class="fa fa-trash"></i></button>
    </form>-->
    </td>
    </tr>
    @endforeach  
</table>
</div>
@endsection