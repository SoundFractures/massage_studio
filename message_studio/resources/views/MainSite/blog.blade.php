
	    @extends('MainSite.Layouts.app')


        @section('Seo')
			
            <title>Masazni salon Pallas | Blog</title>
    
            <meta name="description" content="V mojem blogu si lahko preberete več o raznih masažah, in drugih izdelkov s katerimi lahko izboljšate svoje zdravje in počutje">
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
			
				<li><a href="{{ route('RouteController.pricelist')}}">Cenik</a></li>
				<li><a href="{{ route('RouteController.gallery')}}">Galerija</a></li>
				<li class="active"><a href="{{ route('RouteController.blog')}}">Blog</a></li>

				<li><a href="{{ route('RouteController.contact')}}">Kontakt</a></li>
			</ul>
		@endsection

        @section('cover')
            <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/blog_h1.jpg);">
                <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 text-center">
                            <div class="display-t">
                                <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                    <h1>Blog</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </header>
        @endsection
			
        @section('content')
            <div id="fh5co-blog" class="fh5co-bg-section">

                <div class="row justify-content-left">
                    <div class="container">
                        <div class="row">
                 
                            @foreach($blogs as $blog)
                            <div class="col-lg-4 col-md-4">
                                <div class="fh5co-blog animate-box">
                                    <a href="/blog_article/{{$blog->id}}"><img class="img-responsive" src="images/blog_img1.jpg" alt="blog1"></a>
                                    <div class="blog-text">
                                        <h3><a href="/blog_article/{{$blog->id}}"><b>{{$blog->title}}</b></a></h3>
                                        <!--<span class="posted_on">Nov. 15th</span>-->
                                    
                                        <p>{{ substr(strip_tags($blog->body), 0, 100) }}...</p><br>
                                        <a href="/blog_article/{{$blog->id}}" class="btn btn-primary">Preberi več...</a>
                                      
                                    </div> 
                                </div>
                            </div>
                            
                            @endforeach
                            
                 
                            
                            
                
                        </div>
                        <div class="pagination-wrapper">
                            {{$blogs->links()}}
                        </div>
                   
                    </div>
                </div>
            </div>
            @endsection

            