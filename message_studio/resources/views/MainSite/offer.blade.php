

		@extends('MainSite.Layouts.app')

		@section('Seo')
			<title>Masazni salon Pallas | Ponudba</title>
			<meta name="description" content="Pri nas lahko izbirate med več različnimi masažami, če pa niste prepričami pa vam z veseljem svetujemo">
			<meta name="keywords" content="masaža,klasična masaža,športna masaža,refleksna masaža stopal, masaža obraza, access bars terapija,zdravljenje,zdravje,sprostitev">
        @endsection

		@section('navbar_active_link')
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
        @endsection

		@section('cover')	
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
		@endsection

		@section('content')	
            <div id="fh5co-project-offer">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-10 col-md-offset-2 text-center fh5co-heading-offer">
                            <h1>Masažni salon Pallas</h1>
                            <p class="ponudba">Salon Pallas se lahko pohvali z odličnimi terapevtskimi masažami, s katerimi izboljša oziroma olajša stanje vašega psihofizičnega zdravja in vam tako omogoči kvalitetnejše in polnejše življenje. <br/> Pri nas lahko izbirate izmed več različnih vrst masaž:</p>
                        </div>
                    </div>
                </div>  
			</div><br/><br/>

			<nav id="spyscroll">
				<a href="#one" class="stickyBar">	 <img class="img-responsive-offer-icon" src="images/icons/small_icons/small_icon_sport.png" alt="classis massage">Klasična masaža</a>
				<a href="#two" class="stickyBar">    <img class="img-responsive-offer-icon" src="images/icons/small_icons/small_ikone4.png" alt="sport massage">Športna masaža</a>
				<a href="#three" class="stickyBar">  <img class="img-responsive-offer-icon" src="images/icons/small_icons/small_icon_ref.png" alt="feet massage">Refleksna masaža stopal</a>
				<a href="#four" class="stickyBar"> 	 <img class="img-responsive-offer-icon" src="images/icons/small_icons/small_icon_face.png" alt="face massage">Masaža obraza</a>
				<a href="#five" class="stickyBar">   <img class="img-responsive-offer-icon" src="images/icons/small_icons/small_icon_bars.png" alt="access bars massage">Access Bars terapija</a>
			</nav>

			<header id="fh5co-header" class="fh5co-cover-offer" role="banner" style="background-image:url(images/klasicna.jpg);"></header>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-2 text-center fh5co-heading-offer">
					
						<section id="one">
						
							<div id="fh5co-project-offer">					
							<img class="img-responsive-offer" src="images/icons/icon_class.png" alt="classic massage">
									<h2>KLASIČNA MASAŽA</h2>
									<p class="ponudba">Masaža je naravna, učinkovita metoda za lajšanje raznih zdravstvenih težav, z njo ohranjamo zdravje
										in predvsem skrbimo za boljše počutje. Maser z masažnimi tehnikami ne prodira samo v kožo,
										vendar z dobro masažo prodre globje v mišice in kosti. Masaža lahko spodbuja ali miri odvisno od
										hitrosti in globine masiranja.
									</p>
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
								<img class="img-responsive-offer" src="images/icons/icon_sport.png" alt="sport massage">
								<h2>ŠPORTNA MASAŽA</h2>
								<p class="ponudba">Je masaža, pri kateri se maser osredotoča na posamezne skupine mišic, aktivne v posameznem
										športu. Masaža je močna do zelo močna. Pri športnih aktivnostih v mišicah nastaja mišična kislina, ki
										povzroča, da se mišica utrdi in se posledično ne krči več. Pomeni, da je mišica utrujena in to občutite
										kot bolečino. Zato je ta masaža namenjena hitrejšemu pretoku krvi ter pospešuje obnovo mišic.</p>

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
								<img class="img-responsive-offer" src="images/icons/icon_ref.png" alt="feet masage">
								<h2>REFLEKSNA MASAŽA STOPAL</h2>
									<p class="ponudba">Je najstarejša metoda zdravljenja. Pri tej masaži maser na področju stopal in gležnjev masira
									refleksne cone, ki so povezane z našim akustičnim sistemom v telesu. To pomeni, da maser stimulira
									refleksne cone na stopalih in s tem povzroči odziv v organih. Organi se tako prekrvavijo, sprosti se
									tok življenjske energije in posledično se določeno stanje izboljša.
									</p>
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
								<img class="img-responsive-offer" src="images/icons/icon_face.png" alt="face massage">
								<h2>MASAŽA OBRAZA</h2>
									<p class="ponudba">Masaža obraza ima veliko pozitivnih učinkov na vašo kožo in psihično počutje. Je prijeten, sproščujoč
										občutek, zaradi katerega se počutite sveže in pomirjeno. Masaža pomaga pri: napetostih, izboljša tonus kože, zmanjša zabuhlost in izboljša cirkulacijo
									</p>
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
								<img class="img-responsive-offer" src="images/icons/icon_bars.png" alt="access bars">
								<h2>ACCESS BARS TERAPIJA</h2>
									<p class="ponudba">Je nežna tehnika s katero lahko spremenite vse v svojem življenju in telesu. Z nežnim dotikanjem aktiviramo 32 točk na glavi. Posledično po 15 min telo preide v theta stanje, ki je stanje globoke relaksacije. To aktivira samozdravljenje telesa in odpira prostor zavedanja v vašem življenju.</p>
							</div>
						</section>
					</div>
				</div>
			</div>
	 
	
			@endsection




				

	
