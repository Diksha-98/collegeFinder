<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\College;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function homepage(){
        $data['record'] = [];
        return view("category.home");

    }
    
    public function index(Request $request)
    {
        if(isset($request->search)){
            $data_college = College::where("category",$request->search)->orWhere('category','like',"%$request->search%")->get();
            return view("search",['data_college'=>$data_college]);

        }
        else{
        $data['categories'] = Category::all();
        }
        return view('category.home',$data);
        
    }

   
    public function create()
    {
        return view('category.insert');
       
       
    }

   
    
    public function store(Request $request)
    {
        $request->validate([
            'c_name'=>'required',
            'cover'=>'required',
            
        ]);
        $filename = time() ."." . $request->cover->extension();
        $request->cover->move(public_path('cover'),$filename);

        $b = new category();
        $b->c_name = $request->c_name;
        $b->cover= $filename;
        $b->save();
        return redirect()->back();

        
        
    }

   
    public function show(Category $category)
    {
        $data['colleges'] = Category::find($_GET['categories']);
        return view('view',$data);
    }

    public function edit(Category $category)
    {
       
    }

    
    public function update(Request $request, Category $category)
    {
        
    }

    
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
        
    }
}
