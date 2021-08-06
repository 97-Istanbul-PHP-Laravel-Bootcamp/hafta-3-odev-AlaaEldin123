<?php

namespace App\Http\Controllers\backend;
use App\Models\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{   
    // view list cart
    public function CartView(){
     $carts =   Cart::latest()->get();
     return view('backend.cart.cart_view',compact('carts'));
    }

    // // add cart
    public function CartStore(){

     return view('backend.cart.cart_store');
    }
    
    // return to Edit cart view page
    public function CartEdit(){

        return view('backend.cart.cart_edit');
    }

     // Delete cart 
     public function CartDelete(){

     return "cart deleted succusfuly";
     }
}
