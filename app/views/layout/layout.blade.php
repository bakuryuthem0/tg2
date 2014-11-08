<!DOCTYPE html>
<html lang="en">
  <head>
		<title>Servicios | Tecnographic Venezuela</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/font-awesome.css') }}
		{{ HTML::style('css/camera.css') }}
		{{ HTML::style('css/slicknav.css') }}
		{{ HTML::style('css/prettyPhoto.css',$attributes = array('media' => 'screen')) }}
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700') }}
		{{ HTML::style('css/custom.css') }}
		
	</head>
	<body>
    
    <!--home start-->
    
    <div id="home">
    	<div class="headerLine">
			<div id="menuF" class="default">
				<div class="container">
					<div class="row">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="fa fa-bars icon-bar"></span> </button>
						<div class="logo col-md-4">
							<div>
								<a href="#">
									<img src="{{ URL::to('images/-01.png') }}">
								</a>
							</div>
						</div>
						<div class="col-md-8 menusera">
							<div class="navmenu"style="text-align: center;">
								<ul id="menu">
									<li class="active" ><a href="#home">Inicio</a></li>
									<li><a href="#project">Servicios</a></li>
									<li><a href="#about">Quienes somos</a></li>
									<li><a href="#news">Portafolio</a></li>
									<li class="last"><a href="#contact">Contactenos</a></li>
									<!--li><a href="#features">Features</a></li-->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
@yield('content')
<footer id="contactenos">
	    <div class="line" id="fondo_negro">
			<div class="container">
				<div class="row downLine" >
					<div id="foot">
						<div id="cont_contacto">
							<h2 class="info_titulo"><a href="contacto.php" class="link_inf">Contacto</a></h2>
							<p class="contac" style="width:300px;"><img src="{{URL::to('images/icono1-01.png')}}" class="icon">tecnographic.com.ve, agencia de 
							diseño & sistemas en maracay, 
							venezuela.
							</p>
							<p class="contac" style="width:300px;"><img src="{{URL::to('images/icono2-01.png')}}" class="icon"><span style="float:left;">+58 (0243) 431.26.99 <br>
							+58 (0424) 218.89.38 (angela torres)<br>
							+58 (0424) 355.71.53 (felipe sosa) <br>
							+58 (0424) 337.99.17 (carlos salazar)</span></p>

							<p class="contac"><img src="{{URL::to('images/icono3-01.png')}}" class="icon">maracay edo-aragua, venezuela</p>

							<p class="contac"><img src="{{URL::to('images/icono4-01.png')}}" class="icon">tecnographicvenezuela@gmail.com</p>
						
						</div>
						<div id="cont_servicios">
							<h2 class="info_titulo"><a href="sev.php" class="link_inf">Servicios</a></h2>
							<ul class="info" id="serv_info">
								<li>diseño web</li>

								<li>imagen corporativa</li>

								<li>medios impresos</li>

								<li>mercadeo y publicidad</li>

								<li>publicidad exterior</li>

								<li>fotografía</li>

								<li>desarrollo de sistemas 
								   adminitrativo</li>
							</ul>
						</div>
						<div id="cont_nosotros">
							<h2 class="info_titulo"><a href="quien.php" class="link_inf">Nosotros</a></h2>
							<ul class="info" id="nosotros">
								<li>quienes somos</li>

								<li>servicios</li>

								<li>portafolio</li>

								<li>contacto</li>
							</ul>
						</div>
					</div>						
				</div>
				<div id="redes">
					<div id="face" class="redes_sociales">
					</div>
					<div id="twit" class="redes_sociales">
					</div>
					<div id="gplu" class="redes_sociales">
					</div>
				</div>
				<div style="clear:both">
				</div>
				<div class="cpy">
					<p>Copyright &copy; 2014 Tecnographic Venezuela. All Rights Reserved.</p>
				</div>
			</div>
		</div>	
	</footer>
	{{ HTML::script('js/jquery-1.11.1.min.js')}}
	<script type="text/javascript">
    $(document).ready(function(){
       /*------------Control del menu--------------*/
        var $menu = $("#menuF");
        if ( $(this).scrollTop() >= 0 && $menu.hasClass("default") ){
            $menu.fadeOut('fast',function(){
                $(this).removeClass("default")
                       .addClass("fixed transbg")
                       .fadeIn('fast');
            });
            $menu.fadeIn('fast');
        }
        $(window).scroll(function(){
            if ( $(this).scrollTop() >= 0 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } /*else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }*/
        });
	});
    //jQuery
	</script>
	{{ HTML::script('js/scroll/jquery.nicescroll.min.js') }}
	{{ HTML::script('js/prefixfree.min.js') }}
	{{ HTML::script('js/custom.js')}}
</body>
</html>