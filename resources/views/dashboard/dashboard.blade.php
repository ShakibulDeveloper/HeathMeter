@extends('layouts.frontend')

@section('frontend_section')
  <!-- Preloader Part Start -->
  <div class="preloader">
      <div class="frame">
          <div class="center">
           <h3>Data Processing...</h3>
          </div>
      </div>
  </div>
  <!-- Preloader Part End -->
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
              <div class="col-lg-6">
                  <div class="user-information">
                      <h3>{{ $name }},</h3>
                      <span>We have found your</span>
                  </div>
              </div>
          </div>
          @php
            if ($gender == 1) {
             $bmr = 66+(13.7*$weight)+(5*$height_in_cm)-(6.8*$age);
             if ($bmr < 2250) {
              $energe_demand = 2250 - $bmr;
             }
             else {
               $energe_demand = $bmr - 2250;
             }
            }
            else {
              $bmr = 655+(9.6*$weight)+(1.8*$height_in_cm)-(4.7*$age);
              $energe_demand = 2250 - $bmr;
              if ($bmr < 2250) {
               $energe_demand = 2250 - $bmr;
              }
              else {
                $energe_demand = $bmr - 2250;
              }
            }
            $height_x2 =  $height_in_meter*$height_in_meter;
            $bmi = $weight/$height_x2;

          @endphp
          <div class="row padding_1">
              <div class="col-lg-3 col-4 data_1">
                  <h3>{{ number_format($bmi, 1) }}</h3>
                  <p>BMI Value</p>
              </div>
              <div class="col-lg-3 col-4 data_1">
                  <h3>{{ number_format($bmr, 0) }}</h3>
                  <p>BMR Value</p>
              </div>
              <div class="col-lg-3 col-4 data_1">
                  <h3>{{ number_format($energe_demand, 2) }} <span>cal</span></h3>
                  @if ($bmr < 2250)
                    <p>Energe Require</p>
                    @else
                    <p>Energe Need to Reduce</p>
                  @endif

              </div>
          </div>
          <div class="row padding_2">
              <div class="col-lg-5 col-sm-12">
                  <div class="main-result">
                      <div class="row">
                          <div class="col-lg-6 col-sm-7 main-result-txt">

                              <span>Your Health Condition</span>
                              @if (number_format($bmi, 1) >= 18.5 &&  number_format($bmi, 1) <= 24.9)
                                 <h3 class="green">Good</h3>
                               @elseif (number_format($bmi, 1) >= 40)
                                 <h3 class="red">Danger</h3>
                               @elseif (number_format($bmi, 1) < 18.5)
                                 <h3 class="red">Poor</h3>
                                 @else
                                   <h3 class="yellow">Moderate</h3>
                              @endif

                          </div>
                          <div class="col-lg-5 col-sm-4 text-center main-result-percent">
                            @php
                            if (number_format($bmi, 1) < 40 ) {
                              $divide = number_format($bmi, 0)/40;
                              $percentage =  $divide*100;
                            }
                            else {
                              $percentage =  0;
                            }

                            @endphp
                            @if (number_format($bmi, 1) >= 18.5 &&  number_format($bmi, 1) <= 24.9)
                               <span class="green-border">{{ $percentage }}</span>
                             @elseif (number_format($bmi, 1) >= 40)
                               <span class="red-border">{{ $percentage }}</span>
                             @elseif (number_format($bmi, 1) < 18.5)
                               <span class="red-border">{{ $percentage }}</span>
                               @else
                                 <span class="yellow-border">{{ $percentage }}</span>
                            @endif

                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-7">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th scope="col" class="mob-hide">Serial</th>
                              <th scope="col">According to Physical Condition</th>
                              <th scope="col">Your Demand</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row" class="mob-hide">1</th>
                              <td>Not Working</td>
                              <td class="kcal">{{ number_format($bmr*1.2, 1 ) }} kcal</td>
                          </tr>
                          <tr>
                              <th scope="row" class="mob-hide">2</th>
                              <td>Light working, play 2-3/7 days</td>
                              <td class="kcal">{{ number_format($bmr*1.375, 1) }} kcal</td>
                          </tr>
                          <tr>
                              <th scope="row" class="mob-hide">3</th>
                              <td>Working, play 2-3/7 days</td>
                              <td class="kcal">{{ number_format($bmr*1.55 , 1) }} kcal</td>
                          </tr>
                          <tr>
                              <th scope="row" class="mob-hide">4</th>
                              <td>Working, play 7 days a week</td>
                              <td class="kcal">{{ number_format($bmr*1.725, 1) }} kcal</td>
                          </tr>
                          <tr>
                              <th scope="row" class="mob-hide">5</th>
                              <td>Hard Working</td>
                              <td class="kcal">{{ number_format($bmr*1.9, 1) }} kcal</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
          <div class="row padding_3">
              <div class="col-lg-5">
                  <div class="doctor_advice">
                      <div class="da_txt">
                          <h3>Doctor's Advice</h3>
                      </div>
                      <div class="comment">

                        @if (number_format($bmi, 1) >= 18.5 &&  number_format($bmi, 1) <= 24.9)
                             <p><b>{{ $name }}</b>, Congratulation! you are having a <b>sound health condition</b>.Your BMI score is <b>{{number_format($bmi, 1)}}</b>, it is in ideal scale for good health. keep it up! </p>

                         @elseif (number_format($bmi, 1) >= 40)
                             <p><b>{{ $name }}</b>, we have checked your health. You are in <b>Extreme obesity</b>. There is a high possibility of death. You must <b>reduce your weight</b>.BMI Score <b>18.5 - 24.9</b> is ideal for good health but your BMI is <b>{{number_format($bmi, 1)}}</b>.So, take <b>reqular excerise</b> and <b>avoid fast foods.</b></p>

                           @elseif (number_format($bmi, 1) < 18.5)
                             <p><b>{{ $name }}</b>, we have checked your health. You have <b>Under Weight</b>; weight is to be <b>increased</b>. You have to <b>take adequate food</b> and <b>enough rest & sleep</b>. <b>18.5 - 24.9</b> is the ideal BMI score for good health.
                             </p>

                           @elseif(number_format($bmi, 1) >= 25 &&  number_format($bmi, 1) <= 29.9)

                             <p><b>{{ $name }}</b>, we have checked your health. You have <b>Over Weight</b>; weight is to be <b>reduce</b>. You have to take <b>selective foods</b> and take <b>exercise reqularly</b>.<b>18.5 - 24.9</b> is the ideal BMI score for good health.
                             </p>

                           @elseif(number_format($bmi, 1) >= 30 &&  number_format($bmi, 1) <= 34.9)

                             <p><b>{{ $name }}</b>, we have checked your health. You are in <b>First stage of obesity</b>; weight is to be <b>reduce</b>. You have to <b>take moderate amount of foods</b> and <b>take exercise reqularly</b>.<b>18.5 - 24.9</b> is the ideal BMI score for good health.
                             </p>

                           @elseif(number_format($bmi, 1) >= 35 &&  number_format($bmi, 1) <= 39.9)

                             <p><b>{{ $name }}</b>, we have checked your health. You are in <b>Second stage of obesity</b>; weight is to be <b>reduce</b>. You have to take <b>moderate amount of foods</b> and <b>take exercise reqularly</b>.<b>18.5 - 24.9</b> is the ideal BMI score for good health.
                             </p>

                           @else
                               <p></p>

                        @endif

                      </div>
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                  </div>
              </div>
              <div class="col-lg-6 alert-pa">
                  <div class="alert alert-warning" role="alert">
                      <p>This Web Application is still in the development phrase. More Features will be added in the upcoming updateds!</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- DASHBOARD AREA ENDS -->

  <!-- COPYRIGHT AREA ENDS -->
  <section id="copyright">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="copy-right-txt">
                      <p>Copyright © <?php echo date("Y"); ?>
                      . All rights reserved by Giantco - Developed by <a href="https://github.com/ShakibulDeveloper/">Shakibul</a></p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- COPYRIGHT AREA ENDS -->
@endsection
