<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Order;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();
        return view('admin.courseCategory',compact('data'));
    }
    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Course Category Added Successfully');
    }
    public function delete_category($id)
    {
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Course Category Deleted Successfully');
    }


    public function view_course()
    {
        $category = category::all();
        return view('admin.course',compact('category'));
    }
    public function add_course(Request $request)
    {
        $course=new course;
        $course->title=$request->title;
        $course->description=$request->description;
        $course->category=$request->category;
        $course->fee=$request->fee;
        $course->time=$request->time;
        $course->grade=$request->grade;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('course',$imagename);
        $course->image=$imagename;

        $course->save();
        return redirect()->back()->with('message','Course Added Successfully');
    }

    public function show_course()
    {
        $course=course::all();
        return view('admin.show_course',compact('course'));
    }

    public function delete_course($id)
    {
        $course = course::find($id);
        $course->delete();
        return redirect()->back()->with('message','Course Deleted Successfully');
    }

    public function update_course($id)
    {
        $course=course::find($id); 
        $category=category::all();
        return view('admin.update_course',compact('course','category'));
    }

    public function update_course_confirm(Request $request,$id)
    {
        $course=course::find($id);
        $course->title=$request->title;
        $course->description=$request->description;
        $course->category=$request->category;
        $course->fee=$request->fee;
        $course->time=$request->time;
        $course->grade=$request->grade;

        $image=$request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('course',$imagename);
            $course->image=$imagename;
        }
        $course->save();
        return redirect()->back()->with('message','Course Updated Successfully');
    }

    public function transaction()
    {
        $transaction=order::all();
        return view('admin.transaction',compact('transaction'));
    }
    
    public function amIPaid($id)
    {
        $transaction = order::find($id);
        $transaction->payment_status="Paid";
        $transaction->save();
        return redirect()->back();

    }
}

