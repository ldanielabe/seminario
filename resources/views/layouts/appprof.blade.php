<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Semilleros</title>


	<link rel="stylesheet" type="text/css" href="{{ asset("css/select2.css") }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Grand+Hotel');
    </style>

    <link rel="stylesheet" href="{{asset('css/main.css')}}" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('images/guia/logo_ufps.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("css/select2.css") }}">
	<script src="{{ asset("js/jquery-3.1.1.min.js")}}"></script>
	<script src="{{ asset("js/select2.js")}}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

<style>
    .cblank{
color:#ecf0f1;
    }
</style>
</head>
<body>
    <div id="">
       <header id="header">
				<h2  class="titulo" ><a href="/home2">Semilleros Ing. Sistemas</a></h2>

				<nav>
                    <!-- Right Side Of Navbar -->
                    <ul>
                        <!-- Authentication Links -->
                       
                            <li class="nav-item">
                               <a href="/evento" class="ufps-btn cblank">Eventos</a>
                           </li>

                           <li class="nav-item" >
                               <a href="/miembro" class="ufps-btn cblank">Miembros</a>
                           </li>


                           <li class="nav-item">
                               <a href="/noticia" class="ufps-btn cblank">Noticias</a>
                           </li>


                           <li class="nav-item">
                               <a href="/proyecto" class="ufps-btn cblank">Proyectos</a>
                           </li>

                            <li class="nav-item dropdown">

                                <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn"> profesor </button>
                                  <div id="myDropdown" class="dropdown-content">
                                     <a class="dropdown-item" href="{{ route('salirProfesor') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sessión') }}
                                     </a>

                                        <form id="logout-form" action="{{ route('salirProfesor') }}" method="get" style="display: none;">
                                             @csrf
                                        </form>

                                  </div>
                                </div>
                            </li>
                       
                    </ul>


           </nav></header>

        <div class="fondito-2">
            @yield('content')
        </div>
    </div>

  	<footer>
    <div class="ufps-footer ufps-footer-dark">
    <h3>Universidad Francisco de Paula Santander</h3>
    <p>Programa Ingeniería de Sistemas</p>
    </div>  
    </footer>

    <!-- Scripts -->


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>



	 <script src="js/jquery.js">   </script>












<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>

   
        <script>
            $.material.init();
        </script>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


</script>

</body>
</html>
