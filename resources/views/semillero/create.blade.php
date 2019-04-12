@extends('layouts.app')

@section('content')
<div class="container white">
    <h1 class="titulo2">Nuevo semillero</h1>
    
    <form  method="POST" action="{{ url('/semilleros') }}">
   		{{csrf_field()}}
  	
    <p><input type="text" name="nombre" placeholder="Nombre" class="form-control" required></p>
    <p><input type="text" name="mision" placeholder="Mision" class="form-control" required></p>
    <p><input type="text" name="vision" placeholder="Vision" class="form-control" required></p>
    <p><input type="text" name="objetivos" placeholder="Objetivos" class="form-control" required></p>
    <p><input type="text" name="lineasInvestigacion" placeholder="Linea de Investigacion" class="form-control" required></p>
    <p><input type="text" name="detalles" placeholder="Detalles" class="detalles" required></p>
    <p><input type="text" name="juego" placeholder="Juego codigo Iframe" class="juego" ></p>
    <p><input type="submit" value="Guardar" class="btn btn-success"></p>
	</form>
 
</div>
@endsection