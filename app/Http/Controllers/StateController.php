<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function homepage(){
        $data['record'] = [];
        return view("state.home");
    }


    
    public function index()
    {
        $state = State::all();
        return view('state.home',['state'=>$state]);
    
    }

   
    public function create()
    {
        return view('state.insert');
      
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',

        ]);
        $b = new State();
        $b->name = $request->name;
        $b->save();
        return redirect()->back();

      
    }

    
    public function show(State $state)
    {
       
    }

  
    public function edit(State $state)
    {
       
    }

   
    public function update(Request $request, State $state)
    {
       
    }

  
    public function destroy(State $state)
    {
        $state->delete();
        return redirect()->back();

    }
}
