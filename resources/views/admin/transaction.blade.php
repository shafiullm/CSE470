<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    .title_design{
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        padding-bottom: 40px;
    }    
        
    .table_design{
        border: 2px solid white;
        width: 90%;
        margin: auto;
        text-align: center;
    }
    .th_design{
        background-color: grey;
    }
    .img_size{
        width:200px;
        height:150px;
    }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
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
            <h1 ckass="title_design">All Transactions</h1>
            <table class="table_design">
                <tr class="th_design">
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Course title</th>
                    <th>Fee</th>
                    <th>Payment Status</th>
                    <th>Payment Type</th>
                    <th>Payment</th>
                </tr>

                @foreach($transaction as $transaction)

                <tr>
                    <td><img class="img_size" src="/course/{{$transaction->image}}"></td>
                    <td>{{$transaction->name}}</td>
                    <td>{{$transaction->email}}</td>
                    <td>{{$transaction->address}}</td>
                    <td>{{$transaction->phone}}</td>
                    <td>{{$transaction->course_title}}</td>
                    <td>{{$transaction->fee}}</td>
                    <td>{{$transaction->payment_status}}</td>
                    <th>{{$transaction->payment_type}}</th>
                    @if($transaction->payment_status=="Unpaid")
                    <td><a href="{{url('amIPaid',$transaction->id)}}" onclick="return confirm('Are you sure you got paid?')" class="btn btn-primary">Got Payment</a></td>
                    @else
                    <td><p style="color:grey;">Paid</p></td>
                    @endif
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