

			@extends('MainSite.Layouts.app')
			
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

			