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
          <h1 class="wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s">About Us</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- inner_bannner End -->

  <!-- About-section -->
  <div class="about_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="about_head">
            <h2>ABOUT SUCCESS PARTNERS</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="about_pageText">
            <h2>{{ $idea->name }}</h2>
            <?= html_entity_decode($idea->content) ?>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="about_head_text">
      <h4>Simply, increasing your Net Profit by optimizing and rationalizing your Cost.</h4>
    </div> -->
  </div>
  <!-- About-section -->

  <!-- Why-Us-section -->
  <div class="Why_Us_section about_pageWhyUs">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-5 col-xs-12">
          <div class="services_head Why_UsText">
            <!-- <h4>Why Us</h4> -->
            <h2>{{ $whysp->name }}</h2>
            <?= html_entity_decode($whysp->content) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="Why_UsImg">
      <div class="container-fluid text-right">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <img src="{{asset($whysp->image)}}" alt="img">
        </div>
      </div>
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