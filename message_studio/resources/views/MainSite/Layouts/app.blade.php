<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    @yield('SEO')
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

    @include('cookieConsent::index')
        <div id="page">
        <nav class="fh5co-nav" role="navigation">
                <div class="container">
                    <div class="row navbar">
						<div class="col-xs-2 logo">
                            <a href="{{ route('RouteController.home')}}"><img class="img-responsive" src="images/logos/lotus_mini_logoo.png" alt="lotus logo"></a>
                        </div>
                        <div class="col-xs-10 menu-1 text-right">
                            @yield('navbar_active_link')
                           
                        </div>
                    </div>
                </div>
            </nav>
        

            @yield('cover')
            



        
            @yield('content')
            


            
            <footer id="fh5co-footer" role="contentinfo">
                <div class="container footer-container">
                    <div class="row row-pb-md">              
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-1">
                            <div class="col-xs-2 logo">
                                <a href="{{ route('RouteController.home')}}"><img class="img-responsive-footer" src="images/resized_logo_beli.png" alt="pallas logo beli"></a>
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
									<input type="submit" value="Naroči se" class="btn btn-primary submit-footer" data-toggle="modal" data-target="#exampleModal">
                                    
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Naročanje na E-novice</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                S klikom na gumb "Strinjam se" se strinjate, da lahko obdelujemo podatke (vaš e-poštni naslov), ki ste ga navedli v vpisnem okencu za namen pošiljanja ponudb, novic, obvestil itd. Prav tako pa klikom na gumb soglašate s pogoji pristopne izjave.

                                                pravico imate, da se od e-novic kadarkoli odjavite.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary e-mail" data-dismiss="modal">Zapri</button>
                                                <button type="button" class="btn btn-primary">Strinjam se</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                        </div>

                        
                    </div>
             
                    
                    
					<hr class="hr-footer">
					
                             
                </div>
                <div class="container">
                    <div class="row row-pb-md-footer">
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-1">
                            <p class="p-footer">2020 Pallas©. Vse pravice pridržane</p>
						</div>
						
						
                        <div class="col-md-6 col-sm-12 col-xs-12 fh5co-widget-footer col-md-push-3">
                            <a href="https://www.facebook.com/lovrencicksenijaterapevtskimaser"><img class="img-icon" src="images/icons/icons_social/facebook-24.png" alt="facebook"></a>
                            <a href="https://www.instagram.com/pallas_masazni_salon/"><img class="img-icon" src="images/icons/icons_social/instagram-24-2.png" alt="instagram"></a>
                        </div> 
                        
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-3">
                            <a href="{{ route('RouteController.cookies')}}" class="cookies-hover-footer">piškotki in zasebnost</a>
						</div>   
                      
                    </div>
                </div>
        
            </footer>



        </div>
    </body>
</html>


