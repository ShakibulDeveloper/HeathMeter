<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="SEO" />
        <meta name="description" content="HealthMeter - Your Personal Health Checker Application" />
      <title>HealthMeter - Your Personal Health Checker Application </title>
      <!--font-awesome icons link-->
      <link rel="stylesheet" href="{{  asset('frontend_assets/css/font-awesome.min.css') }}">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{  asset('frontend_assets/css/bootstrap.min.css') }}">
      <!--main style file-->
      <link rel="stylesheet" href="{{  asset('frontend_assets/css/style.css') }}">
      <link rel="stylesheet" href="{{  asset('frontend_assets/css/responsive.css') }}">
  </head>

  <body id="homepage">
      <!-- Preloader Part Start -->
      <!-- Preloader Part Start -->
      <div class="preloader">
          <div class="frame">
              <div class="center">
                  <div class="dot-1"></div>
                  <div class="dot-2"></div>
                  <div class="dot-3"></div>
              </div>
          </div>
      </div>
      <!-- Preloader Part End -->
      <!-- HEADER AREA START -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">Health <span>Meter</span></a>
              <div class="collapse navbar-collapse menu-main" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto menu-item">
                      <li class="nav-item">
                          <a class="nav-link bor" href="{{ url('notice') }}">Browse More Apps</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
      <!-- HEADER AREA END -->

      <!-- HOMEPAGE AREA START -->
      <section id="banner">
          <div class="banner-main">
              <div class="container">
                  <div class="banner-item">
                      <div class="col-lg-12 text-center">
                          <h1>Helps You to find <span class="typed cr"></span></h1>
                      </div>
                      <div class="col-lg-9 col-md-8 m-md-auto m-auto">
                          <div class="main-box">
                              <form action="{{ route('dashboard') }}" method="post">
                                @csrf
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <div class="form-group">
                                              <input type="text" name="name" class="form-control" placeholder="What is your name?">
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="form-group">
                                              <input type="text" name="age" class="form-control" placeholder="Your Age( ex. 18)">
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="form-group">
                                              <input type="text" name="weight" class="form-control" placeholder="Your weight (ex. 71)">
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="form-group">
                                              <select class="gender custom-select" name="gender">
                                                 <option value="0">Select gender</option>
                                                 <option value="1">Male</option>
                                                 <option value="2">Female</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="form-group">
                                              <input type="text" name="height" class="form-control" placeholder="Your height (ex. 5.8)">
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <button type="submit" class="btn btn-primary test-btn">Start Test</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                  <div class="eyeball-main">
                      <div class="eyeballs">
                          <div class="eye">
                              <div class="cornea"></div>
                          </div>
                      </div>
                      <div class="eyeballs">
                          <div class="eye eye2">
                              <div class="cornea"></div>
                          </div>
                      </div>
                  </div>

              </div>
              @if (session('notice'))
                <!-- notice board -->
                <div class="notice alert alert-success" role="alert">
                  {{ session('notice') }}
                  <a href="https://themeforest.net/user/giantco/portfolio?direction=desc&order_by=sortable_at&view=grid">Visit Store</a>
                </div>
                @else

              @endif
              @if ($errors->all())
                 <ul class="notice alert alert-danger" role="alert">
               @forelse ($errors->all() as $error)
                  <li>*{{ $error }}</li>
               @empty

               @endforelse
                </ul>
              @endif
          </div>
      </section>
      <!-- HOMEPAGE AREA END -->

      <!-- Optional JavaScript -->
      <script src="{{  asset('frontend_assets/js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{  asset('frontend_assets/js/bootstrap.min.js')}}"></script>
      <script src="{{  asset('frontend_assets/js/jquery.isotope.min.js')}}"></script>
      <script src="{{  asset('frontend_assets/js/typed.min.js')}}"></script>
      <script src="{{  asset('frontend_assets/js/custom.js')}}"></script>
  </body>

  </html>
