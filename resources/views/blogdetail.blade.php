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
          <h1 class="wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s">Blog Detail</h1>
        </div>
      </div>
    </div>
  </div><br>
  <!-- inner_bannner End -->


<!-- About-section -->
  <div class="blog_section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
          
           <div class="blog_Boxmain">
            
            <div class="blog_BoxmainText text-right">
             <img src="{{asset($detail->image)}}" alt="img">
              <h4>{{ $detail->title }}</h4>
               <?= html_entity_decode($detail->description) ?>
              
            </div>
          </div>
    
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="search_box">
            <input type="text" placeholder="Search Here..">
            <a href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
          </div>
          <div class="categories_box">
            <h4>Categories</h4>
            <ul>
              <li><a href="javascript:void(0)">Lipsum</a></li>
              <li><a href="javascript:void(0)">Lorem</a></li>
              <li><a href="javascript:void(0)">Dolors</a></li>
              <li><a href="javascript:void(0)">Lipsum</a></li>
            </ul>
          </div>
          <div class="Recent_box">
            <h4>Recent News</h4>
            @foreach ($allnews as $news)
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <img src="{{ asset($news->image) }}" alt="img">
              </div>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <h6><a href="{{ url($news->url) }}">{{ $news->title }}</a></h6>
                <span>{{ $news->created_at }}</span>
              </div>
            </div>
            @endforeach
          </div>
          <div class="Keyword_box">
            <h4>Keyword</h4>
            <ul>
              <li><a href="javascript:void(0)">Ideas</a></li>
              <li><a href="javascript:void(0)">Education</a></li>
              <li><a href="javascript:void(0)">Fashion</a></li>
              <li><a href="javascript:void(0)">Lashes</a></li>
              <li><a href="javascript:void(0)">Minimal</a></li>
            </ul>
          </div>
        </div>
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