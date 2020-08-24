@extends ('layouts.main')

@section ('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->


  <!-- inner_bannner Start -->
  <div class="inner_banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h1 class="wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s">{{ $ourservices->name }}</h1>
          <?=  html_entity_decode($ourservices->content) ?>
        </div>
      </div>
    </div>
  </div>
  <!-- inner_bannner End -->
  <!-- services-page -->  
  @foreach ($services as $service)              
  <div class="services_page" id="{{ $service->id }}">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="services_pageText">
            <h3>{{ $service->name }}</h3>
            <?= html_entity_decode($service->detail) ?>
            <a href="{{ url('/contact-us') }}" class="btn_yellow">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
    <div class="services_imgOne">
      <img src="{{ asset($service->image) }}" alt="img">
    </div>
  </div>
  @endforeach
 
  <!-- services-page -->
  
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