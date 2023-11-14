
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        {!! SEOMeta::generate() !!}
		{!! OpenGraph::generate() !!}
		{!! Twitter::generate() !!}
		{!! JsonLd::generate() !!}
    
        <!--/google-fonts -->
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
        <!--//google-fonts -->
        <!-- Template CSS -->
        <link rel="stylesheet" href="/assets/css/style-starter.css"> 
        <!-- Template JavaScript -->
        <script src="/assets/js/jquery-3.3.1.min.js"></script>
        
        <!-- //bootstrap -->
        <script src="/assets/js/bootstrap.min.js"></script>
        @livewireStyles
    </head>
    <body>
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
                                    <i class="fab fa-shopify"></i>
                                </div>
                                <h4><a href="#service" class="title-head mb-3">Tienda en línea</a></h4>
                                <p class="text-para">Los mejores productos del mercado lo encontras aquí. </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="grids-1 box-wrap active">
                                <div class="icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h4><a href="#service" class="title-head mb-3">Soporte Técnico</a></h4>
                                <p class="text-para">Reparción y soporte técnico de dispositivos móviles. </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                            <div class="grids-1 box-wrap">
                                <div class="icon">
                                    <i class="fas fa-store"></i>
                                </div>
                                <h4><a href="#service" class="title-head mb-3">Sobre Nosotros</a></h4>
                                <p class="text-para">Somos tu destino confiable para servicios y asistencia técnica. </p>
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
                            <h6 class="title-subhny">Trabajemos juntos</h6>
                            <h3 class="title-w3l">Conoce los servicios que ofrecemos!</h3>
                        </div>
                    </div>
                    <div class="w3llets-work-right col-lg-5 ps-lg-5 text-lg-end text-center">
                        <div class="w3banner-content-btns text-right">
                            <a href="/services" class="btn btn-style btn-primary mt-lg-5 mt-4"> Nuestros Servicios </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//w3llets-work-->
        <!--/footer-->
        

        <livewire:footer /> 

        <!-- //footer -->
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
        <script src="/assets/js/theme-change.js"></script>
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
        @livewireScripts
    </body>
</html>
