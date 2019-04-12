@extends('layouts.app')

@section('content')
<div class="container white">
    <h1 class="titulo2">Editar profesor</h1>
   
    <div class="panel-body">
        @if (!empty($semillero))
    	<form  method="POST" action="{{url('/profesor/'.$profesor->id)}}">
   		{{csrf_field()}}
         <input name="_method" type="hidden" value="PATCH">
          <p>
            <input value="{{ $profesor->name }}" type="text" name="name" placeholder="Nombre" class="form-control" required>
          </p>
         
           <p>
            <input type="password" name="password" placeholder="Password" class="form-control" required>
          </p>
           
                           <div class="form-group row">
                          <label class="col-sm-3 form-control-label">tipo de semillero</label>
                          <div class="col-sm-9 select">
                          <select  value="{{ $profesor->idSemillero }}" name="idSemillero" class="form-control">
                           <option   id="contar" >escoja la semillero</option>
                          @foreach($semillero as $s) 

                                    <option   id="contar"   value="{{ $s['id'] }}" >{{ $s['nombre'] }}</option>
                          @endforeach 
                          
                            </select>
                          </div>
                        </div>

                     
           <p>
            <input value="{{ $profesor->email }}" type="email" name="email" placeholder="Objetivos" class="form-control" required>
          </p>
          <input type="submit" value="Guardar" class="btn btn-success">
          @else
          <p>
            No existe información de este profesor.
          </p>
          @endif
        <a href="/profesor" class="btn btn-default">Regresar</a>
		</form>
		</div>
 
  
</div>
@endsection