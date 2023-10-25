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
  <section class="section-hero overlay inner-page bg-image" style="background-image: url('{{ url('assets/images/hero_1.jpg') }}');"
  id="home-section">
  <div class="container">
     <div class="row">
       <div class="col-md-7">
         <h1 class="text-white font-weight-bold">Jobs Detail</h1>
         <div class="custom-breadcrumbs">
           <a href="#">Home</a> <span class="mx-2 slash">/</span>
           <a href="#">Job</a> <span class="mx-2 slash">/</span>
           <span class="text-white"><strong>Jobs Detail</strong></span>
         </div>
       </div>
     </div>
   </div>
</section>
<section class="site-section">
<div class="container">
    <div class="row align-items-center mb-5">
        <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
                <div class="border p-2 d-inline-block mr-3 rounded">
                    <img src="{{ url('assets/images/job_logo_2.jpg') }}" alt="Image" class="img-thumbnail rounded-circle" width="200">
                </div>
                <div>
                    <h2>Jobs title</h2>
                    <div>
                        <span class="m-2"><span class="icon-room mr-2"></span>job.jobsLocation</span>
                        <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">job.jobsType</span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-6">
                    <a  class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
                </div>
                <div class="col-6">
                    <a  class="btn btn-block btn-primary btn-md">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="mb-5">
                <figure class="mb-5"><img src="{{ url('assets/images/img_1.jpg') }}" alt="Image" class="img-fluid rounded"></figure>
                <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
                <p>job.jobsDescription</p>
            </div>
            <div class="mb-5">
                <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Responsibilities</h3>
                <ul class="list-unstyled m-0 p-0">
                    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>job.jobsResponsibilities</span></li>
                </ul>
            </div>

            <div class="mb-5">
                <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Skill</h3>
                <ul class="list-unstyled m-0 p-0">
                    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>job.jobsSkill</span></li>
                </ul>
            </div>

            <div class="row mb-5">
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
                </div>
                <div class="col-6">
                    <a class="btn btn-block btn-primary btn-md text-white">Apply Now</a>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="bg-light p-3 border rounded mb-4">
                <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                <ul class="list-unstyled pl-3 mb-0">
                    <li class="mb-2"><strong class="text-black">Published on:</strong><span [innerHTML]="job.createdDate">job.createdDate</span></li>
                    <li class="mb-2"><strong class="text-black">Vacancy:</strong><span [innerHTML]="job.jobsStatus">job.jobsStatus</span></li>
                    <li class="mb-2"><strong class="text-black">Employment Status:</strong><span [innerHTML]="job.jobsType"><job.jobsType/span></li>
                    <li class="mb-2"><strong class="text-black">Job Location:</strong><span [innerHTML]="job.jobsLocation">job.jobsLocation</span></li>
                    <li class="mb-2"><strong class="text-black">Salary:</strong><span [innerHTML]="job.salary">job.salary</span></li>
                </ul>
            </div>

            <div class="bg-light p-3 border rounded">
                <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                <div class="px-3">
                    <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                    <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                    <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                    <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
                </div>
            </div>

        </div>
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