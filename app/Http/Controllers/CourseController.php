<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function homepage(){
        $data['record'] = [];
        return view("course.home");
    }
   
    public function index()
    {  
        $course = Course::all();
        return view('course.home',['course'=>$course]);

    }

   
    public function create()
    {
        return view('course.insert');
        
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'duration'=>'required',
            'fee'=>'required',
            'college_id'=>'required',
            
        ]);
       
        $b = new Course();
        $b->name = $request->name;
        $b->duration = $request->duration;
        $b->fee = $request->fee;
        $b->college_id= $request->college_id;
        $b->save();
        return redirect()->back();
  
        
    }

   
    public function show(Course $course)
    {
        
    }

   
    public function edit(Course $course)
    {
       
    }

  
    public function update(Request $request, Course $course)
    {
       
    }

   
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->back();  
    }
}
