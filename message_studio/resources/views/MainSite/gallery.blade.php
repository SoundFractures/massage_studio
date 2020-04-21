

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
				<li class="active"><a href="{{ route('RouteController.gallery')}}">Galerija</a></li>
				<li><a href="{{ route('RouteController.blog')}}">Blog</a></li>

				<li><a href="{{ route('RouteController.contact')}}">Kontakt</a></li>
			</ul>
		@endsection

        @section('cover')	
        
            <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/klasicna2.jpg);">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1 text-center">
								<div class="display-t">
									<div class="display-tc animate-box" data-animate-effect="fadeIn">
										<h1>Galerija</h1>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </header>
            
        @endsection

        @section('content')	
            <div id="fh5co-project">
            <!-- Pride še mogoče kaki tekst sem? -->
            </div>
       

                <article class="gallery">
                <a class="gallery-link" href="https://unsplash.it/1600/1200?image=1081">
                    <figure class="gallery-image">
                    <img height="1200" src="https://unsplash.it/1600/1200?image=1081" width="1600">
                    <figcaption>Photo caption</figcaption>
                    </figure>
                </a>
                <a class="gallery-link" href="https://unsplash.it/1600/1000?image=1014">
                    <figure class="gallery-image">
                    <img height="1000" src="https://unsplash.it/1600/1000?image=1014" width="1600">
                    <figcaption>Photo caption</figcaption>
                    </figure>
                </a>
                <a class="gallery-link" href="https://unsplash.it/1200/1600?image=267">
                    <figure class="gallery-image">
                    <img height="1600" src="https://unsplash.it/1200/1600?image=267" width="1200">
                    <figcaption>Photo caption</figcaption>
                    </figure>
                </a>
                <a class="gallery-link" href="https://unsplash.it/1400/1200?image=266">
                    <figure class="gallery-image">
                    <img height="1200" src="https://unsplash.it/1400/1200?image=266" width="1400">
                    <figcaption>Photo caption</figcaption>
                    </figure>
                </a>
                <a class="gallery-link" href="https://unsplash.it/1200/1600?image=634">
                    <figure class="gallery-image">
                    <img height="1600" src="https://unsplash.it/1200/1600?image=634" width="1200">
                    <figcaption>Photo caption</figcaption>
                    </figure>
                </a>
                <a class="gallery-link" href="https://unsplash.it/1400/1600?image=923">
                    <figure class="gallery-image">
                    <img height="1600" src="https://unsplash.it/1400/1600?image=923" width="1400">
                    <figcaption>Photo caption</figcaption>
                    </figure>
                </a>
                <a class="gallery-link" href="https://unsplash.it/1000/1600?image=682">
                    <figure class="gallery-image">
                    <img height="1600" src="https://unsplash.it/1000/1600?image=682" width="1000">
                    <figcaption>Photo caption</figcaption>
                    </figure>
                </a>
                <a class="gallery-link" href="https://unsplash.it/1400/1200?image=173">
                    <figure class="gallery-image">
                    <img height="500" src="https://unsplash.it/1400/1200?image=173" width="1400">
                    <figcaption>Photo caption</figcaption>
                    </figure>
                </a>
            
                </article>


            @endsection