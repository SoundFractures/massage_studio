
    @extends('MainSite.layouts.app')
 

 @section('cover')
 <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/headerpic.jpg);">
     <div class="overlay">
     <div class="container">
         <div class="row">
             <div class="col-md-10 col-md-offset-1 text-center">
                 <div class="display-t">
                     <div class="display-tc animate-box" data-animate-effect="fadeIn">
                         <h1>Povprasevanje</h1>
                     
                         
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
 </header>
 @endsection


 @section('content')
     
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Kontakt</h3>
						<ul>
							<li class="address">Bistriška cesta 60a <br> 2319 Poljčane</li>
							<li class="phone"><a href="tel://1234567920">040 853 650 </a></li>
							<li class="email"><a href="mailto:info@yoursite.com">pallasmasaznisalon@gmail.com</a></li>
						</ul>
					</div>

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

 @endsection
