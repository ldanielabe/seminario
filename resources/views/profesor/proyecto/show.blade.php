@extends('layouts.appprof')

@section('content')

<div class="container ">
    <div class="card product text-left">
         <p>{{$proyecto->id}}</p>
        <div class="row">
            <div class="col-sm-12"></div>
            <div class="col-sm-12 ">
                <p class="titulo2"><strong>Descripcion</strong></p>
                <center><p class="titulo3">{{$proyecto->descripcion}}</p></center>
                <p class="titulo2"><strong>Semillero</strong></p>
                <p>{{$proyecto->idSemillero}}</p>
            </div>
        </div>
    </div>
</div>

@endsection