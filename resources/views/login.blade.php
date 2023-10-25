<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Fe</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="/css/custom-bs.css">
  <link rel="stylesheet" href="{{ url('assets/css/custom-bs.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/bootstrap-select.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ url('assets/fonts/line-icons/style.css')}}">
  <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/quill.snow.css') }}">
  <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>

<body id="top">
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  @extends('layouts.app')
@section('content')
<section class="section-hero overlay inner-page bg-image" style="background-image: url('../../../../assets/images/hero_1.jpg');"
id="home-section">
<div class="container">
   <div class="row">
     <div class="col-md-7">
       <h1 class="text-white font-weight-bold">Login</h1>
       <div class="custom-breadcrumbs">
         <!-- <a href="#">Home</a> <span class="mx-2 slash">/</span>
         <a href="#">Area</a> <span class="mx-2 slash">/</span> -->
         <span class="text-white"><strong>Login</strong></span>
       </div>
     </div>
   </div>
 </div>
</section>
<section class="site-section">
<div class="container d-flex justify-content-center">
  <div class="col-lg-6">
      <h2 class="mb-4">Log In To JobBoard</h2>
      <form class="p-4 border rounded" >

          <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="userName">Email</label>
                  <input type="text"  name="userName" id="userName" class="form-control" placeholder="Email address">
              </div>
          </div>
          <div class="row form-group mb-4">
              <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
          </div>

          <div class="row form-group">
              <div class="col-md-12">
                  <button type="submit" class="btn btn-success">Login</button>
              </div>
          </div>

      </form>
      
  </div>

</div>
</section>
@endsection

  <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('assets/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/js/stickyfill.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ url('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('assets/js/bootstrap-select.min.js') }}"></script>
  <script src="{{ url('assets/js/custom.js') }}"></script>
</body>

</html>







