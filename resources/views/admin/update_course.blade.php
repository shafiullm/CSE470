<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')
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

        .div_design{
            padding-bottom: 30px;
        }

        label{
            display: inline-block;
            width: 200px;
        }
        
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
        @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif 
            <div class="div_center">
                <h1 class="h1_font">Update Course</h1>

                <form action="{{url('/update_course_confirm',$course->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="div_design">
                        <label>Course Title:</label>
                        <input class="text_color" type="text" name="title" placeholder="Write your Course title" required="" value="{{$course->title}}">
                    </div>
                    <div class="div_design">
                        <label>Course Description:</label>
                        <input class="text_color" type="text" name="description" placeholder="Write your Course description" required="" value="{{$course->description}}">
                    </div>
                    <div class="div_design">
                        <label>Course Category:</label>
                        <select class="text_color" name="category" required="">
                            <option value="{{$course->category}}" selected="">{{$course->category}}</option>
                            @foreach($category as $category)
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="div_design">
                        <label>Course Fee:</label>
                        <input class="text_color" type="number" name="fee" placeholder="Write your Course Fee" required="" value="{{$course->fee}}">
                    </div>
                    <div class="div_design">
                        <label>Time:</label>
                        <input class="text_color" type="text" name="time" placeholder="Write your Time of Teaching" required="" value="{{$course->time}}">
                    </div>
                    <div class="div_design">
                        <label>Preferred Grade:</label>
                        <input class="text_color" type="text" name="grade" placeholder="Write your Preferred Student's Grade/Class" value="{{$course->grade}}">
                    </div>

                    <div class="div_design">
                        <label>Current Course Image:</label>
                        <img style="margin:auto;" height="100" width="100" src="/course//{{$course->image}}">
                    </div>
                    <div class="div_design">
                        <label>Change Course Image:</label>
                        <input type="file" name="image">
                    </div>

                    <div class="div_design">
                        <input type="submit" value="Update Course" class="btn btn-primary">
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>