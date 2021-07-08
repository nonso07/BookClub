<body data-spy="scroll" data-target="#navbar-example">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex">
  
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="/"><span>Computer Sci</span>E-Book Club</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
  
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class=""><a href="/">Home</a></li>
            <li><a href="/aboutUs">About</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#team">parent</a></li>
            @if(Auth::check())
            <li><a href="/userDashboard">Dashboard</a></li>
            <li><span> <form method="POST" action="{{url('/singout')}}">
              @csrf 
           <button type="submit" class="btn btn-danger">Logout </button>
          </form> </span></li>
          
          @else 
          <li><a href="/singin">Singin</a></li>
          <li><a href="/singUp">Singup</a></li>
            @endif
            
            {{--<li class="drop-down"><a href="">Drop Down</a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="drop-down"><a href="#">Drop Down 2</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li>
              </ul>
            </li> --}}
            <li><a href="/contactUs">Contact</a></li>
  
          </ul>
        </nav><!-- .nav-menu -->
  
      </div>
    </header><!-- End Header -->
  