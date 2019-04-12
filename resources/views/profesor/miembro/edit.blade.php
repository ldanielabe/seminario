@extends('layouts.appprof')

@section('content')
<div class="container white">
    <h1 class="titulo2">Editar miembro del semillero</h1>

    <div class="panel-body">
        @if (!empty($semillero))
    	<form  method="POST" action="{{url('/miembro/'.$miembro->id)}}">
   		{{csrf_field()}}
         <input name="_method" type="hidden" value="PATCH">
         
  
     <div class="form-group row">
    <label class="col-sm-2 form-control-label">Nombre</label>
    <div class="col-sm-9 select">
    ​<p><input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{$miembro->nombre}}" required></p>
    </div></div>
    
    <div class="form-group row">
    <label class="col-sm-2 form-control-label">Codigo</label>
    <div class="col-sm-9 select">
    ​<p><input type="number" name="codigo" placeholder="Codigo" class="form-control" value="{{$miembro->codigo}}" required></p>
    </div></div>

           <div class="form-group row">
                          <label class="col-sm-3 form-control-label">tipo de semillero</label>
                          <div class="col-sm-9 select">
                          <select  value="{{ $miembro->idSemillero }}" name="idSemillero" class="form-control">
                           <option   id="contar" >escoja la semillero</option>
                          @foreach($semillero as $s) 

                                    <option   id="contar"   value="{{ $s['id'] }}" >{{ $s['nombre'] }}</option>
                          @endforeach 
                          
                            </select>
                          </div>
                        </div>


          <input type="submit" value="Guardar" class="btn btn-success">
          @else
          <p>
            No existe información de este miembro.
          </p>
          @endif
        <a href="/miembro" class="btn btn-default">Regresar</a>
		</form>
		</div>


</div>
@endsection