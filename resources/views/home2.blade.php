@extends('layouts.appprof')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">UNIVERSIDAD FRANCISCO DE PAULA SANTANDER</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Bienvenido Profesor!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
