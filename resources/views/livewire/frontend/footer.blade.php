<!--/footer-->
<footer class="w3l-footer">
	<div class="w3l-footer-16 py-5">
		<div class="container py-md-5">
			<div class="row footer-p">
				<div class="col-lg-6 col-md-6 pe-lg-5">
					<h2><a href="{{url('/')}}"><img src="{{asset('images/empresa/'.$empresa->logo)}}" width="250px;" /></a></h2>
					<p><?php
						$texto = preg_replace ('/<[^>]*>/', ' ', $empresa->info);
						echo substr($texto, 0, 300); 
					?></p>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="row">
						<div class="column col-lg-6 col-md-6">
							<h3>Contacto: </h3>
							<p><a href="tel:{{ $empresa->telefono1 }}">{{ $empresa->telefono1 }}</a></p>
						</div>

						<div class="column col-lg-6 col-md-6">
							<h3>Direccion: </h3>
							<p>{{ $empresa->direccion }}</p>
						</div>
						<div class="column col-lg-12 col-md-12"><br>
							<h3>Nuestras Redes Sociales</h3>
							<ul class="social">
								@if($empresa->whatsapp)
									<li><a href="{{ $empresa->whatsapp }}"><i class="fab fa-whatsapp"></i></a></li>
								@endif
								@if($empresa->facebook)
									<li><a href="{{ $empresa->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
								@endif
								@if($empresa->twitter)
									<li><a href="{{ $empresa->twitter}}"><i class="fab fa-twitter"></i></a></li>
								@endif
								@if($empresa->instagram)
									<li><a href="{{ $empresa->instagram}}"><i class="fab fa-instagram"></i></a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
				
			</div>

			<div class="below-section pt-lg-4 mt-5">
				<div class="row">
					<p class="copy-text col-lg-7">&copy; MOVITECH {{date('Y')}}</p>
					<div class="col-lg-5 w3footer-gd-links d-flex">
						by: <a href="http://techcirclepy.com" target="_blank"> TechCircle</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>