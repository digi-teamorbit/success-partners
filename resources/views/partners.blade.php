@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

  <!-- inner_bannner Start -->
  <div class="inner_banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h1 class="wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s">Our Partners</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- inner_bannner End -->

  <!-- About-section -->
  <div class="about_section">
    <div class="container">
      <div class="flexRow">
        @foreach ($partners as $partner)
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="logoBox text-center flexCol">
            <a href="{{url($partner->url)}}"><img name="{{ $partner->name }}" src="{{ asset($partner->image) }}" alt="img" /></a>
          </div>
        </div>
          @endforeach
      </div>
    </div>
  </div>
  <!-- About-section -->


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