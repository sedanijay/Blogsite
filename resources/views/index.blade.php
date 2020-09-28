@extends('layouts.app')

@section('content')
    <div class="site-section bg-light">
      <div class="container">
        <div class="row align-items-stretch retro-layout-2">
          <div class="col-md-4">
            <a href="/blogs/Tech" class="h-entry mb-30 v-height gradient" style="background-image: url('assets/images/img_1.jpg');">
              
              <div class="text">
                <h2>Tech Blogs</h2>
                <span class="post-category bg-info">Tech</span>
              </div>
            </a>
            <a href="/blogs/Business" class="h-entry v-height gradient" style="background-image: url('assets/images/img_2.jpg');">
              
              <div class="text">
                <h2>Business Blogs</h2>
                <span class="post-category bg-success">Business</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="/blogs/Entertainment" class="h-entry img-5 h-100 gradient" style="background-image: url('assets/images/img_v_1.jpg');">
              
              <div class="text">
                <div class="post-categories mb-3">
                  <span class="post-category bg-warning">Entertainment</span>
                </div>
                <h2>Entertainment Blogs</h2>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="/blogs/Travel" class="h-entry mb-30 v-height gradient" style="background-image: url('assets/images/img_3.jpg');">
              
              <div class="text">
                <h2>Travel Blogs</h2>
                <span class="post-category bg-danger">Travel</span>
              </div>
            </a>
            <a href="/blogs/Bibliography" class="h-entry v-height gradient" style="background-image: url('assets/images/img_4.jpg');">
              
              <div class="text">
                <h2>Bibliography Blogs</h2>
                <span class="post-category bg-warning">Bibliography</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection