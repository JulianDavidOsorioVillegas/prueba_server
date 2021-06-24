@extends("theme.$theme.layout")

@section('content')
<div class="container">
    <h2 align="center">Lista Productos</h2>
    <div class="card border-dark">
        <div class="card-header bg-dark text-white">
            <a class="btn  btn-secondary" href="{{route('productos.create')}}">Crear Producto</a>
        </div>
    </div>
<table class="table table-bordered">
    <tr>
        <th class="btn-secondary">Id Producto</th>
        <th class="btn-secondary">Producto</th>
        <th class="btn-secondary">Descripción</th>
        <th class="btn-secondary">Puntaje</th>
        <!--<th class="btn-secondary">Kilos</th>-->
        <th class="btn-secondary">Acciones</th>
    </tr>
    @foreach($productos as $producto)
    
    <tr>
    <th>{{$producto->id}}</th> 
    <th>{{$producto->nombre}}</th> 
    <th>{{$producto->detalle}}</th>
    <th>{{$producto->puntaje}}</th>
    <!--<th>{{$producto->kilos}}</th> -->
    <td> 
    <form id="Eliminar" action="{{route('productos.destroy',$producto->id)}}" method="POST">
    <a class="btn btn-primary" href="{{route('productos.edit',$producto->id)}}">Editar</a>
    
    @csrf
    @method('DELETE')
    <button class="btn btn-outline btn-danger"><i class="fa fa-trash"></i></button>
    </form>
    </td>
    </tr>
    @endforeach

     <script>
</script>   
</table>
</div>
@endsection