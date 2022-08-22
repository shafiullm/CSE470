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