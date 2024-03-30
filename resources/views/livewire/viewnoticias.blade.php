<div>
    <section class="w3l-team-main team py-5" id="team">
        <div class="container py-lg-5">
            <div class="text-center mb-2">
				<h3 class="title-w3l mb-4"><span class="log">M</span>antenete <span class="log">I</span>nformado</h3>
				<div id="col-md-12">
					<input type="search" placeholder="Buscar noticia" class="form-control" wire:model="search"><br>
				</div>	
            </div>
            <div class="row team-row justify-content-center">
				@if(count($noticias))
					@foreach ($noticias as $value)
						<div class="col-lg-3 col-6 team-wrap mt-lg-5 mt-4">
							<div class="member">
								<div class="member-img">
									<img src="/images/productos/{{ $value->foto }}" alt="" class="img-fluid radius-image">
								</div>
								<div class="member-info">
									<h4>{{$value->nombre}}</h4>
                                    <button type="button" class="btn btn-style2 btn-secondary">
                                        Ver noticia
                                    </button>
								</div>
							</div>
						</div>
					@endforeach
				@else
					<div class="col-md-12" align="center">
						<img src="/imgsystem/noencontrado.png" width="30%" /><br>
						<p class="title-w3l mb-4"><span class="log">N</span>oticias <span class="log">N</span>o <span class="log">E</span>ncontradas</p>
					</div>
				@endif
				<div class="col-md-12">
					{{ $noticias->links() }} 
				</div>
            </div>
        </div>
    </section>
</div>
