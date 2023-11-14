<div>
	<header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="/">
						M<span class="log">ovitech</span>
					</a></h1>
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
				<div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
						<li class="nav-item">
							<a class="nav-link @if($_SERVER['REQUEST_URI'] === '/') active menu__item--current @endif" aria-current="page" href="/">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link @if($_SERVER['REQUEST_URI'] === '/verproductos') active menu__item--current @endif" aria-current="page" href="/verproductos">Productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link @if($_SERVER['REQUEST_URI'] === '/viewnoticias') active menu__item--current @endif" href="/viewnoticias">Noticias</a>
						</li>
						<li class="nav-item">
							<a class="nav-link @if($_SERVER['REQUEST_URI'] === '/quienessomos') active menu__item--current @endif" href="/quienessomos">Sobre Nosotros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link @if($_SERVER['REQUEST_URI'] === '/services') active menu__item--current @endif" href="/services">Servicios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link @if($_SERVER['REQUEST_URI'] === '/contacto') active menu__item--current @endif" href="/contacto">Contacto</a>
						</li>
					</ul>
					<!--/search-right-->
					<ul class="header-search d-flex mx-lg-4">
						@guest
							<li class="nav-item">
								<a href="{{ url('/login') }}" class="nav-link">Iniciar Sesión</a>
							</li>
						@else
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									{{ Auth::user()->name }} <span class="fa fa-angle-down ms-1"></span>
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
									@if (Auth::user()->nivel == 1)
										<li><a class="dropdown-item" href="{{ url('/dashboard') }}">Panel de Control</a></li>
									@endif
									<li><a class="dropdown-item" href="{{ url('/perfil') }}" @if($_SERVER["REQUEST_URI"]=== '/perfil') class='active' @endif>Perfil</a></li>
									<li><a class="dropdown-item" href="{{ url('/verproductos') }}" @if($_SERVER["REQUEST_URI"]=== '/verproductos') class='active' @endif>Mis Pedidos</a></li>
									<li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">Cerrar sesión</a>
									</li>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</ul>
							</li>
						@endguest
					</ul>
					<!--//search-right-->
				</div>
				<!-- toggle switch for light and dark theme -->
				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
				<!-- //toggle switch for light and dark theme -->
			</nav>
		</div>
	</header>
</div>