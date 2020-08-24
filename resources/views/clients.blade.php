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
          <h1 class="wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s">Happy Clients</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- inner_bannner End -->

  <!-- Who We Are Sec Start -->

  <section class="who-we-are">
    <div class="container">
      <div class="row">
        @foreach ($clients as $client)
        <div class="col-md-4">
          <div class="tmls-blk">
            <img src="{{ asset('images/tmls-arrow.png') }}" alt="">
            <?= html_entity_decode($client->comment) ?>
            <ul>
              <li>{!! str_repeat('<i class="fa fa-star" aria-hidden="true"></i>', $client->rate) !!}
              {!! str_repeat('<i class="fa fa-star-o" aria-hidden="true"></i>', 5 - $client->rate) !!}</li>
         </ul>
            <div class="tmls-blk-inn">
              <img src="{{ asset($client->image) }}" alt="" class="img-circle">
              <h5>{{ $client->name }}</h5>
              <h6>Designation: {{ $client->designation }}</h6>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Who We Are Sec End -->

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