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
                <h2>RECEIPT </h2>
              </div>
            </div>
          </div>
          <div class="row text-center">
            
        
        {{--<div class="container">--}}
          <div class="container">


            @include('receipt')
            
          </div>
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