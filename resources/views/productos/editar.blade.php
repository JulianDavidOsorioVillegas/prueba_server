@extends("theme.$theme.layout")

@section('content')
<div class="row">
    <div class="col-12 margin-tb">
        <div class="pull-left">
           <h3 align="center">Editar Producto</h3>
        </div>
    </div>
</div>
<form action="{{route('productos.update',$producto->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Nombre:</strong>
              <input type="text" name="nombre" value="{{$producto->nombre}}" class="form-control" placeholder="Nombre"/>
           </div>
       </div>   
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Detalle:</strong>
              <textarea type="text" name="detalle"  style="height:100x"class="form-control" placeholder="Detalle">{{$producto->detalle}} </textarea>
           </div>
       </div>   
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Puntaje:</strong>
              <input type="number" name="puntaje"  value="{{$producto->puntaje}}"class="form-control" placeholder="Puntaje"/>
           </div>
       </div>   
       <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Kilos:</strong>
              <input type="text" name="kilos"  value="{{$producto->kilos}}" class="form-control" placeholder="Kilos"/>
           </div>
       </div>   
       <div class="col-sm-1">
            <button type="submit" class="btn btn-primary">Guardar</button>
       </div>   
       <div class="col-sm-11">
            <a class="btn btn-default" href="{{route('productos.index')}}" >Atrás</a>
        </div>
   </div>
   </div>
</form>

@endsection