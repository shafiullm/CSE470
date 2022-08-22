<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
   <img src="{{asset('/images/tutorHire-w.png')}}" style="width:256px;">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="{{url('courseList')}}" class="nav-link">Course</a></li>  
         <li class="nav-item"><a href="{{url('show_cart')}}" class="nav-link"><span >Cart</span></a></li>
         <li class="nav-item"><a href="{{url('user/profile')}}" class="nav-link"><span >My Profile</span></a></li>
         @if (Route::has('login'))
         @auth
          <li class="nav-item active" style="padding-top:17px;">
          <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="color:white" class="btn btn-danger">
                        {{ __(' Logout ') }}
                    </button>
                </form>
          </li>
         @else
         <li class="nav-item"><a href="{{ route('login') }}" class="nav-link" id="logincss"><span >Login</span></a></li>
         <li class="nav-item"><a href="{{ route('register') }}" class="nav-link" id="logincss"><span >Register</span></a></li>
         @endauth
         @endif
      </ul>
 </div>
</div>
</nav>