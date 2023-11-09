@extends('layouts.frontend')
@section('contenido')
<head>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

</head>
	<!-- contact -->
	<div class="contact">
		<div class="container" style="margin-top: -50px;">
			<div class="row">
				<div class="col-md-12"><br><br><br>
					<h1 style="color:#0c2eec; text-align: center;" class="tittle">Contacto</h1>
				</div>
				<div class="col-md-6">
					<h1 class="tittle" style="color:#2011eb;">Formulario de contacto</h1>
					<form action="{{ route('enviarcorreo') }}" method="post">
						@csrf
						<div class="contact-form2">
							<input type="text" name="nombre" placeholder="Nombre"  required>
							<input type="text" name="celular" placeholder="Celular"  required>
							<textarea type="text" name="mensaje" placeholder="Message..." required></textarea>
							<button type="submit" class="item_add single-item hvr-outline-out2 button2">Enviar</button>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<h3 class="tittle" style="color:#1434eb;">Ver en el mapa</h3>
					<!-- map -->
					<div class="row">
						<div class="col-12"><hr>
							<style type="text/css">
								#mapa{border:0px solid #999;height:250px; border-radius: 10px;}
							</style>
							<div id="mapa" class="shadow"></div>
							<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
							<br><p align="center">Abrir en Google Maps <a href="https://maps.google.com/?q={{$empresa->latitud}},{{$empresa->longitud}}">Ver Instrucciones</a></p>
						</div>
					</div>
					<!-- //map -->
				</div>
			</div>
		</div>
	</div>
	
	<!-- //contact -->
		
	<!-- //stats -->
	<script type="text/javascript" src="{{ asset('frontend/js/maps.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHcQT0yBuaLXWdx6Mv_hAroOB0HLmNp5g&callback=Maps" async defer></script>
	<script> console.log('Hi!'); </script>
    <!-- Mostrando mapa y calculando distancias y tiempos -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="{{ asset('frontend/js/makermaps.js')}}" charset="utf-8"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHcQT0yBuaLXWdx6Mv_hAroOB0HLmNp5g&callback=Maps" async defer></script>
    <script>
        function Maps(){
            let lat = {{$empresa->latitud}};
            let lng = {{$empresa->longitud}};
            let empresa = '{{$empresa->nombre}}';
            let direccion = '{{$empresa->direccion}}';
            initMap(lat,lng,empresa,direccion);
        }        
    </script>
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
    <!--/stats-number-counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();

    </script>
    <!--//stats-number-counter-->
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
@stop
