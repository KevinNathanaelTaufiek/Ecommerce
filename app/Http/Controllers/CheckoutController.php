<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Transaction;
use Auth;
use Mail;
use App\Mail\CheckoutMail;

class CheckoutController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function checkout(){
        $userCart = Cart::where('user_id',Auth::user()->id);

        $carts = $userCart->get();

        $transaction = Transaction::create([
            'user_id' => Auth::user()->id
        ]);

        foreach ($carts as $cart) {
            $transaction->detail()->create([
                'product_id' => $cart->product->id,
                'qty' => $cart->qty
            ]);
        }

        Mail::to($userCart->first()->user->email)->send(new CheckoutMail($carts,Auth::user()));

        Cart::where('user_id',Auth::user()->id)->delete();
        return redirect('/');
    }
}
