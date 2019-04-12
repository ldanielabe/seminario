<!DOCTYPE HTML>

<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Semilleros</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="icon" type="image/png" href="{{asset('images/guia/logo_ufps.png')}}" />

       <style>
        @import url('https://fonts.googleapis.com/css?family=Grand+Hotel');
        </style>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="stylesheet" href="{{asset("css/main.css")}}" />
	
	</head>
	<body>

		<!-- Header -->
		 <div class="logo"></div>
			<header id="header">


				<h2 class="titulo">Semilleros Ing. Sistemas</h2>
				<nav>


					<ul>

						<li><a href="#intro"></a></li>
						<li><a href="#one">Noticias</a></li>
						<li><a href="#two">Semilleros</a></li>
						<li><a href="#work">Nosotros</a></li>
						<li><a href="#contact">Contactanos</a></li>

						  <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @guest
                           <!--li><a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a></li-->
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a></li>

                        @else
                            <li class="nav-item dropdown">


                                <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn"> {{ Auth::user()->name }} </button>
                                  <div id="myDropdown" class="dropdown-content">
                                     <a class="dropdown-item" href="{{ route('salirAdmin') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sessión') }}
                                     </a>

                                        <form id="logout-form" action="{{ route('salirAdmin') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                  </div>
                                </div>
                            </li>
                        @endguest

					</ul>
				</nav>
			</header>

			 @yield('content')


		<!-- Footer -->
		<footer>
    <div class="ufps-footer ufps-footer-dark">
    <h3>Universidad Francisco de Paula Santander</h3>
    <p>Programa Ingeniería de Sistemas</p>
    </div>  
    </footer>


		<!-- Scripts -->
			<script src="{{asset('js/jquery.min.js')}}"></script>
			<script src="{{asset('js/jquery.poptrox.min.js')}}"></script>
			<script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('js/skel.min.js')}}"></script>
			<script src="{{asset('js/util.js')}}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="{{asset('js/main.js')}}"></script>

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