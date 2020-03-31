
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script type="text/javascript" src="js/app.js" defer></script>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        
        <!-- Bootstrap -->
        <!--<script src="js/bootstrap.min.js"></script>-->
        
        <!-- Waypoints -->
        <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
        
        <!-- Main -->
        <script type="text/javascript" src="js/main.js"></script>


          <!-- <script type="text/javascript" src="js/test.js"></script>-->
        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Orange tempalte fonts --->
        <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">

        
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    
    </head>
    <body>

        <div id="page">

            <nav class="fh5co-nav" role="navigation">
                <div class="container">
                    <div class="row navbar">
                        <div class="col-xs-2 logo">
                            <a href="{{ route('RouteController.home')}}"><img class="img-responsive" src="images/logos/logo_pisava.png" alt=""></a>
                        </div>
                        <div class="col-xs-10 menu-1 text-right">
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
                        </div>
                    </div>
                </div>
            </nav>
        
        
            <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/resized_headerpic.jpg);">
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
        

            <div id="fh5co-project">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-4 text-center fh5co-heading">
                            <h2 class="h2-animate">Masažni salon Pallas</h2>
                            <p>Salon Pallas se lahko pohvali z odličnimi terapevtskimi masažami, s katerimi izboljša oziroma olajša stanje Vašega psihofizičnega zdravja in Vam tako omogoči kvalitetnejše in polnejše življenje.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="{{ route('RouteController.gallery')}}"><img src="images/salon.jpg" alt="" class="img-responsive">
                                <h3>Pallas</h3>
                                <span>Galerija</span>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="{{ route('RouteController.about')}}"><img src="images/aboutme.jpg" alt="" class="img-responsive">
                                <h3>O meni</h3>
                                <span>Predstavitev</span>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="{{ route('RouteController.offer')}}"><img src="images/services.jpg" alt="" class="img-responsive">
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
                        <div class="col-lg-4 col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="#"><img class="img-responsive" src="images/blog1.jpg" alt=""></a>
                                <div class="blog-text">
                                    <h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                    <span class="posted_on">Nov. 15th</span>
                                
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <a href="#" class="btn btn-primary">Preberi več...</a>
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="#"><img class="img-responsive" src="images/blog2.jpg" alt=""></a>
                                <div class="blog-text">
                                    <h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
                                    <span class="posted_on">Nov. 15th</span>
                
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <a href="#" class="btn btn-primary">Preberi več...</a>
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="#"><img class="img-responsive" src="images/blog3.jpg" alt=""></a>
                                <div class="blog-text">
                                    <h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                    <span class="posted_on">Nov. 15th</span>
                                    
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <a href="#" class="btn btn-primary">Preberi več...</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
            <footer id="fh5co-footer" role="contentinfo">
                <div class="container">
                    <div class="row row-pb-md">              
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-1">
                            <div class="col-xs-2 logo">
                                <a href="{{ route('RouteController.home')}}"><img class="img-responsive-footer" src="images/resized_logo_beli.png" alt=""></a>
                            </div>
						</div>
						
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-2">
                            <h3>Kontakt</h3>
                            <p>Bistriška cesta 60a <br> 2319 Poljčane <br> 040 853 650 <br> pallasmasaznisalon@gmail.com</p>
						</div>
						
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-3">
                        	<h3 class="footer-text">Delovni čas</h3>
                            <p>Po dogovoru</p>
						</div>
						
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-3">
                        	<h3>Naročite se na E-novice</h3>                        
								<div class="row form-group">
									<div class="col-md-12">
										<input type="text" id="email" class="form-control mail-footer" placeholder="E-naslov*">
									</div>
								</div>
                                <div class="form-group">
									<input type="submit" value="Naroči se" class="btn btn-primary submit-footer">
								</div>
                        </div>
                    </div>
					<hr class="hr-footer">
					
                    <div class="row row-pb-md-footer">              
                        <div class="col-md-4 col-sm-12 col-xs-12 col-md-push-1">
                            
                        </div>
                        
                    
                        <div class="col-md-4 col-sm-12 col-xs-12 col-md-push-1">
                            <p class="p-footer">2020 Pallas©. Vse pravice pridržane</p>
                        </div>
                    </div>           
                </div>
            </footer>
        
        </div>
    </body>
</html>



