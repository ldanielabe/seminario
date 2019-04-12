@extends('layouts.appprof')

@section('content')
<div class="big-padding text-center blue-grey white-text">
    <h1 class="titulo2">Noticias</h1>
    <div class="container white">

      <div class="row">

         <!--Buscador-->
         <input type="search" id="search" onkeyup="myFunction()" placeholder="Search for names.."  title="Type in a name">


    </div>
      <table class="tablee table-bordered" id="tablee">
            <thaad>

               <?php
$var = 0;
foreach ($noticia as $noti) {
	$var = $var + 1;
}
?>
              @if($var>=1)

                    <tr>
                    <th class="negrilla">Id</th>
                    <th class="negrilla">Descripcion</th>
                    <th class="negrilla">Semillero</th>

                    <th class="negrilla">Editar</th>
                    <th class="negrilla">Eliminar</th>
                </tr>
                @else <h2 class="negrilla-aviso">No hay noticias agregados aun.</h2>
              @endif
            </thaad>
            <tbody>
                @foreach($noticia as $noti)
                <tr>

                    <td>{{ $noti->id }}</td>
                    <td>{{ $noti->descripcion }}</td>
                 

@foreach($semillero as $s) 

<?php if($s->id == $noti->idSemillero){?>
<td> <?php echo $s->nombre; ?></td>
<?php } ?>

@endforeach 


                    <td class="tAncho">
                    <form  method="get" action="{{url('/noticia/'.$noti->id.'/edit')}}">
                     {{csrf_field()}}
                       <a class="glyphicon glyphicon-pencil" href="{{url('/noticia/'.$noti->id.'/edit')}}"></a>
                       </form>
                    </td>
					<td><form  method="POST" action="{{url('/noticia/'.$noti->id)}}">
                     {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                      <button class="glyphicon glyphicon-remove"  type="submit" class="btn btn-primary"></button>
                       </form>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="floating">

            <a href="{{url('/noticia/create')}}" class="ufps-btn">
                <i class="material-icons">crear</i>
            </a>

        </div>
    </div>
</div>
@endsection