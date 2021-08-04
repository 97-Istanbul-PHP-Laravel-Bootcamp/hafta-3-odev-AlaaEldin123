<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{   
    // view list categories
    public function CategoryView(){
    $categories = Category::latest()->get();
     return view('backend.category.category_view',compact('categories'));
    }


    // return to add categories page
    public function CategoryStore(){

     return view('backend.category.category_store');
    
    } // end return to add category page
    



    // create new category 
    public function CategoryCreate(Request $request){
    $request->validate([
        'title'=>'required',
        'description'=>'required',
        'slug'=>'required',
        'status' =>'required',

    ]);

    Category::insert([
        'title'=> $request->title,
        'description'=>$request->description,
        'slug'=>$request->slug,
        'status'=>$request->status,
    ]);


    return redirect()->route('Category.view');




    } // end create new category

    // return to Edit Category view page
    public function CategoryEdit(){

        return view('backend.category.category_edit');
    }

     // Delete Category 
     public function CategoryDelete(){

     return "Category deleted succusfuly";
     }

}
