@extends('layouts.app')

@section('content')
<div class="container white">
    <h1 class="titulo2">Editar semilleros</h1>
   
    <div class="panel-body">
        @if (!empty($semillero))
    	<form  method="POST" action="{{url('/semilleros/'.$semillero->id)}}">
   		{{csrf_field()}}
         <input name="_method" type="hidden" value="PATCH">
          <p>
            <input value="{{ $semillero->nombre }}" type="text" name="nombre" placeholder="Nombre" class="form-control" required>
          </p>
         
           <p>
            <input value="{{ $semillero->mision }}" type="text" name="mision" placeholder="Mision" class="form-control" required>
          </p>
           
           <p>
            <input value="{{ $semillero->vision }}" type="text" name="vision" placeholder="Vision" class="form-control" required>
          </p>
           
           <p>
            <input value="{{ $semillero->objetivos }}" type="text" name="objetivos" placeholder="Objetivos" class="form-control" required>
          </p><p>
            <input value="{{ $semillero->lineasInvestigacion }}" type="text" name="lineasInvestigacion" placeholder="Lineas de Investigacion" class="form-control" required>
          </p>
           
           <p>
            <input value="{{ $semillero->detalles }}" type="text" name="detalles" placeholder="Detalles" class="form-control" required>
          </p>

           <p>
            <input value="{{ $semillero->juego }}" type="text" name="juego" placeholder="Juego codigo Iframe" class="form-control">
          </p>

          <input type="submit" value="Guardar" class="btn btn-success">
          @else
          <p>
            No existe información de este semillero.
          </p>
          @endif
        <a href="/semilleros" class="btn btn-default">Regresar</a>
		</form>
		</div>
 
  
</div>
@endsection