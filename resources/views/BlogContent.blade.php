@extends('layouts.app')

@section('content')
    
    @foreach ($blogs["blogs"] as $blogs_var)
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('/uploads/{{ $blogs_var->HeadImg }}');">
    @endforeach
      <div class="container">
        <div class="row same-height justify-content-center">

          
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              @foreach ($blogs["cat"] as $blogs_var)
              <span class="post-category text-white bg-success mb-3">{{ $blogs_var->cat_name }}</span>
              @endforeach

              @foreach ($blogs["blogs"] as $blogs_var)
              <h1 class="mb-4"><a href="#">{{ $blogs_var->Title }}</a></h1>
              <div class="post-meta align-items-center text-center">
                <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="/assets/images/person_1.jpg" alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1">By {{ $blogs_var -> username }}</span>
                <span>&nbsp;-&nbsp; {{ $blogs_var -> BCreated_at }}</span>
              </div>
              @endforeach

            </div>
          </div>

        </div>
      </div>
    </div>
    
    
    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            

            <div class="post-content-body">
            @foreach ($blogs["blogs"] as $blogs_var)

              <p>{{ $blogs_var -> Content }}</p>

            @endforeach

            <!-- <div class="row mb-5 mt-5">
              <div class="col-md-12 mb-4">
                <img src="/assets/images/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <div class="col-md-6 mb-4">
                <img src="/assets/images/img_2.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <div class="col-md-6 mb-4">
                <img src="/assets/images/img_3.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
            </div> -->

            <!-- @foreach ($blogs["blogs"] as $blogs_var)
                <p>{{ $blogs_var -> Content }}</p>
                <p>{{ $blogs_var -> Content }}</p>
                <p>{{ $blogs_var -> Content }}</p>
            @endforeach
 -->
            </div>

            


            
          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="/assets/images/person_2.jpg" alt="Image Placeholder" class="img-fluid mb-5">
                <div class="bio-body">

                  @foreach ($blogs["blogs"] as $blogs_var)

                    <h2>{{ $blogs_var -> username }}</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>

                    @break
                  @endforeach

                  <p><a href="#" class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->  
            <div class="sidebar-box">
              <h3 class="heading">Popular Posts</h3>
              <div class="post-entry-sidebar">
                <ul>
                  @foreach ($blogs["PopularPosts"] as $blogs_var)
                    <li>
                    <a href="{{ URL('/blogs/content/'.$blogs_var->Title )}}">
                      <img src="/assets/images/img_1.jpg" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4>{{ $blogs_var -> Title }}</h4>
                        <div class="post-meta">
                          <span class="mr-2">{{ $blogs_var -> created_at }}</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Categories</h3>
                <ul class="categories">
                  <li><a href="/blogs/business">business <span>@</span></a></li>
                  <li><a href="/blogs/tech">tech <span>@</span></a></li>
                  <li><a href="/blogs/entertainment">entertainment <span>@</span></a></li>
                  <li><a href="/blogs/blogs">blogs <span>@</span></a></li>
                  <li><a href="/blogs/bibliography">bibliography <span>@</span></a></li>
                </ul>
            </div>
            <!-- END sidebar-box -->

            
          <!-- END sidebar -->

        </div>
      </div>
    </section>
@endsection