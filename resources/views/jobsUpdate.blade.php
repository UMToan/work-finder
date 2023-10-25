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
       <h1 class="text-white font-weight-bold">Jobs Update</h1>
       <div class="custom-breadcrumbs">
         <a href="#">Home</a> <span class="mx-2 slash">/</span>
         <a href="#">Job</a> <span class="mx-2 slash">/</span>
         <span class="text-white"><strong>Jobs Update</strong></span>
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
    <form  class="p-4 p-md-5">

       <div class="form-group">
          <label for="">Area Name</label>
             <select class="form-control" id="locationName" name="locationName">
                <option value="">-- Chọn khu vực --</option>
                <option value="1">area.locationName</option>
             </select>
       </div>
       
       <div class="form-group">
          <label for="">jobsTitle</label>
          <input type="text" class="form-control" id="jobsTitle" name="jobsTitle">
       </div>

       <div class="form-group">
          <label for="">jobsStatus</label>
          <input type="text" class="form-control" id="jobsStatus" name="jobsStatus">
       </div>

       <div class="form-group">
          <label for="">company</label>
          <input type="text" class="form-control" id="company" name="company">
       </div>

       <div class="form-group">
          <label for="">thumbnail</label>
             <input type="text" class="form-control" id="thumbnail" name="thumbnail">
           </input>

       </div>

       <div class="form-group">
          <label for="">jobsLocation</label>
          <input type="text" class="form-control" id="jobsLocation" name="jobsLocation">
       </div>

       <div class="form-group">
          <label for="">jobsMail</label>
          <input type="text" class="form-control" id="jobsMail" name="jobsMail">
       </div>

       <div class="form-group">
          <label for="">jobsDescription</label>
          <input type="text" class="form-control" id="jobsDescription" name="jobsDescription">
          </input>
       </div>

       <div class="form-group">
          <label for="">jobsResponsibilities</label>
             <input type="text" class="form-control" id="jobsResponsibilities" name="jobsResponsibilities">
          </input>
       </div>

       <div class="form-group">
          <label for="">salary</label>
          <input type="text" class="form-control" id="salary" name="salary">
       </div>

       <div class="form-group">
          <label for="">jobsType</label>
          <input type="text" class="form-control" id="jobsType" name="jobsType">
       </div>

       <div class="form-group">
          <label for="">jobsSkill</label>
             <input type="text" class="form-control" id="jobsSkill" name="jobsSkill"></input>  
       </div>

       <div class="form-group">
          <label for="">Created Date</label>
          <input type="text" class="form-control" id="createdDate" name="createdDate">
       </div>

       <div class="form-group">
          <label for="">Created By</label>
          <input type="text" class="form-control" id="createdBy" name="createdBy">
       </div>

       <div class="form-group">
          <label for="">Modified Date</label>
          <input type="text" class="form-control" id="modifiedDate" name="modifiedDate">
       </div>

       <div class="form-group">
          <label for="">Modified By</label>
          <input type="text" class="form-control" id="modifiedBy" name="modifiedBy">
       </div>

       <div class="form-group">
         <label for="">status</label>
         <input type="text" class="form-control" id="status" name="status">
      </div>

       <button class="btn btn-success mt-3" type="submit">Submit</button>
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







