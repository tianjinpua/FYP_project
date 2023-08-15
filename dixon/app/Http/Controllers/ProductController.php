<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add(){

        $r = request(); //get data form HTML input
        //if image no exist will be add

        if ($r->file('productImage') != ''){
            $image = $r->file('productImage');
            $image->move('images', $image->getClientOriginalName()); //images is the location
            $imageName = $image->getClientOriginalName();
        }

        if ($r->file('productImage') == ''){
            $imageName = '';
        }  

        $addProduct = Product::create([
            'name'=> $r->productName,
            'description'=> $r->productDescription,
            'categoriesID'=> $r->CategoryID,
            'image' => $imageName,

        ]);
        

        $category= DB::table('categories')->get();
        return view('addProduct2')->with('category',$category);
    }

    public function printCategoryProduct($id){
        $viewProduct= DB::table('products')->where('categoriesID','=',$id)->where('role','=',1)
        ->get();
        $category= DB::table('categories')->get();
        return view('forumPage') ->with('products',$viewProduct)->with('categories',$category);
    }

    public function viewAddProduct(){
        $category= DB::table('categories')->get();
        return view('addProduct2')->with('category',$category);
        }

    public function viewForum(){
        return view('forumPageLogin');
        }

    public function viewGameTest(){
        return view('gameTest');
        }

    public function viewGameTestEasy(){
        return view('gameTestEz');
        }

    public function viewGameTestNormal(){
            return view('gameTestNo');
    }
    
    public function viewGameTestHard(){
        return view('gameTestHa');
        }

    public function viewHome(){
        return view('home');
        }

    public function view(){

    $viewProduct= DB::table('products')->where('role','=',1)
     ->orderBy('id', 'DESC')//DESC大到小 ASC小到大
     ->get();
    $category= DB::table('categories')->get();
    return view('forumPage') ->with('products',$viewProduct)->with('categories',$category);
    
    }

    public function approvePage(){
        $products=Product::all()->where('role','=',0);
        $products =DB::table('products')
        ->leftJoin('categories','categories.id','=','products.categoriesID')
        ->select('products.*','categories.name as idName')
        ->get();
        
        return view('approvePage')->with('products',$products);
    }

    public function approve($id){
        $products=Product::all()->where('role','=',0);
        //select * from products where id='$id'      
        $updateProduct = Product::find($id);
        $updateProduct->role=1;
        $updateProduct->save();
        return redirect()->route('approvePage');
    }

    public function decline($id){
        $products=Product::all()->where('role','=',0);
        //select * from products where id='$id'      
        $updateProduct = Product::find($id);
        $updateProduct->role=2;
        $updateProduct->save();
        return redirect()->route('approvePage');
    }

    public function viewApprove(){
        $categories = Category::with('products')->get();
        $products =DB::table('products')
        ->leftJoin('categories','categories.id','=','products.categoriesID')
        ->select('products.*','categories.name as idName')
        ->where('role','=',1)
        ->get();
        
        return view('viewApprove')->with('products',$products);
    }
    
    public function edit($id){
        $products=Product::all()->where('id',$id);
        //select * from products where id='$id'
        return view('editProduct')->with('products',$products);
    }
   
    public function delete($id){
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('forumPage');
       }
    
    public function update(){
        $r=request();
        $product=Product::find($r->id);
        if($r->file('productImage')!=""){//if user uploade something
            $image=$r->file('productImage');
            $image->move('images',$image->getClientOriginalName()); 
            $imageName=$image->getClientOriginalName();
            $product->image=$imageName;
        }
        $product->name=$r->productName;
        $product->despription=$r->productDespription;
        $product ->save();
        return redirect()->route('forumPage');
       }
}
