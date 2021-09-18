<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function homepage(){
        $data['record'] = [];
        return view("city.home");

    }
    
    public function index()
    {
        $city = City::all();
        return view('city.home',['city'=>$city]);
        
       
    }

    public function create()
    {
        return view('city.insert');
       
      
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'state_id'=>'required',
            
        ]);
       
        $b = new City();
        $b->name = $request->name;
        $b->state_id = $request->state_id;
        $b->save();
        return redirect()->back();

      
    }

    
    public function show(City $city)
    {
       
    }

   
    public function edit(City $city)
    {
        
    }

   
    public function update(Request $request, City $city)
    {
     
    }

    
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->back();
    }
}
