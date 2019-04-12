@extends('layouts.appprof')

@section('content')
<div class="container white">
    <h1 class="titulo2">Nuevo miembro del semillero</h1>

    <form  method="POST" action="{{ url('/miembro') }}">
   		{{csrf_field()}}
           <div class="form-group row">
    <label class="col-sm-2 form-control-label">Nombre</label>
    <div class="col-sm-9 select">
    ​<p><input type="text" name="nombre" placeholder="Nombre" class="form-control" required></p>
    </div></div>
    
    <div class="form-group row">
    <label class="col-sm-2 form-control-label">Codigo</label>
    <div class="col-sm-9 select">
    ​<p><input type="number" name="codigo" placeholder="Codigo" class="form-control" required></p>
    </div></div>

    <div class="line"></div>
                          @if(!empty($semillero))
                           <div class="form-group row">
                          <label class="col-sm-2 form-control-label">tipo de semillero</label>
                          <div class="col-sm-9 select">
                          <select  name="idSemillero" class="form-control" required>
                          <option   id="contar" >escoja la semillero</option>
                    <option   id="contar"   value="{{ $semillero['id'] }}" >{{ $semillero['nombre'] }}</option>
                         
                          
                          </select>
                        </div>
        </div>


    <p><input type="submit" value="Guardar" class="btn btn-success"></p>

     @else

<div class="alert alert-danger" role="alert">
 No se ha registrado ningun estudiante al semillero.<a href="#" class="alert-link"></a>. 
</div>
@endif

	</form>

</div>
@endsection