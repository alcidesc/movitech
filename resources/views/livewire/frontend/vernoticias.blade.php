<div>
    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col-md-12" align="center">
                    <h1 style="color:#eb646b;">
                        @if($noticia->estado == 1)
                            Noticias
                        @else
                            Servicio
                        @endif
                        <span>{{ $noticia->nombre }}</span>
                    </h1>
                </div>
            </div>
             <div class="row">
                <div class="col-md-2">
                    <img src="/images/noticias/{{ $noticia->foto }}" class="pro-image-front" style="border-radius: 50px;">
                </div>
                <div class="col-md-6">
                </div>
            </div> 
        </div>
    </div>
</div>

