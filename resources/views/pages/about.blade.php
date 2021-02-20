@extends('layouts.frontend')

@section('frontend_section')

  <!-- ACTIONBER AREA START -->
  <section id="actionber">
      <section id="logo">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-6">
                      <a href="{{ url('/') }}">HealthMeter</a>
                  </div>
                  <div class="col-lg-3 col-6 ml-auto text-center">
                      <span>Version 1.0.0</span>
                  </div>
              </div>
          </div>
      </section>
      <div class="container">
          <div class="row">
              <div class="col-lg-8 m-auto">
                  <div class="row">
                      <div class="col-lg-3 col-3 text-center">
                          <div class="action-link">
                              <a href="{{ url('/') }}" class="">
                                  <i class="fa fa-home" aria-hidden="true"></i>
                                  <h4>Home</h4>
                              </a>
                          </div>
                      </div>
                      <div class="col-lg-3 col-3 text-center">
                          <div class="action-link">
                              <a href="{{ url('about') }}" class="active-m">
                                  <i class="fa fa-info-circle" aria-hidden="true"></i>
                                  <h4>About</h4>
                              </a>
                          </div>
                      </div>
                      <div class="col-lg-3 col-3 text-center">
                          <div class="action-link">
                              <a href="#">
                                  <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                  <h4><a href="https://themeforest.net/user/giantco/portfolio?direction=desc&order_by=sortable_at&view=grid">Store</a></h4>
                              </a>
                          </div>
                      </div>
                      <div class="col-lg-3 col-3 text-center">
                          <div class="action-link">
                              <a href="{{ url('/chat') }}" >
                                  <i class="fa fa-comments-o" aria-hidden="true"></i>
                                  <h4>Chat</h4>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- ACTIONBER AREA ENDS -->

  <!-- DASHBOARD AREA START -->
  <section id="dashboard">
   <div class="container">
     <div class="row">
       <div class="col-lg-12 user-information">
         <h3>Under Construction</h3>
       </div>
     </div>
   </div>
  </section>
  <!-- DASHBOARD AREA ENDS -->

@endsection
