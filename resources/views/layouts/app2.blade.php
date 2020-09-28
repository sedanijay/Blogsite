<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Interview Task Blog</title>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/assets/css/aos.css">

    <link rel="stylesheet" href="/assets/css/style.css">



    <style type="text/css">
      .footer2 {
         position: fixed;
         left: 0;
         bottom: 0;
         width: 100%;
         background-color: red;
         color: white;
         text-align: center;
      }

      li.dropdown {
        display: inline-block;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }

      .dropdown-content a:hover {background-color: #f1f1f1;}

      .dropdown:hover .dropdown-content {
        display: block;
      }
    </style>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-12 search-form-wrap js-search-form">
            
          </div>

          <div class="col-4 site-logo">
            <a href="/" class="text-black h2 mb-0">Interview Task Blog</a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                <li><a href="/">Home</a></li>
                <!-- <li><a href="business.php">My Profile</a></li> -->
                <li><a href="/MyBlogs">My Blogs</a></li>
                <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>

              </ul>
            </nav>
            <button class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></button></div>


          </div>

      </div>
    </header>


    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!--Site Footer-->
    <div class="footer2"></div>
    <!-- 
    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
          </div>
          <div class="col-md-3 ml-auto">
            
          </div>
          <div class="col-md-4">
            <div>
              <br><br>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved
              </p>
          </div>
        </div>
      </div>
    </div> -->