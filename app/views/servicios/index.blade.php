@extends('layout.layout')
@section('content')
<div class="container" id="pagina_aparte">
		<div class="row">
			<!-- filter_block -->
				
			<div class="portfolio_block columns3   pretty" data-animated="fadeIn">	
				<div class="line">
					<div class="container">
						<div id="project1" ></div>
						<div class="row Ama">
							<div class="col-md-12">
								<div class="titulo" id="titulo_servicio">
									<img id="img_titulo" src="{{ URL::to('images/img_serv/'.$serv) }}">
								</div>
							</div>
						</div>
					</div>
				</div>  
				<div class="container">
					<div id="cont_trio">
						<aside id="desc">
							<div id="text">
								<p class="text_description">{{ $texto }}</p>
							</div>
						</aside>
						<aside id="imagen">
						</aside>
					</div>
				</div>
			</div>	
				
		</div>
		<div id="options" class="col-md-12" style="text-align: center;">	
			<ul id="filter" class="option-set" data-option-key="filter">
				<li><a class="selected" href="#." data-option-value="*" class="current">All Works</a></li>
				@foreach($servicios as $clave => $servicio)
					<li><a class="serv_mini" href="#." id="{{ $servicio->nombre }}" data-option-value="{{ $servicio->id }}">{{ ucwords(str_replace('_',' ',$servicio->nombre)) }}</a></li>
				@endforeach
			</ul>
		</div><!-- //filter_block -->	
	</div>
@stop