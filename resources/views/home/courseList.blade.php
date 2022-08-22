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
 <section class="hero-wrap hero-wrap-2" style="background-image: url('course/topBanner.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Course <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Course List</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section bg-light">
 <div class="container">
 <section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Get Yourself a Tutor</span>
            <h2 class="mb-4">Pick Your Courses</h2>
        </div>
      </div>
    <div class="row">
        @foreach($course as $courses)
       <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
          
             <a href="#" class="img" style="background-image: url(course/{{$courses->image}});">
                <span class="price">{{$courses->category}}</span>
            </a>
            
            <div class="text p-4">
                <h3><a href="#">{{$courses->title}}</a></h3>
                <p class="advisor">Time: <span>{{$courses->time}}</span></p>
                <ul class="d-flex justify-content-between">
                   <li><span class="flaticon-shower"></span>{{$courses->grade}}</li>
                   <li class="price">{{$courses->fee}} BDT</li>
               </ul>
            </div>
            <div class="" style="display: flex;justify-content: center;align-items: center;">
               <a href="{{url('course_details',$courses->id)}}" class="btn btn-info" style="margin-right: 25px;margin-bottom: 25px">
                  Details
               </a>
               <form action="{{url('hire_now',$courses->id)}}" method="POST">
                  @csrf
                  <div class="row">
                     <div>
                     <input type="submit" value="Hire" class="btn btn-primary" style="margin-right: 25px;margin-bottom: 25px">
                     </div>
                  </div>
               </form>
            </div>
          </div>
       </div>
       @endforeach
        
   </div>
   <span style="padding-top: 40px">
       {!!$course->withQueryString()->links('pagination::bootstrap-5')!!}
        </span>
   </div>
</section>
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