{{--$book_id--}}
@include('show_head')

@include('include_navigation')
  <main id="main">

    <!-- ======= Blog Header ======= -->
   {{-- <div class="header-bg page-area">
      <div class="home-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                  <h1 class="title2">About Us </h1>
                </div>
                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                  <h2 class="title3">profesional Blog Page</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->
--}}

<div class="container-fluid">
    
    <!-- ======= Blog Page ======= -->    
    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline services-head text-center">
                <h2>Books </h2>
              </div>
            </div>
          </div>
          <div class="row text-center">
            
        
        {{--<div class="container">--}}
            <div class="card-body">
                <h5 class="card-title">Make Payment here</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              
                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                  <div class="row" style="margin-bottom:40px;">
                      <div class="col-md-8 col-md-offset-2">
                          <p>
                              <div>
                                 
                              </div>
                          </p>
                          <input type="hidden" name="email" value="{{auth()->user()->email}}"> {{-- required --}}
                          <input type="hidden" name="first_name" value="{{auth()->user()->name}}"> {{-- required --}}
                          <input type="hidden" name="last_name" value="{{auth()->user()->lastName}}"> {{-- required --}}
                          <input type="hidden" name="phone" value="{{auth()->user()->phoneNum}}"> {{-- required --}}
                          <input type="hidden" name="orderID" value=" {{auth()->user()->id}}">
                          <input type="hidden" name="amount" value=" {{$amountToPay}} "> {{-- required in kobo --}}
                          <input type="hidden" name="quantity" value="1">
                          <input type="hidden" name="currency" value="NGN">
                          <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                          <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                          {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
              
                          <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
              
                          <p>
                              <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                  <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                              </button>
                          </p>
                      </div>
                  </div>
              </form> 
              </div> 
            
                  </div>
                  <div class="col-sm">
                    <div class="services-details">
                        <div class="single-services">
                          <h3>Users Book Reviwes </h3>
                          
                  </div>
                    
                </div>
              </div>
          {{--</div>--}}
        </div> <!-- end of container -->  
  
            {{--<div class="col-md-4 col-sm-4 col-xs-12">
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-camera-retro"></i>
                    </a>
                    <h4>Creative Designer</h4>
                    <p>
                ooks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- end col-md-4 -->
              <div class=" about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-wordpress"></i>
                    </a>
                    <h4>Wordpress Developer</h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- end col-md-4 -->
              <div class=" about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-camera-retro"></i>
                    </a>
                    <h4>Social Marketer </h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
            <!-- End Left services -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- end col-md-4 -->
              <div class=" about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-bar-chart"></i>
                    </a>
                    <h4>Seo Expart</h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
            <!-- End Left services -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- end col-md-4 -->
              <div class=" about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-ticket"></i>
                    </a>
                    <h4>24/7 Support</h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Services Section --> --}}

  </main><!-- End #main -->

  <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

  @include('include_footer1')