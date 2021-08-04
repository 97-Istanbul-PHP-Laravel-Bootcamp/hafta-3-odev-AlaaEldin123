<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    // view list Product
    public function ProductView(){
    $products = Product::latest()->get();
    return view('backend.product.product_view',compact('products'));
    }



    // // add Product
    public function ProductStore(){

     return view('backend.product.product_store');
    }



    // start create new Product
    public function ProductCreate(Request $request){
    $request->validate([
        'category_id'=>'required',
        'user_id'=>'required' ,
        
        'slug'=>'required',
        'title'=>'required',
        'description'=>'required',
        'order'=>'required',
        'status'=>'required',
        'prc'=>'required',
        'cid'=>'required',

    ]);

    Product::insert([
     'category_id'=>$request->category_id,
        'user_id'=>$request->user_id,
        'unicode'=>random_int(1000000, 9999999),
        'slug'=>$request->slug,
        'title'=>$request->title,
        'description'=>$request->description,
        'order'=>$request->order,
        'status'=>$request->status,
        'prc'=>$request->prc,
        'cid'=>$request->cid,


    ]);

    return view('backend.product.product_view');

    } // end creatre new Product
    


    // return to Edit Product view page
    public function ProductEdit(){

        return view('backend.product.product_edit');
    }




     // Delete Product 
     public function ProductDelete(){

     return "Product deleted succusfuly";
     }

}
