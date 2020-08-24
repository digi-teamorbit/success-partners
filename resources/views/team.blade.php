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
          <h1 class="wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s">Our Team</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- inner_bannner End -->



  <!-- team-section -->
  <div class="team_section">
    <div class="team_sectionBg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="team_head">
              <h4>TEAM</h4>
              <h2>{{ $members->name }}</h2>
              <?= html_entity_decode($members->content) ?>
            </div>
          </div>
        </div>
        @foreach ($teams as $team)
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="team_slider">
              <div class="teamBox">
                <div class="teamBox_img">
                  <div class="col-md-3 col-sm-4 col-xs-12">
                    <h3>{{ $team->id}} <span>/{{ $team->id}}</span></h3>
                    <img src="{{asset($team->image)}}" alt="img" class="img-circle">
                  </div>
                </div>
                <div class="teamBox_text">
                  <div class="col-md-9 col-sm-8 col-xs-12">
                    <?= html_entity_decode($team->information) ?>
                    <h6>{{$team->name}}</h6>
                    <span>{{$team->role}}</span>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- team-section -->


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