@include('include_header')

@include('include_navigation')
  <main id="main">

{{--   <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
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
                <h2>Profile </h2>
              </div>
            </div>
          </div>


     {{--     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        --}}
<!------ Include the above in your HEAD tag ---------->

            <div class="container emp-profile">
                <a href="/profilEdit"> <button class="btn btn-primary">Edit</button> </a>

            <form method="post" action="{{url('/imgEdit')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <input type="hidden" name="edit_id" value="{{Auth::id()}}" >
                            <img src="storage/uploads/{{Auth::user()->avater_name}}" alt="Avater image"/>
                            <div class="file btn btn-lg btn-primary">
                                <button type="submit">Change Photo </button>
                                <input type="file" name="avater_name" />
                            </div>
                        
                        </div>
                    </div>
                </form>
                    <div class="col-md-6">
                        <div class="profile-head"> 
                                    <h5>
                                        {{Auth::user()->name}}, {{Auth::user()->last_name}}
                                    </h5>
                                    <h6>
                                       From The Department of  {{Auth::user()->department}}
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    {{--<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>--}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="/profilEdit"> <button class="btn btn-primary">Edit</button> </a>
                            {{--<input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> </a>--}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p><h3> {{Auth::user()->name}} </h3></p>
                            
                            <p style="color: blueviolet">Your Registration was sucessful, <br>you can now check through our book catalog    </p>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Reg. Number </b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->Reg_num}} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Full Name</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->name}}, {{Auth::user()->last_name}}  </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Email</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->email}} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Phone</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{Auth::user()->phoneNum}} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Gender</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->gender}} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Date of Birth</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->DOB}} </p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Date of Birth</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{Auth::user()->DOB}} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        </div>


  </main><!-- End #main -->

  @include('include_footer')