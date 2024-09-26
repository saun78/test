<?php

namespace App\Http\Controllers;

use App\Models\cartid;
use App\Models\carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartcontroller extends Controller
{
    public function add_to_cart(Request $request,$id){
        $formfeilds = $request->validate([
        "p_mass"=>"required|numeric:10",
        ]);

        $cart = new carts();
        $cart->p_id = $id;
        $cart->u_id = Auth::id();
        $cart->c_id = 0;
        $cart->p_mass = $formfeilds["p_mass"];
        $cart->status = 'pending';
        $cart->save();

        if ($cart) {
            return redirect("/index")->with("success","add cart successfully");
        }
        
    }

    public function cart_list(){
        
        $carts = carts::selectRaw("*,carts.p_mass as total_mass")
        ->join('products','carts.p_id','=','products.id')
        ->where("u_id",Auth::id())
        ->where("status","pending")
        ->get();

        
        
        return view('cart_list', compact('carts'));
    }

    public function checkout(){

        $cartid = cartid::selectRaw("MAX(id) as cart_id")->first();

        if ($cartid==null) {
            $c_id = 1;
        }else{
            $c_id = $cartid->cart_id+1;
        }

        $cart = carts::where("u_id",Auth::id())
                        ->where('c_id',0)
                        ->where('status','pending')
                        ->update(['c_id' => $c_id,'status'=>"checkout"]);
        
        if($cart){

        
            return redirect("cart_list")->with('success','checkout complete');

        }
    }

        public function checkout_show(){
                
            $carts = carts::selectRaw("*,carts.p_mass as total_mass")
            ->join('products','carts.p_id','=','products.id')
            ->where("u_id",Auth::id())
            ->where("status","checkout")
            ->get();

            return view('checkout', compact('carts'));
    }

}
