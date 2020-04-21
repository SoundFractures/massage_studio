


 @extends('MainSite.Layouts.app')

			@section('Seo')
				<title>Masazni salon Pallas | O meni </title>
				<meta name="description" content="Pozdravljeni v moj masažni salon Pallas, sem Ksenija Lovrenčič in sem certificarana maserka, tukaj si lahko preberete več o meni">
				<meta name="keywords" content="masaža,klasična masaža,športna masaža,refleksna masaža stopal, masaža obraza, access bars terapija,zdravljenje,zdravje,sprostitev">
			@endsection

			@section('navbar_active_link')
			<ul>
                           
				<li><a href="{{ route('RouteController.home')}}">Domov</a></li>
				<li class="active"><a href="{{ route('RouteController.about')}}">O meni</a></li>
				<li class="has-dropdown">
					<a href="{{ route('RouteController.offer')}}">Ponudba</a>
					<ul class="dropdown">
						<li><a href="#">Klasična masaža</a></li>
						<li><a href="#">Športna masaža</a></li>
						<li><a href="#">Refleksna masaža stopal</a></li>
						<li><a href="#">Sprostitvena masaža obraza</a></li>
						<li><a href="#">Acces Bars terapija</a></li>
					</ul>
				</li>
			
				<li><a href="{{ route('RouteController.pricelist')}}">Cenik</a></li>
				<li><a href="{{ route('RouteController.gallery')}}">Galerija</a></li>
				<li><a href="{{ route('RouteController.blog')}}">Blog</a></li>

				<li><a href="{{ route('RouteController.contact')}}">Kontakt</a></li>
			</ul>
			@endsection

			@section('cover')
			<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/h1_about.jpg);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<div class="display-t">
								<div class="display-tc animate-box" data-animate-effect="fadeIn">
									<h1>O meni</h1>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			@endsection
			
			@section('content')
			<div id="fh5co-about">
				<div class="container">
					<div class="about-content">
						<div class="row animate-box">
								
							<div class="col-md-8 col-md-offset-4 text-center fh5co-heading">
							<h1>Ksenija Lovrenčič</h1>		
							<img class="img-responsive" src="images/ksenija_krog.png" alt="about">
									<div class="desc">
											<p class="o_meni">Sem terapevtska maserka, vedno nasmejana in pozitivno usmerjena. Zanima me vse, kar je povezano
											 s telesom in zdravim načinom življenja, zato že kar nekaj let sama izdelujem domačo kozmetiko, za
											 lastno porabo. Prepričana sem, da lahko sami veliko pripomoremo k izboljšanju zdravja in kvalitete
											 našega življenja.</p>
											<p class="o_meni">Masaža je velik del mojega življenja. Morda se kot mlajša punca tega nisem zavedala, vendar je življenje poskrbelo, da me usmeri na tisto pot, ki je prava zame. Svoje znanje rada nadgrajujem in izpopolnjujem. V veliko zadovoljstvo mi je, da s svojim znanjem in izkušnjami pomagam ljudem, zaradi vsakodnevnih naporov, obremenitev in stresa, ter vam tako pomagam ponovno vzpostaviti energetsko ravnovesje in izboljšati fizično stanje telesa.</p>
											<h4 class="quotes">“Zdravje je največje darilo, zadovoljstvo je največje bogastvo, zvestoba najboljši odnos.” - Buddha</h4><img class="img-responsive" src="images/icons/buddha1.png" alt="Buddha">
									</div>
									
								</div>
							
							
						</div>
					</div>
				</div>
			</div>
			@endsection

			