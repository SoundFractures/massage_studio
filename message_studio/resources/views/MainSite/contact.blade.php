
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
                            <a href="{{ route('RouteController.home')}}"><img class="img-responsive" src="images/logo_pisava.png" alt=""></a>
                        </div>
                        <div class="col-xs-10 menu-1 text-right">
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
                                <li><a href="{{ route('RouteController.blog')}}">Blog</a></li>
                                <li  class="active"><a href="{{ route('RouteController.contact')}}">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

						
			<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/kontakt1.jpg);">
				<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 text-center">
							<div class="display-t">
								<div class="display-tc animate-box" data-animate-effect="fadeIn">
									<h1>Kontakt</h1>
								
									
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</header>
	
			
			<div id="fh5co-contact">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-md-push-1 animate-box">
							
							<div class="fh5co-contact-info">
								<h3>Kontakt</h3>
								<ul>
									<li><img class="img-icon" src="images/icons/resized_location.png" alt="">Bistriška cesta 60a, 2319 Poljčane</li>
									<li><img class="img-icon" src="images/icons/resized_phone.png" alt="telefon">040 853 650 </li>
									<li><img class="img-icon" src="images/icons/resized_mail.png" alt="e-naslov">pallasmasaznisalon@gmail.com</li>
								</ul>
							</div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d688.9560167473284!2d15.577807788135557!3d46.313331425008684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476586b105f64299%3A0x67692620d44dea98!2sBistri%C5%A1ka%20cesta%2060%2C%202319%20Polj%C4%8Dane!5e0!3m2!1ssl!2ssi!4v1584984988712!5m2!1ssl!2ssi" width="450" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		
						</div>
						<div class="col-md-6 animate-box">
							<h3>Povpraševanje</h3>
							<form action="#">
								<div class="row form-group">
									<div class="col-md-6">
										<!-- <label for="fname">Ime*</label> -->
										<input type="text" id="fname" class="form-control" placeholder="Ime*">
									</div>
									<div class="col-md-6">
										<!-- <label for="lname">Priimek*</label> -->
										<input type="text" id="lname" class="form-control" placeholder="Priimek*">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="email">Email*</label> -->
										<input type="text" id="email" class="form-control" placeholder="E-mail*">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="subject">Zadeva* dropdown</label> -->
										<input type="text" id="subject" class="form-control" placeholder="Zadeva* dropdown">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="message">Sporočilo*</label> -->
										<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Vaše sporočilo*"></textarea>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" value="Send Message" class="btn btn-primary">
								</div>

							</form>		
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
                            <h3 class="footer-text">Delovni čas</h3>
                            <p>Po dogovoru</p>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-2">
                            <h3>Kontakt</h3>
                            <p>Bistriška cesta 60a <br> 2319 Poljčane <br> 040 853 650 <br> pallasmasaznisalon@gmail.com</p>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-3">
                            <h3>Zadnje v blogu</h3>
                       
                       
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 fh5co-widget col-md-push-3">
                        <h3>Naročite se na E-novice</h3>
                        
								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="email">Email*</label> -->
										<input type="text" id="email" class="form-control mail-footer" placeholder="E-naslov*">
									</div>
								</div>
                                <div class="form-group">
									<input type="submit" value="Naroči se" class="btn btn-primary submit-footer">
								</div>
                    
                        </div>
                    </div>
                    <hr class="hr-footer">
                    
                </div>
               
            </footer>



        </div>
    </body>
</html>
