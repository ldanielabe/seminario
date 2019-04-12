@extends('layouts.app')

@section('content')
<div class="big-padding text-center blue-grey white-text">
    <h1 class="titulo2">Semillero</h1>
    <div class="container white">
     
      <div class="row">
        
         <!--Buscador-->
         <input type="search" id="search" onkeyup="myFunction()" placeholder="Search for names.."  title="Type in a name">

        
    </div>
      <table class="tablee table-bordered" id="tablee">
            <thaad>
             
               <?php
                $var= 0; 
                foreach($semillero as $semi){
                    $var=$var+1;
                }
                ?>
              @if($var>=1)
       
                    <tr>
                    <th class="negrilla">Id</th>
                    <th class="negrilla">Nombre</th>
                    <th class="negrilla">Mision</th>
                    <th class="negrilla">Vision</th>
                    <th class="negrilla">Objetivos</th>
                    <th class="negrilla">Linea de investigacion</th>
                    <th class="negrilla">Detalles</th>
                    <th class="negrilla">Editar</th>
                    <th class="negrilla">Eliminar</th>
                </tr>
                @else <h2 class="negrilla-aviso">No hay semilleros agregados aun.</h2>
              @endif
            </thaad>
            <tbody>
                @foreach($semillero as $semi)
                <tr>
                  
                    <td><a href="{{url('/semilleros/'.$semi->id)}}">{{ $semi->id }}</a></td>
                    <td>{{ $semi->nombre }}</td>
                    <td>{{ $semi->mision }}</td>
                    <td>{{ $semi->vision }}</td>
                    <td>{{ $semi->objetivos }}</td>
                    <td>{{ $semi->lineasInvestigacion }}</td>
                    <td>{{ $semi->detalles }}</td>
                
                   
                    <td class="tAncho">
                       <a class="glyphicon glyphicon-pencil	" href="{{url('/semilleros/'.$semi->id.'/edit')}}" class="btn btn-primary" ></a>
                       
                    </td>
					<td><form  method="POST" action="{{url('/semilleros/'.$semi->id)}}">
                     {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                      <button class="glyphicon glyphicon-remove	"  type="submit" ></button>
                       </form>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="floating">

            <a href="{{url('/semilleros/create')}}" class="ufps-btn">
                <i class="material-icons">crear</i>
            </a>

        </div>
    </div>
</div>
@endsection