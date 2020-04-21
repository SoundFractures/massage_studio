

			@extends('MainSite.Layouts.app')
			

			@section('navbar_active_link')
			<ul>
                           
				<li><a href="{{ route('RouteController.home')}}">Domov</a></li>
				<li><a href="{{ route('RouteController.about')}}">O meni</a></li>
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
				<li class="active"><a href="{{ route('RouteController.blog')}}">Blog</a></li>

				<li><a href="{{ route('RouteController.contact')}}">Kontakt</a></li>
			</ul>
			@endsection

			@section('cover')
				<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/blog3.jpg);">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="display-t">
									<div class="display-tc animate-box" data-animate-effect="fadeIn">
										
										
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
								<div class="col-md-2 col-md-offset-1 animate-box razmik">
									<img class="img-responsive" src="images/ksenija.jpg" alt="about">
									<h5>Ksenija Lovrenčič</h5>
									<p class="manjse">Terapevtska maserka</p>
									<p class="manjse">31. 3. 2019</p>
								</div>

								<div class="col-md-9 col-md-offset-4 animate-box">
									<h1>{{$blog->title}}</h1>
										<div class="desc">
											{{$blog->body}}
										</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>
			@endsection

			