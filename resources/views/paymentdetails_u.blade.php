<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>   
     body{
    margin-top:10px;
    background:#eee;    
}
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <H1> THis is payers deatails </H1>
      {{-- <p> {{$id}} </p>
<p> {{ $tranx_id }}  </p>--}}


</body>
</html>
{{--                  -------------}}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Job  Details </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v1.1.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@gaplinkjobs.com">contact@gaplinkjobs.com</a>
        <i class="icofont-phone"></i> +234 810 565 2171
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        
        <a href="/login" class="login">Login<i class="icofont-login"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">GapLink<span> Jobs </span> </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="/" class="logo mr-auto"><img src="assets/img/logo.jpg" alt=""></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Home</a></li>
          <li ><a href="/about">About</a></li>
          
          <li class="drop-down"><a href="">Services</a>
            <ul>
              @foreach ($serviceList as $serviceLists)
                  
              <li><a href="/serviceMenu/{{$serviceLists->id}}">{{$serviceLists->title}}</a></li>
                @endforeach

            </ul>
          </li>
          <li><a href="/jobList">Jobs</a></li>
          <li><a href="/employerDashboad">Hire</a></li>
          <li><a href="/contact">Contact</a></li>
          @if(Auth::check()) 
         {{-- <li><a href="/logout">Logout</a></li> --}}
         <li> <a href="/singout"> Logout </li>
          @else
           <li> <a href="/singin">Login</a></li>
          
          <li class="drop-down"><a href="">Sing UP</a>
            <ul>
                  
              <li><a href="/userRegiration">Job seeker</a></li>
              <li><a href="/employerReg"> employers </a>
             
               </ul>
               @endif
      </li>


        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>PAYMENT RECIPTE </h2>
          <ol>
            <li><a href="/">Home</a></li>
            
            <li> Payment Recipte</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">


        @include('receipt')
        
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include("include_footer");
