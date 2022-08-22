<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .h2_font{
            font-size:40px;
            padding-top:20px;
            text-align:center;
        }

        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
        }

        .img_size{
            width: 150px;
            height: 150px;
        }

        .th_color{
            background: grey;
        }

        .th_design{
            padding: 30px;
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
            <h2 class="h2_font">Show Courses</h2>
            <table class="center">
                <tr class="th_color">
                    <th class="th_design">Title</th>
                    <th class="th_design">Description</th>
                    <th class="th_design">Category</th>
                    <th class="th_design">Time</th>
                    <th class="th_design">Preferred Grade</th>
                    <th class="th_design">Fee</th>
                    <th class="th_design">Image</th>
                    <th class="th_design">Delete</th>
                    <th class="th_design">Edit</th>
                </tr>

                @foreach($course as $course)

                <tr>
                    <td>{{$course->title}}</td>
                    <td>{{$course->description}}</td>
                    <td>{{$course->category}}</td>
                    <td>{{$course->time}}</td>
                    <td>{{$course->grade}}</td>
                    <td>{{$course->fee}}</td>
                    <td>
                        <img class="img_size" src="/course/{{$course->image}}">
                    </td>
                    <td><a class="btn btn-danger" href="{{url('delete_course',$course->id)}}" onclick="return confirm('Are you sure to delete this Course?')">Delete</a></td>
                    <td><a class="btn btn-success" href="{{url('update_course',$course->id)}}">Edit</a></td>
                </tr>

                @endforeach

            </table>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>