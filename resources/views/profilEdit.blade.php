@include('include_header')

@include('include_navigation')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>  <p class="text-center">More bootstrap 4 components on <a href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com</a></p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="" class="float-right btn btn-outline-primary mt-1">Log in</a>
	<h4 class="card-title mt-2">Edit Profile</h4>
</header> 
<article class="card-body">
	
<form method="POST" action="{{url('/updateUserForm')}}" enctype="multipart/form-data" >
	@csrf
	<div class="form-row">
		<span>{{--$sucess--}} </span>
		<div class="col form-group">
			<label>First name </label>   
		<input type="text" name="name" value="{{Auth::user()->name}}" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
		<input type="hidden" name="edit_id" value="{{Auth::id()}}" >
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" name="last_name" value="{{Auth::user()->last_name}}" class="form-control" placeholder=" ">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-row">
	<div class="col form-group">
		<label>Email address</label>
		<input type="email" name="email" class="form-control" value="{{Auth::user()->email}}" placeholder="">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	  @if($errors->has('email'))
		  <span class="text-danger">{{ $errors->first('email')}}
	  @endif
	</div> <!-- form-group end.// -->
	 <!-- form-group end.// -->
	<div class="col form-group">
		<label>Phone Number </label>   
		  <input type="number" name="phoneNum" value="{{Auth::user()->phoneNum}}" class="form-control" placeholder="">
	</div> <!-- form-group end.// -->
	</div>
	<div class="form-row">
	<div class="col form-group">
			<label class="form-check form-check-inline">
		  <input  class="form-check-input" type="radio" name="gender" value="Male" @if (Auth::user()->gender=='Male')
		  checked="checked"
		  @endif>
		  <span class="form-check-label"> Male </span>
		</label>
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="Female" @if (Auth::user()->gender=='Female')
		  checked="checked"
		  @endif>
		  <span class="form-check-label"> Female</span>
		</label>
	</div> <!-- form-group end.// -->
	<div class="col form-group">
		<label>Date of Birth</label>
		<input type="date" class="form-control" name="DOB"  placeholder="" value="{{Auth::user()->DOB}}">
		{{--<small class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
	</div> <!-- form-group end.// -->
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Department</label>
		  <input type="text" name="department" class="form-control" value="{{Auth::user()->department}}">
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
			<label>Reg Number</label>
			<input type="number" name="Reg_num" class="form-control" value="{{Auth::user()->Reg_num}}">
		  </div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
	<div class="form-row">
		{{--<div class="col form-group">
			<label>Upload Profile Image </label>   
		  	<input type="file" name="avater_name" class="form-control"  placeholder="">
		</div> <!-- form-group end.// -->
		 <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group"> --}}
		{{--<label>Create password</label>
	    <input class="form-control" name="password" value="{{Auth::user()->password}}" type="password">
	</div>--}} <!-- form-group end.// -->  
    <div class="form-group">
		<div class="col-12 form-group">
		<button type="submit" class="btn btn-primary btn-block"> Update  </button>
		</div>
    </div> <!-- form-group// -->      
    {{--<small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>    --}}                                      
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->
{{--$heardAboutUs--}}

</div> 
<!--container end.//-->
{{--$allCountry--}}
<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">Bootstrap 4 UI KIT</h3>
<p class="h5 text-white">Components and templates  <br> for Ecommerce, marketplace, booking websites 
and product landing pages</p>   <br>
<p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com  
 <i class="fa fa-window-restore "></i></a></p>
</div>
<br><br>
</article>

@include('include_footer')