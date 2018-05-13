<?php

namespace App\Http\Controllers;

use App\Order;
use App\Address;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
   public function index()
   {
       //ketika di dashboard di click Checkout,maka halaman
       // checkout muncul dari method index ini.
    return view('front.shipping-info');
   }

    public function store(Request $request)
    {
      //validasi agar sesuai inputan yang ditetapkan
      //setelah validasi buat methoe pake elequent

        $payment = $this->validate($request,[
            'addressline'=>'required|min:8',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required|integer',
            'phone'=>'required|numeric|min:10',
        ]);
        
        $adress = new Address;
        $adress->user_id = Auth::user()->id;
        $adress->addressline = $request-> addressline;
        $adress->city  = $request-> city;
        $adress->state = $request-> state;
        $adress->zip = $request-> zip;
        $adress->country = $request-> country;
        $adress->phone = $request-> phone;
     
        $adress->save();

            // kembali ke halaman shiiping-info
            //data sudah masuk ke database
            return redirect()->route('front.payment');
    
    }

//     public function payment()
//     {
        
//         return view('front.pembayaran');
//     }

//     public function storePayment(Request $request)
//     {
//         // Set your secret key: remember to change this to your live secret key in production
//     // See your keys here: https://dashboard.stripe.com/account/apikeys
//         \Stripe\Stripe::setApiKey("sk_test_LgXhJ065wVkV71zNeRZIeSuY");

// // Get the credit card details submitted by the form
//         $token = $request->stripeToken;

// // Create a charge: this will charge the user's card
//         try {
//             $charge = \Stripe\Charge::create(array(
//                 "amount" => Cart::total()*100, // Amount in cents
//                 "currency" => "usd",
//                 "source" => $token,
//                 "description" => "ini percobaan"
//             ));
//         } catch (\Stripe\Error\Card $e) {
//             // The card has been declined
//         }
//       //Create the order
//        Order::createOrder();

//         //redirect user to some page
//         return "Order completed";

//     }


}
