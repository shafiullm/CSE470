<!DOCTYPE html>
<html lang="en">
<head>
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
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.html"><span>Tutor</span>Hire</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
         <li class="nav-item"><a href="course.html" class="nav-link">Course</a></li>
         <li class="nav-item"><a href="instructor.html" class="nav-link">Instructor</a></li>
         <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
         <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
         <li class="nav-item"><a href="{{ route('login') }}" class="nav-link" id="logincss">Login</a></li>
         <li class="nav-item"><a href="{{ route('register') }}" class="nav-link" id="logincss">Register</a></li>
     </ul>
 </div>
</div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate">
        <span class="subheading">Welcome to Tutor Hire</span>
        <h1 class="mb-4">We Are An Online Platform For Finding You The Best Tutor</h1>
        <p class="caps">Find the best tutors for your subject around you! Explore the most talented people who can teach you your desired knowledge.</p>
    </div>
</div>
</div>
</div>

<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Start Learning Today</span>
            <h2 class="mb-4">Browse Online Course Category</h2>
        </div>
    </div>
    <div class="row justify-content-center">
     <div class="col-md-3 col-lg-2">
        <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-1.jpg);">
           <div class="text w-100 text-center">
              <h3>IT &amp; Software</h3>
              <span>100 course</span>
          </div>
      </a>
  </div>
  <div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-9.jpg);">
       <div class="text w-100 text-center">
          <h3>Music</h3>
          <span>100 course</span>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-3.jpg);">
       <div class="text w-100 text-center">
          <h3>Photography</h3>
          <span>100 course</span>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-5.jpg);">
       <div class="text w-100 text-center">
          <h3>Marketing</h3>
          <span>100 course</span>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-8.jpg);">
       <div class="text w-100 text-center">
          <h3>Health</h3>
          <span>100 course</span>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-6.jpg);">
       <span class="text w-100 text-center">
          <h3>Audio Video</h3>
          <span>100 course</span>
      </span>
  </a>
</div>
<div class="col-md-12 text-center mt-5">
    <a href="#" class="btn btn-secondary">See All Courses</a>
</div>
</div>
</div>
</section>

<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Get Yourself a Tutor</span>
            <h2 class="mb-4">Pick Your Courses</h2>
        </div>
      </div>
    <div class="row">
        @foreach($course as $course)
       <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
             <a href="#" class="img" style="background-image: url(course/{{$course->image}});">
                <span class="price">{{$course->category}}</span>
            </a>
            <div class="text p-4">
                <h3><a href="#">{{$course->title}}</a></h3>
                <p class="advisor">Time: <span>{{$course->time}}</span></p>
                <ul class="d-flex justify-content-between">
                   <li><span class="flaticon-shower"></span>{{$course->grade}}</li>
                   <li class="price">{{$course->fee}} BDT</li>
               </ul>
            </div>
          </div>
       </div>
   </div>
   @endforeach
   </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
 <div class="overlay"></div>
 <div class="container">
    <div class="row">
       <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
         <div class="block-18 d-flex align-items-center">
            <div class="icon"><span class="flaticon-online"></span></div>
            <div class="text">
             <strong class="number" data-number="400">0</strong>
             <span>Online Courses</span>
         </div>
     </div>
 </div>
 <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
     <div class="block-18 d-flex align-items-center">
        <div class="icon"><span class="flaticon-graduated"></span></div>
        <div class="text">
         <strong class="number" data-number="4500">0</strong>
         <span>Students Enrolled</span>
     </div>
 </div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
 <div class="block-18 d-flex align-items-center">
    <div class="icon"><span class="flaticon-instructor"></span></div>
    <div class="text">
     <strong class="number" data-number="1200">0</strong>
     <span>Experts Instructors</span>
 </div>
</div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
 <div class="block-18 d-flex align-items-center">
    <div class="icon"><span class="flaticon-tools"></span></div>
    <div class="text">
     <strong class="number" data-number="300">0</strong>
     <span>Hours Content</span>
 </div>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section ftco-about img">
   <div class="container">
      <div class="row d-flex">
         <div class="col-md-12 about-intro">
            <div class="row">
               <div class="col-md-6 d-flex">
                  <div class="d-flex about-wrap">
                     <div class="img d-flex align-items-center justify-content-center" style="background-image:url(images/about-1.jpg);">
                     </div>
                     <div class="img-2 d-flex align-items-center justify-content-center" style="background-image:url(images/about.jpg);">
                     </div>
                 </div>
             </div>
             <div class="col-md-6 pl-md-5 py-5">
              <div class="row justify-content-start pb-3">
                  <div class="col-md-12 heading-section ftco-animate">
                     <span class="subheading">Enhanced Your Skills</span>
                     <h2 class="mb-4">Learn Anything You Want Today</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                     <p><a href="#" class="btn btn-primary">Get in touch with us</a></p>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
