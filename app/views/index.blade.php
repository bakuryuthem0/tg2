@extends('layout.main')
@section('content')
	<div class="container" id="banner">
		<img src="{{ URL::to('images/banner.gif') }}">
	</div>
<!--project start-->    
<div id="project">    	
		<div class="line">
			<div class="container">
				<div id="project1" ></div>
				<div class="row Ama">
					<div class="col-md-12">
						<div class="titulos" id="titulo_servicio">
							<img src="{{ URL::to('images/img_serv/nuestros servicios-01.png') }}">
						</div>
					</div>
				</div>
			</div>
		</div>          
    
    
    <div class="container">
		<div class="row">
			
			<div class="portfolio_block columns3   pretty" data-animated="fadeIn">	
				<div id="cont_serv">
					@foreach($servicios as $clave => $servicio)
					<a href="{{ URL::to('servicios/'.$servicio->id) }}">
						<div class="servicio" id="{{ $servicio->nombre }}" style="background:url('{{ URL::to($alt[$clave]) }}')">
							<img src="{{ URL::to('images/'.$servicio->image) }}">
						</div>
					</a>
					@endforeach
				</div>			
			</div>	
				
		</div>
		<div class="col-md-12 info_serv">
			<div id="info_der">
				<h3>I'm serious as a heart attack</h3>
<p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>

<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.  </p>
			</div>
			<aside>
				<div class="container galeria">
					<div class="camera_wrap camera_white_skin" id="camera_wrap_1">
						<div data-thumb="" data-src="{{URL::to('images/slides/slider1-01.png')}}">
							<div class="img-responsive camera_caption fadeFromBottom">
								<img src="{{URL::to('images/slides/slider1-01.png')}}" class="nada">
							</div>
						</div>
						<div data-thumb="" data-src="{{URL::to('images/slides/slider2-01.png')}}">
							<div class="img-responsive camera_caption fadeFromBottom">
								<img src="{{URL::to('images/slides/slider2-01.png')}}" class="nada">
							</div>
						</div>
						<div data-thumb="" data-src="{{URL::to('images/slides/slider3-01.png')}}">
							<div class="img-responsive camera_caption fadeFromBottom">
								<img src="{{URL::to('images/slides/slider3-01.png')}}" class="nada">
							</div>
						</div>
					</div>
				</div>
			</aside>
		</div>
	</div>
	<div id="mini_gif">
		<img src="{{URL::to('images/nini-banner.png')}}">
	</div>
