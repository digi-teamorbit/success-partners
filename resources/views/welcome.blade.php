@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

 <!-- Slider  Sectiion Start -->
  <div class="main_slider">
    <div class="carousel slide" data-ride="carousel" id="myCarousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img alt="img" src="{{asset('images/slider_img1.jpg')}}">
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="slider_text">

                    <h1 class="wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s">
                      {{ $information->name }} <i class="fa fa-arrow-up" aria-hidden="true"></i>
                    </h1>
                     <?= html_entity_decode($information->content) ?>
                    <a href="{{ url('/contact-us') }}" class="btn_yellow">Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Sectiion End -->

  <div class="who_we_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h3>{{ $mission->name }}</h3>
          <?= html_entity_decode($mission->content) ?>
        </div>
      </div>
    </div>
  </div>


  <!-- Section: Our Services -->
  <div class="our_services">
    <div class="container text-center">
      <h3>Our Boutique Services</h3>
      <a href="{{ url('/our-services') }}" class="btn_yellow">Our Services</a>
    </div>
  </div>


<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection