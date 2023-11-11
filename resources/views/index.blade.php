
<!doctype html>
<html lang="es">
<head>
    <!-- //for-mobile-apps -->
		<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
		<!-- pignose css -->
		<link href="{{asset('frontend/css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />
		<!-- //pignose css -->
		<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
		<!-- js -->
		<script type="text/javascript" src="{{asset('frontend/js/jquery-2.1.4.min.js')}}"></script>
		<!-- //js -->
		<!-- cart -->
			<script src="{{asset('frontend/js/simpleCart.min.js')}}"></script>
		<!-- cart -->
		<!-- for bootstrap working -->
			<script type="text/javascript" src="{{asset('frontend/js/bootstrap-3.1.1.min.js')}}"></script>
			<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
		<!-- //for bootstrap working -->
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
		<script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
		@livewireStyles
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Movitech</title>
    <!--/google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css"> 
</head>
<body id="top-gap-fixed-header" class="home page-template page-template-page-templates page-template-template-homepage page-template-page-templatestemplate-homepage-php page page-id-7 noscroll">
    <livewire:navbar><br>
	<div>
		<section class="w3l-main-slider banner-slider position-relative" id="home">
			<livewire:pricing> 
		</section>
		<!-- //main-slider -->
	</div>
    
    <!-- features-section -->
    <section class="w3l-features py-5" id="features">
        <div class="container py-lg-5">
            <div class="row pb-lg-5 mb-lg-5 pt-lg-3">
                <div class="col-lg-5 text-left">
                    <h6 class="title-subhny two">LO QUE OFRECEMOS</h6>
                    <h3 class="title-w3l two">Respaldo Tecnológico Garantizado</h3>
                </div>
                <div class="col-lg-7 text-left ps-lg-5">
                    <p class="w3p-white">
                        Somos tu destino confiable para servicios de reparación de teléfonos, ventas y asistencia técnica. 
                        Somos reconocidos como líderes del mercado, destacando por nuestra experiencia y profesionalismo. 
                        En MOVITECH, nos enorgullece ofrecer soluciones tecnológicas excepcionales, respaldadas por un equipo 
                        altamente capacitado y dedicado. Confía en nosotros para mantener tus dispositivos en perfecto estado, 
                        proporcionando servicios rápidos y eficientes.
                    </p>
                </div>
            </div>
        </div>
    </section> 
    <!--//features-section -->
    <!--/w3l-features-grids-->
    <section class="w3l-features-grids">
        <div class="container">
            <div class="main-cont-wthree-2">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">UX Design</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap active">
                            <div class="icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Marketing</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">
                                    Web Development</a></h4>
                            <p class="text-para">Lorem ipsum dolor sit amet, elit. Id ab commodi magnam. </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//w3l-features-grids-->

    <!--/w3llets-work-->
    <section class="w3llets-work py-5">
        <div class="container py-md-5">
            <div class="row justify-content-center">
                <div class="w3llets-work-left col-lg-7">
                    <div class="text-lg-start text-center">
                        <h6 class="title-subhny">Let's Work Together</h6>
                        <h3 class="title-w3l">Have an idea?
                            Let’s get it done right!</h3>
                    </div>
                </div>
                <div class="w3llets-work-right col-lg-5 ps-lg-5 text-lg-end text-center">
                    <div class="w3banner-content-btns text-right">
                        <a href="#contact" class="btn btn-style btn-primary mt-lg-5 mt-4"> Let's Work Together </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3llets-work-->
    <!--/footer-->
    

	<livewire:footer /> 

    <!-- //footer -->
    <!--/Js-scripts-->
    <!-- move top -->
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

</body>

</html>
