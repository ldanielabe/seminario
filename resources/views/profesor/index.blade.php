@extends('layouts.app')

@section('content')
<div class="big-padding text-center blue-grey white-text">
    <h1 class="titulo2">Profesor</h1>
    <div class="container white">
     
      <div class="row">
        
         <!--Buscador-->
         <input type="search" id="search" onkeyup="myFunction()" placeholder="Search for names.."  title="Type in a name">

        
    </div>
      <table class="tablee table-bordered" id="tablee">
            <thaad>
             
               <?php
                $var= 0; 
                foreach($profesor as $profe){
                    $var=$var+1;
                }

                $var2= 0; 
                foreach($semillero as $s){
                    $var2=$var2+1;
                }

                ?>
              @if($var>=1 && $var2>=1)
       
                    <tr>
                    <th class="negrilla">Id</th>
                    <th class="negrilla">Nombre</th>
                    <th class="negrilla">Semillero</th>
                    <th class="negrilla">Email</th>
               
                    <th class="negrilla">Editar</th>
                    <th class="negrilla">Eliminar</th>
                </tr>
               
            </thaad>
            <tbody>
                @foreach($profesor as $profe)
                <tr>
                  
                    <td>{{ $profe->id }}</td>
                    <td>{{ $profe->name }}</td>
                    <td>{{ $profe->idSemillero }}</td>
                    <td>{{ $profe->email }}</td>
                   
                
                   
                    <td class="tAncho">
                       <a class="glyphicon glyphicon-pencil" href="{{url('/profesor/'.$profe->id.'/edit')}}"  ></a>
                       
                    </td>
					<td><form  method="POST" action="{{url('/profesor/'.$profe->id)}}">
                     {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                      <button class="glyphicon glyphicon-remove"  type="submit" ></button>
                       </form>
                        </td>
                </tr>
                
                @endforeach

                @else <h2 class="negrilla-aviso">No hay profesores agregados aun.</h2>
              @endif
            </tbody>
        </table>
        <div class="floating">

            <a href="{{url('/profesor/create')}}" class="ufps-btn">
                <i class="material-icons">crear</i>
            </a>

        </div>
    </div>
</div>
@endsection