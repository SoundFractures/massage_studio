
	    @extends('MainSite.Layouts.app')

        @section('cover')					
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
        @endsection
	
		@section('content')		
			<div id="fh5co-contact">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-md-push-1 animate-box">
							
							<div class="fh5co-contact-info">
								<h2>Kontakt</h2>
								
									<p class="o_meni"><img class="img-icon" src="images/icons/resized_location.png" alt="address">Bistriška cesta 60a, 2319 Poljčane</p>
									<p class="o_meni"><img class="img-icon" src="images/icons/resized_phone.png" alt="phone">040 853 650 </p>
									<p class="o_meni"><img class="img-icon" src="images/icons/resized_mail.png" alt="e-mail">pallasmasaznisalon@gmail.com</p>
								
							</div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d688.9560167473284!2d15.577807788135557!3d46.313331425008684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476586b105f64299%3A0x67692620d44dea98!2sBistri%C5%A1ka%20cesta%2060%2C%202319%20Polj%C4%8Dane!5e0!3m2!1ssl!2ssi!4v1584984988712!5m2!1ssl!2ssi" width="450" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		
						</div>
						<div class="col-md-6 animate-box">
							<h2>Povpraševanje</h2>
							<form action="/questions" method="POST" type="hidden" name="_token"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
								<div class="row form-group">
									<div class="col-md-6">
										<!-- <label for="fname">Ime*</label> -->
										<input type="text" id="fname" class="form-control" placeholder="Ime*" name="firstName">
									</div>
									<div class="col-md-6">
										<!-- <label for="lname">Priimek*</label> -->
										<input type="text" id="lname" class="form-control" placeholder="Priimek*" name="lastName">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="email">Email*</label> -->
										<input type="text" id="email" class="form-control" placeholder="E-mail*" name="email">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="subject">Zadeva*</label> -->
										<select id="subject" class="form-control" name="category" placeholder="Zadeva*">
                                            <option value="Klasična masaža">Klasična masaža</option>
                                            <option value="Športna masaža">Športna masaža</option>
                                            <option value="Refleksna masaža stopal">Refleksna masaža stopal</option>
                                            <option value="oMasaža obraza">Masaža obraza</option>
                                            <option value="Access Bars Terapija">Access Bars Terapija</option>
                                            <option value="Drugo">Drugo</option>
                                          </select>
                                    </div>
                                    
                                       

								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<!-- <label for="message">Sporočilo*</label> -->
										<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Vaše sporočilo*"></textarea>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" value="Pošlji" class="btn btn-primary">
								</div>

							</form>		
						</div>
					</div>
					
				</div>
			</div>
        @endsection
        
