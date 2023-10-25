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
				<h3 class="w3l_header"style="text-align: center;" >Nuestros <span>Servicios</span></h3>
			<p style="text-align: center;">¿Calidad y mejor precio? ¡No esperes ni un minuto! Solicita un presupuesto</p><br>
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
					@if ($cont > 20)
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
	<button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-arrow-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <!-- //move-top-->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
</div>