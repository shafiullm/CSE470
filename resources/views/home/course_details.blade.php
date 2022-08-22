<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
        .div_center{
            text-align:center;
            padding-top:40px;
        }

        .h1_font{
            font-size:40px;
            padding-bottom:40px;
        }

        .text_color{
            color: black;
            padding-bottom: 20px;
        }

        
    </style>
    <base href="/public">
    <title>Tutor Hire - Find your tutor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="Home/css/animate.css">
    
    <link rel="stylesheet" href="Home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="Home/css/magnific-popup.css">

    <link rel="stylesheet" href="Home/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="Home/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="Home/css/flaticon.css">
    <link rel="stylesheet" href="Home/css/style.css">
</head>

<body>

 @include('home.navbar')
 <section class="hero-wrap hero-wrap-2" style="background-image: url('course/bg_3.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="{{url('courseList')}}">Course <i class="fa fa-chevron-right"></i></a></span> <span>Course Details <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Course Details</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section bg-light">
 <div class="container">
  <div class="row">
   <div class="col-md-4 ftco-animate d-flex align-items-center align-items-stretch">
    <div class="staff-2 w-100">
     <div class="img-wrap d-flex align-items-stretch">
      <div class="img align-self-stretch d-flex align-items-end" style="background-image: url(course/{{$course->image}});">
       <div class="text mb-4 text-md-center">
        <h3>{{$course->category}}</h3>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-8 d-flex align-items-center">
  <div class="staff-detail w-100 pl-md-5">
   <h2>{{$course->title}}</h2>
   <h3>Course Description</h3>
   <p style="color: black;font-size:16px;">{{$course->description}}</p>
   <h3>Time</h3>
   <p style="color: black;font-size:16px;">{{$course->time}}</p>
   <h3>Preferred Grade/Class</h3>
   <p style="color: black;font-size:16px;">{{$course->grade}}</p>
   <h3>Course Fee: <span style="color:red">{{$course->fee}} BDT</span></h3>
   <form action="{{url('hire_now',$course->id)}}" method="POST">
                  @csrf
                  <div class="row">
                     <div>
                     <input type="submit" value="Hire Now" class="btn btn-primary" style="margin-right: 25px;margin-bottom: 25px">
                     </div>
                  </div>
               </form>
 </div>
</div>
</div>
</div>
</section>

@include('home.footer')



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="Home/js/jquery.min.js"></script>
<script src="Home/js/jquery-migrate-3.0.1.min.js"></script>
<script src="Home/js/popper.min.js"></script>
<script src="Home/js/bootstrap.min.js"></script>
<script src="Home/js/jquery.easing.1.3.js"></script>
<script src="Home/js/jquery.waypoints.min.js"></script>
<script src="Home/js/jquery.stellar.min.js"></script>
<script src="Home/js/owl.carousel.min.js"></script>
<script src="Home/js/jquery.magnific-popup.min.js"></script>
<script src="Home/js/jquery.animateNumber.min.js"></script>
<script src="Home/js/bootstrap-datepicker.js"></script>
<script src="Home/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="Home/js/google-map.js"></script>
<script src="Home/js/main.js"></script>

</body>
</html>