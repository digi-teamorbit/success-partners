<?php 
$segment = Request::segments();
$services = DB::table('services')->get();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>::: Title Here :::</title>
</head>

<body>
  <!-- Header Start -->
  <header class="header">
    <div class="main_header">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-8 col-xs-8">
            <div class="main_logo">
              <a href="{{ url('/') }}"><img alt="img" src="{{asset($logo->img_path)}}"></a>
            </div>
          </div>
          <div class="col-md-7 col-sm-8 hidden-xs hidden-sm">
            <div class="menuSec">
              <ul id="menu">
                <li>
                  <a class="{{request()->routeIs('home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li>
                  <a class="{{request()->routeIs('our_services') ? 'active' : '' }}" href="{{ url('/our-services') }}">Our Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
       
                  <ul>
                     @foreach ($services as $service)
                    <li>
                      <a href="{{ url('/our-services#'.$service->id) }}">{{$service->name}}</a></li>
                    @endforeach
                  </ul>
                  
                </li>
                <li>
                  <a class="{{request()->routeIs('aboutuspage') ? 'active' : '' }}" href="{{ url('/aboutus') }}">About <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                  <ul>
                    <li><a href="{{ url('/our-partners') }}">Our Partners</a></li>
                    <li><a href="{{ url('/work-with-us') }}">Work/Affiliate with Us</a></li>
                  </ul>
                </li>
                <li>
                  <a class="{{request()->routeIs('our_clients') ? 'active' : '' }}" href="{{ url('/our-clients') }}">Happy Clients</a>
                </li>
                <li>
                  <a class="{{request()->routeIs('our_team') ? 'active' : '' }}" href="{{ url('/our-team') }}">Our Team</a>
                </li>
                <li>
                  <a class="{{request()->routeIs('blogs') ? 'active' : '' }}" href="{{ url('/blogs') }}">Blogs</a>
                </li>
                <li>
                  <a class="{{request()->routeIs('contact_us') ? 'active' : '' }}" href="{{ url('/contact-us') }}">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-8 col-xs-8">
            <div class="main_logo maincustom">
              <a href="javascript:void(0)"><img alt="img" src="{{asset('images/logo2.png')}}"></a>
              <!-- <a href="javascript:void(0)"><img alt="img" src="images/logo3.png"></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->