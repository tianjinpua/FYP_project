<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function add(){
        $r = request(); //get data form HTML input

        $addCategory = category::create([
            'name'=> $r->productName,
        ]);
        return redirect('admin/addCategory');
    }

    public function index()
    {
       $category = Category::all();
       return view('addCategory')->with('category',$category); 
    }
    
    public function view(){
        $viewProduct= Product::all();
       return view('admin/addCategory') ->with('category',$category);
       return view('admin/addCategory') ->with('category',$category);
       }
   
       public function edit($id){
           $products=Product::all()->where('id',$id);
           //select * from products where id='$id'
           return view('addCategory')->with('category',$category);
       }
}
