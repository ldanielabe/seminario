@extends('layouts.appprof')

@section('content')
<div class="container white">
    <h1 class="titulo2">Editar noticia</h1>

    <div class="panel-body">
        @if (!empty($noticia))
    	<form  method="POST" action="{{url('/noticia/'.$noticia->id)}}">
   		{{csrf_field()}}
         <input name="_method" type="hidden" value="PATCH">
         
    <div class="form-group row">
    <label class="col-sm-2 form-control-label">Descipcion del semillero</label>
    <div class="col-sm-9 select">
    ​<textarea id="txtArea" name="descripcion" placeholder="descripcion" rows="0" cols="70"   required> {{ $noticia->descripcion }} </textarea>
    </div></div>

             <div class="form-group row">
                          <label class="col-sm-2 form-control-label">tipo de semillero</label>
                          <div class="col-sm-9 select">
                          <select  name="idSemillero" class="form-control" required>
                          <option   id="contar" >escoja el semillero</option>
                          <option   id="contar"   value="{{ $semillero['id'] }}" >{{ $semillero['nombre'] }}</option>
                          
                          </select>
                        </div>
                </div>



          <input type="submit" value="Guardar" class="btn btn-success">
          @else
          <p>
            No existe información de este noticia.
          </p>
          @endif
        <a href="/noticia" class="btn btn-default">Regresar</a>
		</form>
		</div>


</div>
@endsection