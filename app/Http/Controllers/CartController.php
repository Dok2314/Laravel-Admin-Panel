<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Good;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(){
        $data['goods'] = Good::all();
        $data['articles'] = Article::all();
        return view('store.index',$data);
    }
 
    public function getProduct($id){
        $data['good'] = Good::findOrFail($id);
        return view('cart.product',$data);
    }
    public function addToCart(Request $request){
        if($request->session()->has('user')){
           $cart = new Cart;
           $cart->user_id = $request->session()->get('user');
           $cart->good_id = $request->good_id;
           $cart->save();
           return redirect('/store');
        }else{
            return redirect(route('user.registration'));
        }
    }
    static function cartItem(){
        $userId = Session::get('user');
        return Cart::where('user_id',$userId)->count();
    }
}