</div>
</section>



<section class="ftco-intro ftco-section ftco-no-pb">
 <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 text-center">
          <div class="img"  style="background-image: url(images/bg_4.jpg);">
             <div class="overlay"></div>
             <h2>We Are Tutor Hire, An Online Platform For Finding the best Tutors</h2>
             <p>We can manage your preferred courses taught by the best teachers</p>
             <p class="mb-0"><a href="{{ route('register') }}" class="btn btn-primary px-4 py-3">Enroll Now</a></p>
         </div>
     </div>
 </div>
</div>
</section>

<section class="ftco-section services-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
         <div class="w-100 mb-4 mb-md-0">
            <span class="subheading">Welcome to utor Hire</span>
            <h2 class="mb-4">We Are Tutor Hire, An Online Platform For Finding the best Tutors</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <div class="d-flex video-image align-items-center mt-md-4">
              <a href="#" class="video img d-flex align-items-center justify-content-center" style="background-image: url(images/about.jpg);">
                 <span class="fa fa-play-circle"></span>
             </a>
             <h4 class="ml-4">Learn anything from the tutors of Tutor hire, get taught!</h4>
         </div>
     </div>
 </div>
 <div class="col-md-6">
     <div class="row">
        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
          <div class="services">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tools"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Top Quality Content</h3>
              <p>A small river named Duden flows by their place and supplies</p>
          </div>
      </div>      
  </div>
  <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
      <div class="services">
        <div class="icon icon-2 d-flex align-items-center justify-content-center"><span class="flaticon-instructor"></span></div>
        <div class="media-body">
          <h3 class="heading mb-3">Highly Skilled Instructor</h3>
          <p>A small river named Duden flows by their place and supplies</p>
      </div>
  </div>    
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
  <div class="services">
    <div class="icon icon-3 d-flex align-items-center justify-content-center"><span class="flaticon-quiz"></span></div>
    <div class="media-body">
      <h3 class="heading mb-3">World Class &amp; Quiz</h3>
      <p>A small river named Duden flows by their place and supplies</p>
  </div>
</div>      
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
  <div class="services">
    <div class="icon icon-4 d-flex align-items-center justify-content-center"><span class="flaticon-browser"></span></div>
    <div class="media-body">
      <h3 class="heading mb-3">Get Certified</h3>
      <p>A small river named Duden flows by their place and supplies</p>
  </div>
</div>      
</div>
</div>
</div>
</div>
</div>
</section>


<footer class="ftco-footer ftco-no-pt">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p>Tutor Hire brings you the finest tutors in your town. Throw your money to us, and seek knowledge using our hand picked tutors for your desired skills and subjects.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
        </ul>
    </div>
</div>
<div class="col-md pt-5">
    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
      <h2 class="ftco-heading-2">Help Desk</h2>
      <ul class="list-unstyled">
        <li><a href="#" class="py-2 d-block">Customer Care</a></li>
        <li><a href="#" class="py-2 d-block">Legal Help</a></li>
        <li><a href="#" class="py-2 d-block">Services</a></li>
        <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
        <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
        <li><a href="#" class="py-2 d-block">Call Us</a></li>
    </ul>
</div>
</div>
<div class="col-md pt-5">
   <div class="ftco-footer-widget pt-md-5 mb-4">
      <h2 class="ftco-heading-2">Recent Courses</h2>
      <ul class="list-unstyled">
        <li><a href="#" class="py-2 d-block">Computer Engineering</a></li>
        <li><a href="#" class="py-2 d-block">Web Design</a></li>
        <li><a href="#" class="py-2 d-block">Business Studies</a></li>
        <li><a href="#" class="py-2 d-block">Civil Engineering</a></li>
        <li><a href="#" class="py-2 d-block">Computer Technician</a></li>
        <li><a href="#" class="py-2 d-block">Web Developer</a></li>
    </ul>
</div>
</div>
<div class="col-md pt-5">
    <div class="ftco-footer-widget pt-md-5 mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon fa fa-map-marker"></span><span class="text">UB71202, BRAC University, Mohakhali, Dhaka</span></li>
           <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+880 1626 811111</span></a></li>
           <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">tutorhire@bracu.com</span></a></li>
       </ul>
   </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
  </div>
</div>
</div>
</footer>



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