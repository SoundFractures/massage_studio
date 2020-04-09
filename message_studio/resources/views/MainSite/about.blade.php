<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Masazni salon Pallas | O meni </title>
        <meta name="description" content="Pozdravljeni v moj masažni salon Pallas, sem Ksenija Lovrenčič in sem certificarana maserka, tukaj si lahko preberete več o meni">
		<meta name="keywords" content="masaža,klasična masaža,športna masaža,refleksna masaža stopal, masaža obraza, access bars terapija,zdravljenje,zdravje,sprostitev">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154513897-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-154513897-1');
		</script>


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
                            <a href="{{ route('RouteController.home')}}"><img class="img-responsive" src="images/logos/lotus_mini_logoo.png" alt=""></a>
                        </div>
						<div class="col-xs-10 menu-1 text-right">
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
						</div>
					</div>
				</div>
			</nav>


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
		
			
			<div id="fh5co-about">
				<div class="container">
					<div class="about-content">
						<div class="row animate-box">
								
							<div class="col-md-8 col-md-offset-4 text-center fh5co-heading">
							<h1>Ksenija Lovrenčič</h1>
							<img class="img-responsive" src="images/ksenija_krog.png" alt="about">
									<div class="desc">
											<h4>Sem terapevtska maserka, vedno nasmejana in pozitivno usmerjena. Zanima me vse, kar je povezano
											 s telesom in zdravim načinom življenja, zato že kar nekaj let sama izdelujem domačo kozmetiko, za
											 lastno porabo. Prepričana sem, da lahko sami veliko pripomoremo k izboljšanju zdravja in kvalitete
											 našega življenja.</h4>
											<h4>Masaža je velik del mojega življenja. Morda se kot mlajša punca tega nisem zavedala, vendar je življenje poskrbelo, da me usmeri na tisto pot, ki je prava zame. Svoje znanje rada nadgrajujem in izpopolnjujem. V veliko zadovoljstvo mi je, da s svojim znanjem in izkušnjami pomagam ljudem, zaradi vsakodnevnih naporov, obremenitev in stresa, ter vam tako pomagam ponovno vzpostaviti energetsko ravnovesje in izboljšati fizično stanje telesa.</h4>
											<h4 class="quotes">“Zdravje je največje darilo, zadovoljstvo je največje bogastvo, zvestoba najboljši odnos.” - Buddha</h4></p>
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
                        
                    
                        <div class="col-md-4 col-sm-12 col-xs-12 col-md-push-3">
                            <p class="p-footer">2020 Pallas©. Vse pravice pridržane</p>
                        </div>
                    </div>           
                </div>
            </footer>
        
        

		</div>
	</body>
</html>



    

