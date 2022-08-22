<!DOCTYPE html>
<html lang="en">
  <head>
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
                <h1 class="h1_font">Add Course</h1>

                <form action="{{url('/add_course')}}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="div_design">
                        <label>Course Title:</label>
                        <input class="text_color" type="text" name="title" placeholder="Write your Course title" required="">
                    </div>
                    <div class="div_design">
                        <label>Course Description:</label>
                        <input class="text_color" type="text" name="description" placeholder="Write your Course description" required="">
                    </div>
                    <div class="div_design">
                        <label>Course Category:</label>
                        <select class="text_color" name="category" required="">
                            <option value="" selected="">Add a Course Category here</option>
                            @foreach($category as $category)
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="div_design">
                        <label>Course Fee:</label>
                        <input class="text_color" type="number" name="fee" placeholder="Write your Course Fee" required="">
                    </div>
                    <div class="div_design">
                        <label>Time:</label>
                        <input class="text_color" type="text" name="time" placeholder="Write your Time of Teaching" required="">
                    </div>
                    <div class="div_design">
                        <label>Preferred Grade:</label>
                        <input class="text_color" type="text" name="grade" placeholder="Write your Preferred Student's Grade/Class">
                    </div>
                    <div class="div_design">
                        <label>Course Image:</label>
                        <input type="file" name="image" required="">
                    </div>
                    <div class="div_design">
                        <input type="submit" value="Add Course" class="btn btn-primary">
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