@extends("theme.$theme.layout")

@section('content')
<div class="row">
    <div class="col-12 margin-tb">
        <div class="pull-left">
           <h3 align="center">Agregar Institucion</h3>
        </div>
    </div>
</div>
<form action="{{route('institucion.store')}}" method="POST">
@csrf
<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre Institucion:</strong>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre"/>
        </div>
    </div>  
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Télefono:</strong>
            <input type="text" name="telefono" class="form-control" placeholder="Telefono"/>
        </div>
    </div> 
    <div class=" col-sm-1">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>   
    <div class="col-sm-11">
        <a class="btn btn-default" href="{{route('institucion.index')}}" >Atrás</a>
    </div> 
</div>
</div>
</form>
@endsection