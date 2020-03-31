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
		<script type="text/javascript" src="js/test.js"></script>


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
								<li><a href="{{ route('RouteController.home')}}">Domov</a></li>
                                <li><a href="{{ route('RouteController.about')}}">O meni</a></li>
                               
							   
							    <li class="has-dropdown active">
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
		
			<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/klasicna2.jpg);">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1 text-center">
								<div class="display-t">
									<div class="display-tc animate-box" data-animate-effect="fadeIn">
										<h1>Ponudba</h1>
										
										
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
                        <div class="col-md-10 col-md-offset-2 text-center fh5co-heading-offer">
                            <h1>Masažni salon Pallas</h1>
                            <p>Salon Pallas se lahko pohvali z odličnimi terapevtskimi masažami, s katerimi izboljša oziroma olajša stanje vašega psihofizičnega zdravja in vam tako omogoči kvalitetnejše in polnejše življenje. <br/> Pri nas lahko izbirate izmed več različnih vrst masaž:</p>
                        </div>
                    </div>
                </div>  
			</div>

			<nav id="spyscroll">
				<a href="#one">Klasična masaža</a>
				<a href="#two">Športna masaža</a>
				<a href="#three">Refleksna masaža stopal</a>
				<a href="#four">Masaža obraza</a>
				<a href="#five">Access Bars terapija</a>
			</nav>

			<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/klasicna2.jpg);"></header>
			

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-2 text-center fh5co-heading-offer">
						<section id="one">
							<div id="fh5co-project-offer">					
								<img class="img-responsive-offer" src="images/icons/icon_class.png" alt="">
									<h2>KLASIČNA MASAŽA</h2>
									<h4>Masaža je naravna, učinkovita metoda za lajšanje raznih zdravstvenih težav, z njo ohranjamo zdravje
										in predvsem skrbimo za boljše počutje. Maser z masažnimi tehnikami ne prodira samo v kožo,
										vendar z dobro masažo prodre globje v mišice in kosti. Masaža lahko spodbuja ali miri odvisno od
										hitrosti in globine masiranja.
									</h4>
							</div>
						</section>
					</div>
				</div>
			</div>  

			

	
			<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/sportna_klasicna.jpg);"></header>


			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-2 text-center fh5co-heading-offer">
						<section id="two">
							<div id="fh5co-project-offer">
								<img class="img-responsive-offer" src="images/icons/icon_sport.png" alt="">
								<h2>ŠPORTNA MASAŽA</h2>
								<h4>Je masaža, pri kateri se maser osredotoča na posamezne skupine mišic, aktivne v posameznem
										športu. Masaža je močna do zelo močna. Pri športnih aktivnostih v mišicah nastaja mišična kislina, ki
										povzroča, da se mišica utrdi in se posledično ne krči več. Pomeni, da je mišica utrujena in to občutite
										kot bolečino. Zato je ta masaža namenjena hitrejšemu pretoku krvi ter pospešuje obnovo mišic.</h4>

							</div>
						</section>
					</div>
				</div>
			</div>  

			<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/refleksivna.jpg);"></header>

			<div class="container">	
				<div class="row">
					<div class="col-md-10 text-center fh5co-heading-offer">
						<section id="three">
							<div id="fh5co-project-offer">
								<img class="img-responsive-offer" src="images/icons/icon_ref.png" alt="">
								<h2>REFLEKSNA MASAŽA STOPAL</h2>
									<h4>Je najstarejša metoda zdravljenja. Pri tej masaži maser na področju stopal in gležnjev masira
									refleksne cone, ki so povezane z našim akustičnim sistemom v telesu. To pomeni, da maser stimulira
									refleksne cone na stopalih in s tem povzroči odziv v organih. Organi se tako prekrvavijo, sprosti se
									tok življenjske energije in posledično se določeno stanje izboljša.
								</h4>
							</div>
						</section>
					</div>
				</div>
			</div>


			<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/head-650878_1920.jpg);"></header>

			<div class="container">	
				<div class="row">
					<div class="col-md-10 text-center fh5co-heading-offer">
						<section id="four">
							<div id="fh5co-project-offer">
								<img class="img-responsive-offer" src="images/icons/icon_face.png" alt="">
								<h2>MASAŽA OBRAZA</h2>
									<h4>Masaža obraza ima veliko pozitivnih učinkov na vašo kožo in psihično počutje. Je prijeten, sproščejoč
										občutek, zaradi katerega se počutite sveže in pomirjeno.</h4>
									<h4>Masaža pomaga pri: napetostih, izboljša tonus kože, zmanjša zabuhlost in izboljša cirkulacijo
									</h4>
							</div>
						</section>
					</div>
				</div>
			</div>


			<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/acces_bars.jpg);"></header>

			<div class="container">	
				<div class="row">
					<div class="col-md-10 text-center fh5co-heading-offer">
						<section id="five">
							<div id="fh5co-project-offer">
								<img class="img-responsive-offer" src="images/icons/icon_bars.png" alt="">
								<h2>ACCESS BARS TERAPIJA</h2>
									<h4>Masaža obraza ima veliko pozitivnih učinkov na vašo kožo in psihično počutje. Je prijeten, sproščejoč
										občutek, zaradi katerega se počutite sveže in pomirjeno.</h4>
										<h4>Masaža pomaga pri: napetostih, izboljša tonus kože, zmanjša zabuhlost in izboljša cirkulacijo
										</h4>
							</div>
						</section>
					</div>
				</div>
			</div>
	 
	
			<!--
			

			<div id="fh5co-project">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-4 text-center fh5co-heading-offer">
							<img class="img-responsive-footer" src="images/icons/resized_ikone1.png" alt="">
                            <h2>KLASIČNA MASAŽA</h2>
                            <p>Masaža je naravna, učinkovita metoda za lajšanje raznih zdravstvenih težav, z njo ohranjamo zdravje
								in predvsem skrbimo za boljše počutje. Maser z masažnimi tehnikami ne prodira samo v kožo,
								vendar z dobro masažo prodre globje v mišice in kosti. Masaža lahko spodbuja ali miri odvisno od
								hitrosti in globine masiranja.
							</p>
                        </div>
                    </div>
                </div>  
			</div> -->




				

	

            
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
