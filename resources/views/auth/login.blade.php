@extends('layouts.app')

@section('content')
 <section id="tree" class="">
<div class="">
  
    <div class="row justify-content-center">
        <div class="col-md-7 fondito">
            <div class="card">
                <div class="card-header titulo4">{{ __('Ingresar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ingresar') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">
                            {{ __('Correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control
                                {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                            {{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control
                                {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right">Tipo de Usuario</label>
                          <div class="col-md-6">
                          <select  name="tipo" class="form-control">
                           <option   id="contar" name="tipo" value="1">Administrador</option>
                           <option   id="contar"  name="tipoUser" value="2">Profesor</option>
                            </select>
                          </div>
                        </div>


                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Guardar contraseña') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="ufps-btn">
                                    {{ __('Ingresar') }}
                                </button>

                                <a class="negro" href="{{ route('password.request') }}">
                                    {{ __('Olvidaste tu contraseña?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
       </div>
</div></section>

@endsection
