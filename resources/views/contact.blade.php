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
          <h1 class="wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s">Contact Us</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- inner_bannner End -->

  <!--Contact Content Start-->
  <footer id="footer">
    <div class="main_footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="about_head">
              <h4>Contact</h4>
              <h2>{{ $contactus->name }}</h2>
              <?= html_entity_decode($contactus->content) ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="contact_section">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <form action="{{ route('contactUsSubmit') }}" method="post">
                    @csrf
                  <div class="contact_form">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" name="fname" placeholder="Name">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="email" name="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="phone" name="phone" placeholder="Phone">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <textarea name="message" placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="submit" value="Submit">
                      </div>
                    </div>
                  </div>
                </form>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="contact_text">
                    <h3>Contact Details</h3>
                    <div class="contact_info">
                      <div class="contact_infoIcon">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                      </div>
                      <div class="contact_infoText">
                        <a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}">{{App\Http\Traits\HelperTrait::returnFlag(59) }}</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="contact_info">
                      <div class="contact_infoIcon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                      </div>
                      <div class="contact_infoText">
                        <a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(123) }}">{{App\Http\Traits\HelperTrait::returnFlag(123) }}</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="contact_info">
                      <div class="contact_infoIcon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                      </div>
                      <div class="contact_infoText">
                        <a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}">{{App\Http\Traits\HelperTrait::returnFlag(218) }}</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="contact_info">
                      <div class="contact_infoIcon">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                      </div>
                      <div class="contact_infoText">
                        <a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}">{{App\Http\Traits\HelperTrait::returnFlag(682) }}</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="contact_info">
                      <div class="contact_infoIcon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                      </div>
                      <div class="contact_infoText">
                        <p>{{App\Http\Traits\HelperTrait::returnFlag(519) }}</p>
                      </div>
                    </div>


                    <div class="clearfix"></div>
                    <div class="contact_social">
                      <ul>
                        <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1962) }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1963) }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--Contact Content End-->

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