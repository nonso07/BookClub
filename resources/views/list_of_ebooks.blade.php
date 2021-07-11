@include('include_header')

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
            <!-- Start Left services -->
            {{--<img src="/media/2/LvinJsST6XHIaxCccTe8GpbsuVT73OsCmieGWDPv.jpg
            " alt="" srcset="">--}}
            @foreach ($ebooks_list as $e_books)
                
            
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="">
                      <i class="fa fa-download"></i>
                    </a>
                    <h4>{{$e_books->Book_Titel}} </h4>
                    {{--<div class="-item">
                        <img src="{{$e_books->getFirstMediaUrl('books') }}" />
                    </div>
                    {{ $e_books->getFirstMediaUrl('books') }} --}}
                    <img src="assets/img/pdf_logo.png" alt="PDF Logo">
                    
                    {{--$e_books->getFirstMedia('books')->getFullUrl()--}}
                    <p>
                      {{$e_books->booK_type}}
                    </p>
                      @foreach ($e_books->getMedia('Ebooks') as $bookID)
                
                      {{--<img src="/media/{{$bookID->id}}/{{$bookID->file_name}}
                      " alt="" srcset=""> bookView  <a href="/booksDownload/{{$bookID->id}}">--}}
                      <a href="/bookView/{{$bookID->model_id}}/{{$bookID->id}}"> <button type="button" class="btn btn-primary">Downoload this Book</button></a>

                      @endforeach
            
                      
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
            @endforeach
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

  @include('include_footer')