
		@extends('MainSite.Layouts.app')

		@section('Seo')
			<title>Masazni salon Pallas | Cenik</title>
			<meta name="description" content="oglejte si naš cenik, vse cene vsebujejo DDV">
			<meta name="keywords" content="masaža,klasična masaža,športna masaža,refleksna masaža stopal, masaža obraza, access bars terapija,zdravljenje,zdravje,sprostitev">
		@endsection

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
				
					<li class="active"><a href="{{ route('RouteController.pricelist')}}">Cenik</a></li>
					<li><a href="{{ route('RouteController.gallery')}}">Galerija</a></li>
					<li><a href="{{ route('RouteController.blog')}}">Blog</a></li>

					<li><a href="{{ route('RouteController.contact')}}">Kontakt</a></li>
				</ul>
		@endsection

		@section('cover')	
			<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/blog2.jpg);">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1 text-center">
								<div class="display-t">
									<div class="display-tc animate-box" data-animate-effect="fadeIn">
										<h1>Cenik</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		@endsection
		
		
		@section('content')	
			<div class="container">
					<div class="row">
			
						<div class="col-1">
			
						</div>
						<div class="col-10 pricelist">
			
							<span class="d-inline d-sm-none">
							<img class="img-responsive-pricelist" src="images/icons/icon_class.png" alt="classic massage">
								<div class="offer ">
							
									<h3 class="price_massage">Klasična masaža</h3>
									<p class="price">Delna (hrbet, noge, roke), 30 min  ...... 15€</p>
									<p class="price">Celo telo, 60 min  ................................ 30€</p>
								</div>
							</span> 

							<span class="d-none d-sm-inline d-md-none">
							<img class="img-responsive-pricelist" src="images/icons/icon_class.png" alt="classic massage">
								<div class="offer ">
									<h3 class="price_massage">Klasična masaža</h3>
									<p class="price">Delna (hrbet, noge, roke), 30 min  ................................... 15€</p>
									<p class="price">Celo telo, 60 min  ............................................................. 30€</p>
								</div>
							</span> 

							<span class="d-none d-md-inline d-lg-none">
							<img class="img-responsive-pricelist" src="images/icons/icon_class.png" alt="classic massage">
								<div class="offer">
									<h3 class="price_massage">Klasična masaža</h3>
									<p class="price">Delna (hrbet, noge, roke), 30 min  ........................................................... 15€</p>
									<p class="price">Celo telo, 60 min  ..................................................................................... 30€</p>
								</div>
							</span> 

							<span class="d-none d-lg-inline d-xl-none">
							<img class="img-responsive-pricelist" src="images/icons/icon_class.png" alt="classic massage">
								<div class="offer">
									<h3 class="price_massage">Klasična masaža</h3>
									<p class="price">Delna (hrbet, noge, roke), 30 min  ...................................................................................................... 15€</p>
									<p class="price">Celo telo, 60 min  ................................................................................................................................ 30€</p>
								</div>
							</span> 

							<span class="d-none d-xl-inline">
								<img class="img-responsive-pricelist" src="images/icons/icon_class.png" alt="classic massage">
								<div class="offer">
							
									<h3 class="price_massage">Klasična masaža</h3>
									<p class="price">Delna (hrbet, noge, roke), 30 min  ........................................................................................................................................... 15€</p>
									<p class="price">Celo telo, 60 min  ..................................................................................................................................................................... 30€</p>
								</div>
							</span> 




							<span class="d-inline d-sm-none">
								<img class="img-responsive-pricelist" src="images/icons/icon_sport.png" alt="sport massage">
									<div class="offer ">
										<h3 class="price_massage">Športna masaža</h3>
										<p class="price">Delna (hrbet, noge, roke), 30 min  ...... 20€</p>
										<p class="price">Celo telo, 60 min  ................................ 35€</p>
									</div>
							</span> 

							<span class="d-none d-sm-inline d-md-none">
								<img class="img-responsive-pricelist" src="images/icons/icon_sport.png" alt="sport massage">
									<div class="offer ">
										<h3 class="price_massage">Športna masaža</h3>
										<p class="price">Delna (hrbet, noge, roke), 30 min  ................................... 20€</p>
										<p class="price">Celo telo, 60 min  ............................................................. 35€</p>
									</div>
							</span> 

							<span class="d-none d-md-inline d-lg-none">
								<img class="img-responsive-pricelist" src="images/icons/icon_sport.png" alt="sport massage">
									<div class="offer">
										<h3 class="price_massage">Športna masaža</h3>
										<p class="price">Delna (hrbet, noge, roke), 30 min  ........................................................... 20€</p>
										<p class="price">Celo telo, 60 min  ..................................................................................... 35€</p>
									</div>
							</span> 

							<span class="d-none d-lg-inline d-xl-none">
								<img class="img-responsive-pricelist" src="images/icons/icon_sport.png" alt="sport massage">
									<div class="offer">
										<h3 class="price_massage">Športna masaža</h3>
										<p class="price">Delna (hrbet, noge, roke), 30 min  ...................................................................................................... 20€</p>
										<p class="price">Celo telo, 60 min  ................................................................................................................................ 35€</p>
									</div>
							</span> 

							<span class="d-none d-xl-inline">
								<img class="img-responsive-pricelist" src="images/icons/icon_sport.png" alt="sport massage">	
									<div class="offer">
										<h3 class="price_massage">Športna masaža</h3>
										<p class="price">Delna (hrbet, noge, roke), 30 min  ........................................................................................................................................... 20€</p>
										<p class="price">Celo telo, 60 min  ..................................................................................................................................................................... 35€</p>
									</div>
							</span> 
							
						

							
							<span class="d-inline d-sm-none">
							<img class="img-responsive-pricelist" src="images/icons/icon_ref.png" alt="feet massage">	
								<div class="offer ">
									<h3 class="price_massage">Refleksna masaža stopal</h3>
									<p class="price">30 min  ................................................. 35€</p>
								</div>
							</span> 

							<span class="d-none d-sm-inline d-md-none">
							<img class="img-responsive-pricelist" src="images/icons/icon_ref.png" alt="feet massage">	
								<div class="offer ">
									<h3 class="price_massage">Refleksna masaža stopal</h3>
									<p class="price">30 min  ............................................................................. 35€</p>
								</div>
							</span> 

							<span class="d-none d-md-inline d-lg-none">
							<img class="img-responsive-pricelist" src="images/icons/icon_ref.png" alt="feet massage">	
								<div class="offer">
									<h3 class="price_massage">Refleksna masaža stopal</h3>
									<p class="price">30 min  ..................................................................................................... 35€</p>
								</div>
							</span> 

							<span class="d-none d-lg-inline d-xl-none">
							<img class="img-responsive-pricelist" src="images/icons/icon_ref.png" alt="feet massage">	
								<div class="offer">
									<h3 class="price_massage">Refleksna masaža stopal</h3>
									<p class="price">30 min  ................................................................................................................................................. 35€</p>
								</div>
							</span> 

							<span class="d-none d-xl-inline">
							<img class="img-responsive-pricelist" src="images/icons/icon_ref.png" alt="feet massage">	
								<div class="offer">
								<h3 class="price_massage">Refleksna masaža stopal</h3>
									<p class="price">30 min  ...................................................................................................................................................................................... 35€</p>
								</div>
							</span> 






							<span class="d-inline d-sm-none">
							<img class="img-responsive-pricelist" src="images/icons/resized_ikone1.png" alt="face massage">	
								<div class="offer ">
									<h3 class="price_massage">Sprostitvena masaža obraza</h3>
									<p class="price">20 min  ................................................. 10€</p>
								</div>
							</span> 

							<span class="d-none d-sm-inline d-md-none">
							<img class="img-responsive-pricelist" src="images/icons/resized_ikone1.png" alt="face massage">	
								<div class="offer ">
									<h3 class="price_massage">Sprostitvena masaža obraza</h3>
									<p class="price">20 min  ............................................................................. 10€</p>
								</div>
							</span> 

							<span class="d-none d-md-inline d-lg-none">
							<img class="img-responsive-pricelist" src="images/icons/resized_ikone1.png" alt="face massage">	
								<div class="offer">
									<h3 class="price_massage">Sprostitvena masaža obraza</h3>
									<p class="price">20 min  ..................................................................................................... 10€</p>
								</div>
							</span> 

							<span class="d-none d-lg-inline d-xl-none">
							<img class="img-responsive-pricelist" src="images/icons/resized_ikone1.png" alt="face massage">	
								<div class="offer">
									<h3 class="price_massage">Sprostitvena masaža obraza</h3>
									<p class="price">20 min  ................................................................................................................................................. 10€</p>
								</div>
							</span> 

							<span class="d-none d-xl-inline">
							<img class="img-responsive-pricelist" src="images/icons/resized_ikone1.png" alt="face massage">	
								<div class="offer">
									<h3 class="price_massage">Sprostitvena masaža obraza</h3>
									<p class="price">20 min  ....................................................................................................................................................................................... 10€</p>
								</div>
							</span> 


							



							<span class="d-inline d-sm-none">
								<img class="img-responsive-pricelist" src="images/icons/icon_bars.png" alt="access bars massage">	
									<div class="offer ">
										<h3 class="price_massage">Access Bars Terapija</h3>
										<p class="price">30 min  ................................................. 20€</p>
										<p class="price">60 min  ................................................. 30€</p>
									</div>
							</span> 

							<span class="d-none d-sm-inline d-md-none">
								<img class="img-responsive-pricelist" src="images/icons/icon_bars.png" alt="access bars massage">	
									<div class="offer ">
										<h3 class="price_massage">Access Bars Terapija</h3>
										<p class="price">30 min  ............................................................................. 20€</p>
										<p class="price">60 min  ............................................................................. 30€</p>
									</div>
							</span> 

							<span class="d-none d-md-inline d-lg-none">
								<img class="img-responsive-pricelist" src="images/icons/icon_bars.png" alt="access bars massage">	
									<div class="offer">
										<h3 class="price_massage">Access Bars Terapija</h3>
										<p class="price">30 min  ..................................................................................................... 20€</p>
										<p class="price">60 min  ..................................................................................................... 30€</p>
									</div>
							</span> 

							<span class="d-none d-lg-inline d-xl-none">
								<img class="img-responsive-pricelist" src="images/icons/icon_bars.png" alt="access bars massage">	
									<div class="offer">
										<h3 class="price_massage">Access Bars Terapija</h3>
										<p class="price">30 min  ................................................................................................................................................. 20€</p>
										<p class="price">60 min  ................................................................................................................................................. 30€</p>
									</div>
							</span> 

							<span class="d-none d-xl-inline">
								<img class="img-responsive-pricelist" src="images/icons/icon_bars.png" alt="access bars massage">	
									<div class="offer">
										<h3 class="price_massage">Access Bars Terapija</h3>
										<p class="price">30 min  ....................................................................................................................................................................................... 20€</p>
										<p class="price">60 min  ....................................................................................................................................................................................... 30€</p>
									</div>
							</span> 
							

						</div>
						<div class="col-1">
					
						</div>
					</div>
			</div>
	
		@endsection