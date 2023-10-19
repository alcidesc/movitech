<div>
	<style>
		.portfolio-hover{
	        height: 300px;
	        background: #FFF;
	        overflow: hidden;
	    }
	    .portfolio-hover img{
	        width: 112%;
	        height: auto;
	        margin-left: -15px;
	    }
	    @supports(object-fit: cover){
	        .portfolio-hover img{
	            height: 100%;
	            object-fit: cover;
	            object-position: center center;
	        }
	    }
	</style><br><br><br>
	<div class="practice-areas">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header">Nuestros <span>Servicios</span></h3>
				<p>En motitech tenemos los profesionales Calificados para la reparacion de Celulares al mejor precio del mercado.
				¿Calidad y mejor precio? ¡No esperes ni un minuto! Solicita un presupuesto</p>
			</div>
			<div class="row">
				@if ($limite == 2)
					<div class="col-md-12">
			              <input wire:model="search" class="form-control" type="search" placeholder="Buscar producto" style="border: 1px solid #DCDCDC;">
			        </div><br><br>
				@endif
				@php
					$cont=1;
				@endphp
				@foreach ($services as $value)
					@if ($cont > 2)
						<div class="col-md-6">
							<div class="row">
								<div class="p{{ $cont }} col-md-6" style="padding: 20px;min-height: 300px !important;">
									<a href="/view/{{$value->id}}"><h3 align="center">{{$value->nombre }}</h3></a><hr>
									<p class="para-w3-agile">
										<?php
											$texto = preg_replace ('/<[^>]*>/', ' ', $value->descripcion);
											echo substr($texto, 0, 150); 
										?> ...
									</p>
									<div style="position: absolute;bottom:10px;right:10px;">
										@if (in_array("ser_id".$value->id, Cart::getContent()->pluck('id')->toArray()))
											<a href="{{ url('/carritoservicio') }}"><button type="button" class="btn btn-success"><i class="fa fa-check-circle-o"></i> Completar cita</button></a>
										@else
											<button class="btn btn-warning" wire:click="addcita({{ $value->id }})"><i class="fa fa-shopping-cart"></i> Solicitar cita</button>
										@endif	
									</div>
								</div>
								<div class="col-md-6 portfolio-hover" style="min-height: 300px !important;">
									<a href="/view/{{$value->id}}"><img src="/images/servicios/{{ $value->foto }}" class="zoom-img" height="300px" alt=""></a>
								</div>
							</div>
						</div>
					@else
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 portfolio-hover" style="min-height: 300px !important;">
									<a href="/view/{{$value->id}}"><img src="/images/servicios/{{ $value->foto }}" class="zoom-img" height="300px" alt=""></a>
								</div>
								<div class="p{{ $cont }} col-md-6" style="padding: 20px;min-height: 300px !important;">
									<a href="/view/{{$value->id}}"><h3 align="center">{{$value->nombre }}</h3></a><hr>
									<p class="para-w3-agile">
										<?php
											$texto = preg_replace ('/<[^>]*>/', ' ', $value->descripcion);
											echo substr($texto, 0, 150); 
										?> ...
									</p>
									<div style="position: absolute;bottom:10px;right:10px;">
									
										@if (in_array("ser_id".$value->id, Cart::getContent()->pluck('id')->toArray()))
											<a href="{{ url('/carritoservicio') }}"><button type="button" class="btn btn-success"><i class="fa fa-check-circle-o"></i> Completar cita</button></a>
										@else
										<a href="https://wa.me/{{ $empresa->whatsapp }}?text=Buenas!!%20estoy%20interesado%20en%20el%20Servicio" target="_blank" style="text-decoration: none;">
											<button style="background-color: #25d366; color: #fff; border: none; padding: 10px 20px; cursor: pointer;">
												<i class="fab fa-whatsapp"></i> Solicitar Servicio
											</button>
										</a>										
										@endif	
									</div>
								</div>
							</div>
						</div>
					@endif
					@php
						if($cont == 4){
							$cont=0;
						}
						$cont+=1;
					@endphp
				@endforeach
				<div class="col-md-12" align="center">
					@if($limite == 1)
						<div class="more">
							<a href="{{ url('/servicios')}}">Ver más servicios</a>
						</div>
					@else
						{{ $services->links() }}
					@endif
				</div>
			</div>
		</div>
	</div><br><br><br>
</div>