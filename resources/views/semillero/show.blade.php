@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="card product text-left">
       
  
    
  
        <div class="row tt">
            <div class="col-sm-12"></div>
            <div class="col-sm-12 ">
               <div class="img1"></div>
               <div class="img2"></div>
                <center><p class="titulo4">{{$semillero->nombre}}</p></center><br><br><br><br><br>
                <p class="titulo3"><strong>Mision</strong></p><br>
                <p class"letr">{{$semillero->mision}}</p>
                <br><p class="titulo3"><strong>Vision</strong></p><br>
                <p class"letr">{{$semillero->vision}}</p>
                <br><p class="titulo3"><strong>Objetivos</strong></p><br>
                <p class="center">{{$semillero->objetivos}}</p>
                <br><p class="titulo3 "><strong>Linea de investigacion</strong></p><br>
                <p class="center">{{$semillero->lineasInvestigacion}}</p>
                <br><p class="titulo3"><strong>Detalles</strong></p><br>
                <p class="center">{{$semillero->detalles}}</p><br>
               <br><br>
                <br><p class="titulo3"><strong>Proyectos</strong></p><br>
                <div class="table">
	@foreach($proyecto as $p)
	<div class="x1">
	<div class="icon"><i class="fa fa-moon-o" ></i></div>

        <p>{{$p->descripcion}}</p>
		
	</div>			
	@endforeach			
	</div>	
                
    <br><br>
    <br>
    <br><br><br> <br><br><br><p class="titulo3"><strong>Divierte un poco!</strong></p><br>  
           <?php
            print "<pre>";
            echo $semillero->juego;
            print "</pre>";
            ?>

</div>
            </div>
        </div>
</div>

@endsection