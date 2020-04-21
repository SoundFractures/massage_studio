

            @extends('MainSite.Layouts.app')

            @section('Seo')
            <title>Masazni salon Pallas | Vzemite si trenutek zase!</title>
            <meta name="description" content="Salon Pallas se lahko pohvali z odličnimi terapevtskimi masažami, privoščite si čas zase in za svoje počutje">
            <meta name="keywords" content="masaža,klasična masaža,športna masaža,refleksna masaža stopal, masaža obraza, access bars terapija,zdravljenje,zdravje,sprostitev">
            @endsection
            
            @section('navbar_active_link')
                <ul>
                    <li class="active"><a href="{{ route('RouteController.home')}}">Domov</a></li>
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
                    <li><a href="{{ route('RouteController.blog')}}">Blog</a></li>

                    <li><a href="{{ route('RouteController.contact')}}">Kontakt</a></li>
                </ul>
            @endsection

            @section('cover')
            <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/header_home2.jpg);" alt="header lamps" >
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 text-center">
                                <div class="display-t">
                                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                        <h1>Dobrodošli v Pallas</h1>                                     
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
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-4 text-center fh5co-heading">
                            <h2 class="h2-animate">Masažni salon Pallas</h2>
                            <p>Salon Pallas se lahko pohvali z odličnimi terapevtskimi masažami, s katerimi izboljša oziroma olajša stanje vašega psihofizičnega zdravja in vam tako omogoči kvalitetnejše in polnejše življenje.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="{{ route('RouteController.gallery')}}"><img src="images/salon.jpg" alt="galerija" class="img-responsive">
                                <h3>Pallas</h3>
                                <span>Galerija</span>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="{{ route('RouteController.about')}}"><img src="images/aboutme.jpg" alt="o meni" class="img-responsive">
                                <h3>O meni</h3>
                                <span>Predstavitev</span>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="{{ route('RouteController.offer')}}"><img src="images/services.jpg" alt="ponudba" class="img-responsive">
                                <h3>Ponudba</h3>
                                <span>Opis storitev</span>
                            </a>
                        </div>
                    </div>
                </div>  
            </div>

      
                            

            <div id="fh5co-blog" class="fh5co-bg-section">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <h2>Novo v blogu</h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($blogs as $blog)
                            <div class="col-lg-4 col-md-4">
                                <div class="fh5co-blog animate-box">
                                    <a href="/blog_article/{{$blog->id}}"><img class="img-responsive" src="{{ asset('images/'.$blog->file) }}" alt=""></a>
                                    
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
                </div>
            </div>
            @endsection
        
       
