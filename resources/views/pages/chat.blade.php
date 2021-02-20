@extends('layouts.frontend')

@section('frontend_section')

  <!-- ACTIONBER AREA START -->

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
