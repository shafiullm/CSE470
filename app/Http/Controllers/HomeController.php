<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Course;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Stripe;

class HomeController extends Controller
{

    public function index()
    {
        $total_course=Course::all()->count();
        $course_bought=Order::all()->count();
        $total_user=user::all()->count();
        $course=Course::paginate(6);
        return view('home.userpage',compact('course','total_course','course_bought','total_user'));
    }

    public function courseList()
    {
        $course=Course::paginate(9);
        return view('home.courseList',compact('course'));
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            $total_course=Course::all()->count();
            $course_bought=Order::all()->count();
            $total_user=user::all()->count();
            $order=Order::all();
            $total_revenue=0;
            foreach($order as $order)
            {
                $total_revenue= $total_revenue+$order->fee;
            }
            $total_paid = Order::where('payment_status','=','Paid')->get()->count();
            return view('admin.home',compact('total_course','course_bought','total_user','total_revenue','total_paid'));
        }
        else{
            $total_course=Course::all()->count();
            $course_bought=Order::all()->count();
            $total_user=user::all()->count();
            $course=Course::paginate(6);
            return view('home.userpage',compact('course','total_course','course_bought','total_user'));
        }
    }

    public function course_details($id)
    {
        $course=course::find($id);
        return view('home.course_details',compact('course'));
    }

    public function hire_now(Request $request,$id)
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $course=course::find($id);
            $cart = new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->course_title=$course->title;
            $cart->fee=$course->fee;
            $cart->image=$course->image;
            $cart->course_id=$course->id;

            $cart->save();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();
            return view('home.showCart',compact('cart'));
        }
        else
        {
            return redirect('login');
        }
    }

    public function remove_cart($id)
    {
        $cart=cart::find($id);

        $cart->delete();

        return redirect()->back();
    }

    public function cash_order()
    {
        $user=Auth::user();
        $userid=$user->id;
        $data=cart::where('user_id','=',$userid)->get();
        foreach($data as $data)
        {
            $order=new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;
            $order->course_title=$data->course_title;
            $order->fee=$data->fee;
            $order->image=$data->image;
            $order->course_id=$data->course_id;
            $order->payment_status='Unpaid';
            $order->payment_type='Cash';
            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart -> delete();
        }
        return redirect()->back()->with('message','Successfully Hired!');
    }

    public function stripe($totalfee)
    {
        return view('home.stripe',compact('totalfee'));
    }

    public function stripePost(Request $request,$totalfee)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalfee * 100,
                "currency" => "bdt",
                "source" => $request->stripeToken,
                "description" => "Thanks for the payment and hiring a tutor for your course from TutorHire" 
        ]);

        $user=Auth::user();
        $userid=$user->id;
        $data=cart::where('user_id','=',$userid)->get();
        foreach($data as $data)
        {
            $order=new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;
            $order->course_title=$data->course_title;
            $order->fee=$data->fee;
            $order->image=$data->image;
            $order->course_id=$data->course_id;
            $order->payment_status='Paid';
            $order->payment_type='Card';
            $order->save();

            $cartID=$data->id;
            $cart=cart::find($cartID);
            $cart -> delete();
        }
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }
}
