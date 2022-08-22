<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
        .center{
            margin:auto;
            width:50%;
            text-align: center;
            padding:30px;
        }

        .total_design{
            font-size:20px;
            padding-top:40px;
        }

        .text_color{
            color: black;
            padding-top: 20px;
        }

        table,th,td{
          border: 1px solid grey;

        }
        
        .th_design{
          font-size: 20px;
          padding: 5px;

        }
        
        .img_design{
          height:200px;
          width:200px;
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
       <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cart <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Hiring Details</h1> 
     </div>
   </div>
 </div>
</section>

<section class="ftco-section bg-light">
 <div class="container">
  <div class="row">
  <div class="center">
  @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
      <table class="center">
            <tr>
              <th class="th_design">Image</th>
              <th class="th_design">Course Title</th>
              
              <th class="th_design">Course Fee</th>
              <th class="th_design">Action</th>
          </tr>

          <?php $totalfee=0; ?>
          @foreach($cart as $cart)
            <tr>
              <td><img class="img_design" src="/course/{{$cart->image}}"></td>
              <td>{{$cart->course_title}}</td>
              
              <td>{{$cart->fee}} BDT</td>
              <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this Course?')" href="{{url('remove_cart',$cart->id)}}">Remove Course</a></td>
          </tr>
          <?php $totalfee=$totalfee+$cart->fee; ?>
          @endforeach

          
      </table>
      <div>
            <h1 class="total_design">Total Fee: <span style="font-weight:bold;">{{$totalfee}} BDT</span></h1>
          </div>
      <div>
        <h1 style="font-size: 20px; padding-bottom: 10px;">Proceed to Order</h1>
        <a href="{{url('stripe',$totalfee)}}" class="btn btn-danger">Pay Using Card</a>
        <a href="{{url('cash_order')}}" class="btn btn-danger">Pay Using Cash</a>
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