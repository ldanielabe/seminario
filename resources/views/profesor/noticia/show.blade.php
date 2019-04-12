@extends('layouts.appprof')

@section('content')

<div class="container ">
    <div class="card product text-left">
         <p>{{$noticia->id}}</p>
        <div class="row">
            <div class="col-sm-12"></div>
            <div class="col-sm-12 ">
                <p class="titulo2"><strong>Descripcion</strong></p>
                <center><p class="titulo3">{{$noticia->descripcion}}</p></center>
                <p class="titulo2"><strong>Semillero</strong></p>
                <p>{{$noticia->idSemillero}}</p>
            </div>
        </div>
    </div>
</div>

@endsection