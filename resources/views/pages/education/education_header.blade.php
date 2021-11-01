<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navigation">
	<div class="container">

		<div class="my-1">
			<a class="navbar-brand" href="{{route("home")}}"></a>
		</div>
		<a href="{{route("education.index")}}"
			class="nav-link p-0 h4 navbar-heading inline-block ml-3 mb-0 {{ (request()->is('education')) ? 'border-bottom border-primary text-primary' : '' }}">
			Education Solutions
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
			aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<div class="navbar-nav collapse navbar-collapse d-flex align-items-center">

				<div class="navbar-container h-100 ml-4 d-flex">
					<ul class="navbar-nav d-flex">
						<li class="nav-item mx-4 py-3">
							<a class="nav-link {{ (request()->is('education/3d-printers*')) ? 'border-bottom border-primary text-primary' : '' }}"
								href="{{route('education.3d-printers')}}">3D Printers</a>

						</li>
						<li class="nav-item mx-4 py-3">
							<a class="nav-link {{ (request()->is('education/3d-scanning*')) ? 'border-bottom border-primary text-primary' : '' }}"
								href="{{route('education.3d-scanning')}}">3D Scanning</a>
						</li>
						<li class="nav-item mx-4 py-3">
							<a class="nav-link {{ (request()->is('education/cadcam-software*')) ? 'border-bottom border-primary text-primary' : '' }}"
								href="{{route('education.cadcam-software')}}">CAD/CAM Software</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>