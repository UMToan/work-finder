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
             <h1 class="text-white font-weight-bold">Areas List</h1>
             <div class="custom-breadcrumbs">
               <a href="#">Home</a> <span class="mx-2 slash">/</span>
               <a href="#">Area</a> <span class="mx-2 slash">/</span>
               <span class="text-white"><strong>Areas List</strong></span>
             </div>
           </div>
         </div>
       </div>
</section>

<div class="container">
   <table class="table table-striped">
      <thead>
         <tr>
            <th>ID</th>
            <th>JobsID</th>
            <th>ResumeID</th>
            <th>Created Date</th>
            <th>Created By</th>
            <th>Modified Date</th>
            <th>Modified By</th>
         </tr>
      </thead>
      <tbody>
            <tr >
               <td>id</td>
               <td>jobsID</td>
               <td>resumeID</td>
               <td>createdDate</td>
               <td>createdBy</td>
               <td>modifiedDate</td>
               <td>modifiedBy</td>

            </tr>
      </tbody>
   </table>
</div>
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