</div>    
<div id="about">
    	<div class="line_2">
			<div class="container">
				<div class="row Fresh">
					<div class="Ama">
						<div class="col-md-12">
							<div class="titulos" id="titulo_nosotros">
								<img src="{{ URL::to('images/img_serv/quienes somos-01.png') }}">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
		

		<div id="banda">
			<div id="cont_palabra">
				<div id="top">
					<div class="medio">
						<p class="palabra" id="c" style="margin-left:18%;">
							Constancia
						</p>
						<p  class="palabra" id="r" style="margin-left:30%;">
							Responsabilidad
						</p>
					</div>
					<div class="medio">
						<p class="palabra" id="g" style="margin-left:36%;">
							Gratificación
						</p>
						<p class="palabra" id="i" style="margin-left:30%;">
							Innovación
						</p>
					</div>
					<div class="medio">
						<p class="palabra" id="t" style="margin-left:7%;">
							Tecnología
						</p>
						<p class="palabra" id="a" style="margin-left:46%;">
							Autenticidad
						</p>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div id="mid">
					<h1 class="letra" id="T">T</h1>
					<h1 class="letra" id="E">E</h1>
					<h1 class="letra" id="C">C</h1>
					<h1 class="letra" id="N">N</h1>
					<h1 class="letra" id="O">O</h1>
					<h1 class="letra" id="G">G</h1>
					<h1 class="letra" id="R">R</h1>
					<h1 class="letra" id="A">A</h1>
					<h1 class="letra" id="P">P</h1>
					<h1 class="letra" id="H">H</h1>
					<h1 class="letra" id="I">I</h1>
					<h1 class="letra" id="K">C</h1>
				</div>
				<div id="bot">
					<div class="medio">
						<p class="palabra" id="e" style="margin-left:20%;">
							Evolución
						</p>
						<p class="palabra" id="o" style="margin-left:13%;">
							Organización
						</p>
						<p class="palabra" id="k" style="margin-left:12%;">
							Crecimiento
						</p>
					</div>
					<div class="medio">
						<p class="palabra" id="n" style="margin-left:15%">
							Negociación
						</p>
						<p class="palabra" id="p" style="margin-left:12%;">
							Profesionalismo
						</p>
						<p class="palabra" id="h" style="margin-left:10%;">
							Humildad
						</p>
					</div>
				</div>
			</div>
			
		</div>
		<div style="position: relative;">
		
			<div class="container">
				<div class="row about">
					<div class="col-md-6">
						<div class="about1">
							<h3>Nuestra Meta</h3>
							<p>Nuestra meta es lograr consolidar la empresa en el mercado de la tecnología web, brindando servicio  a la mayor cantidad de clientes en el menor tiempo posible. Dar soporte técnico y actualización de páginas desarrolladas. Ser reconocidos local, nacional e internacionalmente.</p>
							<h3>Nuestro Equipo</h3>
							<p>Nuestro equipo de profesionales está formado por especialistas en distintas áreas como Diseño Grafico, Ingeniería en sistemas, Programación, Comunicación Social, y Community Manager.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about1">
							<h3>Tecnographic Venezuela</h3>
							<p>Somos una Agencia publicitaria y consultora responsable dedicada a la publicidad digital,  diseño de páginas web, tiendas virtuales, campañas de email, redes sociales y  desarrollo  de sistemas administrativos. 
							Nos enfocamos en brindar a nuestros clientes  un servicio  de alto grado de funcionalidad,  interactividad, de manera que el sitio web se convierta en una verdadera herramienta para hacer negocios online, y que se adapte a su  necesidad.
							<br><br>En Tecnography de Venezuela desarrollamos e integramos soluciones tecnológicas basadas en la sistematización y en las nuevas tecnologías, utilizando las últimas aplicaciones existentes en el mercado. Construimos el futuro, dotando a nuestros clientes de las herramientas para competir en la nueva era.</p>
						</div>
					</div>
					
				</div>
			</div>
		
		</div>
		<div id="refran">
			<img src="{{URL::to('images/refran-01.png')}}">
		</div>
    </div>
    
    
    <!--news start-->
    
    <div id="news">
    	<div class="line">
			<div class="container">
				<div id="project1" ></div>
				<div class="row Ama">
					<div class="col-md-12">
						<div class="titulos" id="titulo_portafolio">
							<img src="{{ URL::to('images/img_serv/portafolio.png') }}">
						</div>
					</div>
				</div>
			</div>
		</div>      
		<div class="container">
				<div class="row news">
					<div class="col-md-6  text-left">
					<img class="img-responsive picsGall" src="images/picNews/news1.jpg"/>
					<h3><a href="#">Lorem Ipsum Dolor sit Amet Pelenntesque Sodales!</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="images/picNews/news2.jpg"/>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row news2 news">
					<div class="col-md-6 text-left">
					<img class="img-responsive picsGall" src="images/picNews/news3.jpg"/>
					<h3><a href="#">Lorem Ipsum Dolor sit Amet Pelenntesque Sodales!</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="images/picNews/news4.jpg"/>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row news2 news">
					<div class="col-md-6 text-left">
					<img class="img-responsive picsGall" src="images/picNews/news5.jpg"/>
					<h3 ><a href="#">Lorem Ipsum Dolor sit Amet Pelenntesque Sodales!</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="images/picNews/news6.jpg"/>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			
			
			
			<div class="container hideObj2" style="display:none;">
				<div class="row news2 news">
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="images/picNews/news6.jpg"/>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-left">
					<img class="img-responsive picsGall" src="images/picNews/news5.jpg"/>
					<h3 ><a href="#">Lorem Ipsum Dolor sit Amet Pelenntesque Sodales!</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			<div class="container">
			
		</div>
    </div>
    
    
    <!--contact start-->
    
    <div id="contact">
    	<div class="line">
			<div class="container">
				<div id="project1" ></div>
				<div class="row Ama">
					<div class="col-md-12">
						<div class="titulos" id="titulo_contacto">
							<img src="{{ URL::to('images/img_serv/contacto-01.png') }}">
						</div>
					</div>
				</div>
			</div>
		</div>  
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-12 cont">
					<ul>
						<li><i class="fa fa-home"></i>5512 Lorem Ipsum Vestibulum 666/13</li>
						<li><i class="fa fa-phone"></i>+1 800 789 50 12, +1 800 450 6935</li>
						<li><a href="#"><i class="fa fa-envelope"></i>mail@compname.com</a></li>
						<li><i class="fa fa-skype"></i>compname</li>
						<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
						<li><a href="#"><i class="fa fa-facebook-square"></i>Facebook</a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i>Dribbble</a></li>
						<li><a href="#"><i class="fa fa-flickr"></i>Flickr</a></li>
						<li><a href="#"><i class="fa fa-youtube-play"></i>YouTube</a></li>
					</ul>
				</div>
				<div class="col-md-9 col-xs-12 forma">
					<form>
						<input type="text" class="col-md-6 col-xs-12 name" name='name' placeholder='Name *'/>
						<input type="text" class="col-md-6 col-xs-12 Email" name='Email' placeholder='Email *'/>
						<input type="text" class="col-md-12 col-xs-12 Subject" name='Subject' placeholder='Subject'/>
						<textarea type="text" class="col-md-12 col-xs-12 Message" name='Message' placeholder='Message *'></textarea>
						<div class="cBtn col-xs-12">
							<ul>
								<li class="clear"><a href="#"><i class="fa fa-times"></i>clear form</a></li>
								<li class="send"><a href="#"><i class="fa fa-share"></i>Send Message</a></li>
							</ul>
						</div>
					</form>
				</div>
			</div>
		</div>	
	</div>	
@stop