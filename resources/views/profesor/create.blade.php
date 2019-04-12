@extends('layouts.app')

@section('content')
<div class="container white">
    <h1 class="titulo2">Nuevo profesor</h1>
    
    <form  method="POST" action="{{ url('/profesor') }}">
   		{{csrf_field()}}
  	
      @if(!empty($semillero))
    <p><input type="text" name="name" placeholder="Nombre" class="form-control" required></p>
    <p><input type="password" name="password" placeholder="password" class="form-control" required></p>
   
                           <div class="form-group row">
                          <label class="col-sm-3 form-control-label">tipo de semillero</label>
                          <div class="col-sm-9 select">
                          <select  name="idSemillero" class="form-control">
                           <option   id="contar" >escoja la semillero</option>
                          @foreach($semillero as $s) 
                                    <option id="contar" value="{{ $s['id'] }}">{{ $s['nombre'] }}</option>
                          @endforeach 
                          
                            </select>
                          </div>
                        </div>
     
    <p><input type="email" name="email" placeholder="email" class="form-control" required></p>
    
    <p><input type="submit" value="Guardar" class="btn btn-success"></p>

    @else  <h2 class="negrilla-aviso">No hay semilleros agregados aun.</h2>
    @endif
	</form>
 
</div>
@endsection