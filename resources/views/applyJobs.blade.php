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
<section class="section-hero overlay inner-page bg-image"
style="background-image: url('{{ url('assets/images/hero_1.jpg') }}');" id="home-section">
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Apply Job</h1>
            <div class="custom-breadcrumbs">
                <a href="#">Home</a> <span class="mx-2 slash">/</span>
                <a href="#">Job</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>Apply Job</strong></span>
            </div>
        </div>
    </div>
</div>
</section>
<div class="container">
<div class="row align-items-center mb-5">
    <div class="col-lg-8 mb-4 mb-lg-0">
        <div class="d-flex align-items-center">
            <div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-lg-12 border rounded">
        <form class="p-4 p-md-5">

            <div class="form-group">
                <label for="">Jobs Name</label>
                <input type="text" class="form-control" id="jobsID" name="jobsID">
             </div>

            <div class="form-group">
                <label for="">Your Resume</label>
                <select class="form-control" id="locationName" name="locationName">
                    <option value="">-- Chọn cv --</option>
                    <option value="1">toan</option>
                </select>
            </div>

            <button class="btn btn-success mt-3" type="submit">Apply Now</button>
        </form>
    </div>
</div>
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







