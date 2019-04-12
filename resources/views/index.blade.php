@extends('layouts.app2')

@section('content')
<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<h2 class="text-one">Bienvenido</h2>
					</header>
					
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					
					<p class="texone">En seguida encontraras la informacion de cada semillero de investigacion de la <strong> Universidad Francisco de Paula Santander</strong> con cada uno de sus detalles para que te animes a participar en uno o más.</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
                </div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2 class="titulo4">Noticias...</h2>
					</header>
							
				
	<div class="table">
	@foreach($noticia as $noti)
	<div class="x1">
	<div class="icon"><i class="fa fa-moon-o" ></i></div>
	@foreach($semillero as $semi)
		@if($semi->id == $noti->idSemillero)
			<h1>{{$semi->nombre}}</h1>
		@endif
	@endforeach
		
			<p>{{$noti->descripcion}}</p>
	</div>			
	@endforeach			
	</div>		
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>

		<!-- Two -->
			<section id="two" class="main style2 left fullscreen">
				<div class="content box style2">
					<header>
				    <h2 class="titulo4">Semilleros</h2>
					</header>
		 
				<div class="datagrid">
					<table>
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Mision</th>
							<th>Mas info.</th>
						
						</tr>
					</thead>
					
					<tfoot>
						<tr>
							<td colspan="4">
								<div id="paging">
									<ul>
										<li><a href="#"><span>Previous</span></a></li>
										<li><a href="#" class="active"><span>1</span></a></li>
										<li><a href="#"><span>2</span></a></li><li><a href="#"><span>3</span></a></li>
										<li><a href="#"><span>4</span></a></li><li><a href="#"><span>5</span></a></li>
										<li><a href="#"><span>Next</span></a></li>
									</ul>
								</div>
							</tr>
						</tfoot>
					
				<tbody>
						
					@foreach($semillero as $semi)
					<tr>

						<td>{{ $semi->nombre }}</td>
						<td>{{ $semi->mision }}</td>
						<td><a href="{{url('/semilleros/'.$semi->id)}}" class="acolor">¡Aquí!</a></td>
					</tr>
					@endforeach
				</tbody>
					</table>
				</div>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content">
					<header>
						<h2>Nosotros</h2>
						<p></p>
					</header>

					<!-- Gallery  -->
						<div class="gallery">
							<article class="from-left">
								<a href="{{asset('images/fulls/01.jpg')}}" class="image fit"><img src="images/fulls/01.jpg" title="The Anonymous Red" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="{{asset('images/fulls/02.jpg')}}" class="image fit"><img src="{{asset('images/fulls/02.jpg')}}" title="Airchitecture II" alt="" /></a>
							</article>
							<article class="from-left">
								<a href="{{asset('images/fulls/03.jpg')}}" class="image fit"><img src="{{asset('images/fulls/03.jpg')}}" title="Air Lounge" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="{{asset('images/fulls/04.jpg')}}" class="image fit"><img src="{{asset('images/fulls/04.jpg')}}" title="Carry on" alt="" /></a>
							</article>
							<article class="from-left">
								<a href="{{asset('images/fulls/05.jpg')}}" class="image fit"><img src="{{asset('images/fulls/05.jpg')}}" title="The sparkling shell" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="{{asset('images/fulls/06.jpg')}}" class="image fit"><img src="{{asset('images/fulls/06.jpg')}}" title="Bent IX" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="{{asset('images/fulls/07.jpg')}}" class="image fit"><img src="{{asset('images/fulls/07.jpg')}}" title="Bent IX" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="{{asset('images/fulls/08.jpg')}}" class="image fit"><img src="{{asset('images/fulls/08.jpg')}}" title="Bent IX" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="{{asset('images/fulls/09.jpg')}}" class="image fit"><img src="{{asset('images/fulls/09.jpg')}}" title="Bent IX" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="{{asset('images/fulls/10.jpg')}}" class="image fit"><img src="{{asset('images/fulls/10.jpg')}}" title="Bent IX" alt="" /></a>
							</article>
						</div>

				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content">
					<header>
						<h2>Contactanos</h2>
						<p></p>
					</header>
					<div class="box">
						<form method="post" action="#">
							<div class="field half first"><input type="text" name="name" placeholder="Name" /></div>
							<div class="field half"><input type="email" name="email" placeholder="Email" /></div>
							<div class="field"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
							<ul class="actions">
								<li><input type="submit" value="Send Message" /></li>
							</ul>
						</form>
					</div>
				</div>
			</section>


@endsection