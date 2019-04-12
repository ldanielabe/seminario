@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="card product text-left">
       
  
    
         <p>{{$profesor->id}}</p>
        <div class="row">
            <div class="col-sm-12"></div>
            <div class="col-sm-12 ">
               
                <center><p class="titulo3">{{$profesor->name}}</p></center>
                <p class="titulo2"><strong>Password</strong></p>
                <p>{{$profesor->password}}</p>
                <p class="titulo2"><strong>idSemillero</strong></p>
                <p>{{$profesor->idSemillero}}</p>
                <p class="titulo2"><strong>Email</strong></p>
                <p>{{$profesor->email}}</p>
                
            </div>
        </div>
    </div>
</div>

@endsection