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
         <script src="{{ asset('frontend/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
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
</div>
