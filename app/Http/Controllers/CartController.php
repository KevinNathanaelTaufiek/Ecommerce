<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;

class CartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $items = Cart::where('user_id','LIKE',Auth::user()->id)->get();
        return view('cart.index', compact('items'));
    }

    public function store(Request $request){
        $duplicate = Cart::where('product_id',$request->product_id)->first();

        if($duplicate){
            return redirect('/cart')->with('error','Item sudah ada di cart');
        }

        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'qty' => 1
        ]);

        return redirect('/cart')->with('success', 'Item berhasil ditambahkan');
    }

    public function update(Request $request, $id){
        Cart::where('id',$id)->update([
            'qty' => $request->quantity
        ]);

        return response()->json([
            'success' => true
        ]);
    }

}
