<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function homepage(){
        $data['record'] = [];
        return view("college.home");

    }
    
    public function index()
    {
        $college = College::all();
        return view('college.home',['college'=>$college]);
        
        
        
        
    }

  
    public function create()
    {
        return view('college.insert');
       
      
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required',
            'description'=>'required',
            'rank'=>'required',
            'state_id'=>'required',
            'city_id'=>'required',
            'category'=>'required',
        ]);
        $filename = time() ."." . $request->image->extension();
        $request->image->move(public_path('image'),$filename);

        $b = new College();
        $b->description = $request->description;
        $b->rank = $request->rank;
        $b->state_id = $request->state_id;
        $b->city_id = $request->city_id;
        $b->category = $request->category;
        $b->image= $filename;
        $b->save();
        return redirect()->back();


    }

    
    public function show(College $college)
    {
    }

   
    public function edit(College $college)
    {
       
    }

    
    public function update(Request $request, College $college)
    {
        
    }

   
    public function destroy(College $college)
    {
        $college->delete();
        return redirect()->back();
        
        
    }
}
