<div>
  
    <div>
        <div>
         <?php
         function isMobile() {
             return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
         }
         if (isMobile()) {
             $divisor = 2;
         } else {
             $divisor = 4;
         }
         ?>
         <!-- product-nav -->
         <script src="{{ asset('/frontend/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
         <script type="text/javascript">
             $(document).ready(function () {
                 $('#horizontalTab').easyResponsiveTabs({
                     type: 'default', // Types: default, vertical, accordion           
                     width: 'auto', // auto or any width like 600px
                     fit: true   // 100% fit in a container
                 });
             });
         </script>
         <div class="new_arrivals">
             <div class="container">
                 <div class="row">
                     <div id="col-md-12"><br><br><br>
                         {{-- <h1 style="color:#eb646b;text-align: center;">Nuestros <span>Services</span></h1> --}}
                         {{-- <p>Aquí encontrarás los mejores servicios al mejor precio.</p><br> --}}
                     </div>
                     <div id="col-md-12">
                         <input type="search" placeholder="Buscar servicio" class="form-control" wire:model="search"><br>
                     </div>
                 </div>
                 <div class="row">
                     @php $cont = 1; @endphp
                     @foreach ($noticias as $value)
                         <div class="col-xs-6 col-md-3">
                             <div class="product-men">
                                 <div class="men-pro-item simpleCart_shelfItem">
                                     <div class="men-thumb-item">
                                         <img src="/images/noticias/{{ $value->foto }}" alt="" class="pro-image-front">
                                         <img src="/images/noticias/{{ $value->foto }}" alt="" class="pro-image-back">
                                         <div class="men-cart-pro">
                                             <div class="inner-men-cart-pro">
                                                 <a href="/noticias/{{ $value->slug }}" class="link-product-add-cart">Ver detalle noticia </a>
                                             </div>
                                         </div>
                                         @if ($value->oferta)
                                             <span class="product-new-top" style="background-color: #eb646b !important;">Oferta</span>
                                         @endif
                                     </div>
                                     <div class="item-info-product">
                                        <h4><a href="/noticias/{{ $value->slug }}">{{ $value->nombre }}</a></h4>
                                        {{ $value->descripcion }}
                                    </div>
                                    
                                 </div>
                             </div>
                         </div>
                         @if ($cont % $divisor == 0)
                             </div><div class="row">
                         @endif
                         @php $cont += 1; @endphp
                     @endforeach
                 </div>
                 <div class="row">
                     <div class="col-md-12">
                         {{ $noticias->links() }}
                     </div>
                     <div class="clearfix"></div>
                 </div>
             </div>
         </div>
     </div>
     </div>
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
