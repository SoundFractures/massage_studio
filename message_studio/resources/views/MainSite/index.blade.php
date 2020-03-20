
    @extends('MainSite.layouts.app')
 

        @section('cover')
        <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/headerpic.jpg);">
            <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>Dobrodošli v Pallas</h1>
                                <h2>Masažni salon, kjer lahko napolnite svoje moči.</h2>
                                
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
                            <h2>Masažni salon Pallas</h2>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="#"><img src="{{ asset('images/work-1.jpg') }}" alt="" class="img-responsive">
                                <h3>Pallas</h3>
                                <span>Notranjost</span>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="#"><img src="images/work-2.jpg" alt="" class="img-responsive">
                                <h3>O meni</h3>
                                <span>Predstavitev</span>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                            <a href="#"><img src="images/work-3.jpg" alt="" class="img-responsive">
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
                                    <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="#"><img class="img-responsive" src="images/blog2.jpg" alt=""></a>
                                <div class="blog-text">
                                    <h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
                                    <span class="posted_on">Nov. 15th</span>
                                    <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="#"><img class="img-responsive" src="images/blog3.jpg" alt=""></a>
                                <div class="blog-text">
                                    <h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                                    <span class="posted_on">Nov. 15th</span>
                                    <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @endsection
