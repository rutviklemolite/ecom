<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserCart;
use Auth;

class CartController extends Controller
{
    public function cartDetail(Request $request){
        $usercart = UserCart::with('product')->where('user_id',Auth::id())->get();
        // dd($usercart);
        return view('web.cart',compact('usercart'));
    }
}
