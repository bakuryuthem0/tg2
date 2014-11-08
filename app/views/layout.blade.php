<!DOCTYPE html>
<html lang="en">
  <head>
		<title>Timber</title>
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
									<img src="{{ URL::to('images/logo-01.png') }}">
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
    
    <!--about start-->    
    
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
		
	{{ HTML::script('js/jquery-1.8.3.min.js')}}
	<script type="text/javascript">
				$(window).load(function(){
					items_set = [
					
						{category : 'branding', lika_count : '77', view_count : '234', src : 'images/prettyPhotoImages/pic9.jpg', title : 'Foil Mini Badges', content : '' },
						
						{category : 'polygraphy', lika_count : '45', view_count : '100', src : 'images/prettyPhotoImages/pic7.jpg', title : 'Darko – Business Card Mock Up', content : '' },
						
						{category : 'text_styles', lika_count : '22', view_count : '140', src : 'images/prettyPhotoImages/pic8.jpg', title : 'Woody Poster Text Effect', content : '' }
						

					];
					$('.portfolio_block').portfolio_addon({
						type : 1, // 2-4 columns simple portfolio
						load_count : 3,
						
						items : items_set
					});
					$('#container').isotope({
					  animationOptions: {
						 duration: 900,
						 queue: false
					   }
					});
				});
			</script>
	{{ HTML::script('js/jquery.mobile.customized.min.js')}}
	{{ HTML::script('js/jquery.easing.1.3.js')}}
	{{ HTML::script('js/camera.min.js')}}
	{{ HTML::script('js/myscript.js')}}
	{{ HTML::script('js/sorting.js')}}
	{{ HTML::script('js/jquery.isotope.js')}}
		<!--script type="text/javascript" src="js/jquery.nav.js"></script-->
		

	<script>
		$(function(){
				jQuery('#camera_wrap_1').camera({
				transPeriod: 500,
				time: 3000,
				height: '490px',
				thumbnails: false,
				pagination: true,
				playPause: false,
				loader: false,
				navigation: false,
				hover: false
			});
		});
	</script>
	{{ HTML::script('js/jquery.prettyPhoto.js')}}
	{{ HTML::script('js/bootstrap.min.js')}}
	{{ HTML::script('js/jquery.slicknav.js')}}
	<script>
			$(document).ready(function(){
			$(".bhide").click(function(){
				$(".hideObj").slideDown();
				$(this).hide(); //.attr()
				return false;
			});
			$(".bhide2").click(function(){
				$(".container.hideObj2").slideDown();
				$(this).hide(); // .attr()
				return false;
			});
				
			$('.heart').mouseover(function(){
					$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
				}).mouseout(function(){
					$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
				});
				
				function sdf_FTS(_number,_decimal,_separator)
				{
				var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
				var separator=(typeof(_separator)!='undefined')?_separator:'';
				var r=parseFloat(_number)
				var exp10=Math.pow(10,decimal);
				r=Math.round(r*exp10)/exp10;
				rr=Number(r).toFixed(decimal).toString().split('.');
				b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
				r=(rr[1]?b+'.'+rr[1]:b);

				return r;
}
				
			setTimeout(function(){
					$('#counter').text('0');
					$('#counter1').text('0');
					$('#counter2').text('0');
					setInterval(function(){
						
						var curval=parseInt($('#counter').text());
						var curval1=parseInt($('#counter1').text().replace(' ',''));
						var curval2=parseInt($('#counter2').text());
						if(curval<=707){
							$('#counter').text(curval+1);
						}
						if(curval1<=12280){
							$('#counter1').text(sdf_FTS((curval1+20),0,' '));
						}
						if(curval2<=245){
							$('#counter2').text(curval2+1);
						}
					}, 2);
					
				}, 500);
			});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#menu').slicknav();
		
	});
	</script>
	
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
	<script>
		/*menu*/
		function calculateScroll() {
			var contentTop      =   [];
			var contentBottom   =   [];
			var winTop      =   $(window).scrollTop();
			var rangeTop    =   200;
			var rangeBottom =   500;
			$('.navmenu').find('a').each(function(){
				contentTop.push( $( $(this).attr('href') ).offset().top );
				contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
			})
			$.each( contentTop, function(i){
				if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
					$('.navmenu li')
					.removeClass('active')
					.eq(i).addClass('active');				
				}
			})
		};
		
		$(document).ready(function(){
			calculateScroll();
			$(window).scroll(function(event) {
				calculateScroll();
			});
			$('.navmenu ul li a').click(function() {  
				$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
				return false;
			});
		});		
	</script>	
	<script type="text/javascript" charset="utf-8">

		jQuery(document).ready(function(){
			jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
			
		});
	</script>
	{{ HTML::script('js/scroll/jquery.nicescroll.min.js') }}
	{{ HTML::script('js/prefixfree.min.js') }}
	{{ HTML::script('js/cambio_tam.js') }}
	{{ HTML::script('js/cambio_let.js') }}
	{{ HTML::script('js/cambio_img.js') }}
	{{ HTML::script('js/custom.js') }}
	</body>
	
</html>