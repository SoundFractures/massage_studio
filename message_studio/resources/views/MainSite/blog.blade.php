
	    @extends('MainSite.Layouts.app')

        @section('cover')
            <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/blog_h1.jpg);">
                <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 text-center">
                            <div class="display-t">
                                <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                    <h1>Blog</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </header>
        @endsection
			
        @section('content')
            <div id="fh5co-blog" class="fh5co-bg-section">

                <div class="row justify-content-left">
                    <div class="container">
                        <div class="row">
                 
                            @foreach($blogs as $blog)
                            <div class="col-lg-4 col-md-4">
                                <div class="fh5co-blog animate-box">
                                    <a href="/blog_article/{{$blog->id}}"><img class="img-responsive" src="images/blog_img1.jpg" alt="blog1"></a>
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
                        <div class="pagination-wrapper">
                            {{$blogs->links()}}
                        </div>
                   
                    </div>
                </div>
            </div>
            @endsection

            