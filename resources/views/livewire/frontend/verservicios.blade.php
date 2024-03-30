<div>
    <section class="w3l-team-main team py-5" id="team">
        <div class="container py-lg-5">
            <div class="text-center mb-2">
				<h3 class="title-w3l mb-4"><span class="log">N</span>uestros <span class="log">S</span>ervicios</h3>
				<div id="col-md-12">
					<input type="search" placeholder="Buscar servicio" class="form-control" wire:model="search"><br>
				</div>	
            </div>
            <div class="row team-row justify-content-center">
				@if(count($servicios))
					@foreach ($servicios as $value)
						<div class="col-lg-3 col-6 team-wrap mt-lg-5 mt-4">
							<div class="member">
								<div class="member-img">
									<img src="/images/servicios/{{ $value->foto }}" alt="" class="img-fluid radius-image">
								</div>
								<div class="member-info">
									<h4>{{$value->nombre}}</h4>
									<div class="info-product-price">
										@if($value->oferta)
											<span>
												<del style="color:red;">{{number_format($value->precio, 0, '', '.') }}</del> /
												{{number_format($value->oferta, 0, '', '.') }}
											</span>
										@else
											<span class="item_price">{{number_format($value->precio, 0, '', '.') }}</span>
										@endif
									</div>
									@if (in_array($value->id, Cart::getContent()->pluck('id')->toArray()))
										<button type="button" class="btn btn-style2 btn-secondary" wire:click="deletecarrito({{ $value->id }})">
											<i class="fa fa-check-circle-o"></i> Agregado al carrito
										</button>
									@else
										<button type="button" class="btn btn-style2 btn-primary" wire:click="addcarrito({{ $value->id }})">
											<i class="fa fa-shopping-cart"></i> Agregar al carrito
										</button>
									@endif	
								</div>
							</div>
						</div>
					@endforeach
				@else
					<div class="col-md-12" align="center">
						<img src="/imgsystem/noencontrado.png" width="30%" /><br>
						<p class="title-w3l mb-4"><span class="log">S</span>ervicios <span class="log">N</span>o <span class="log">E</span>ncontrados</p>
					</div>
				@endif
				<div class="col-md-12">
					{{ $servicios->links() }} 
				</div>
            </div>
        </div>
    </section>
</div>
