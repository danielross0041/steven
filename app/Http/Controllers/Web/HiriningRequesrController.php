<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HiringRequest;
use App\Models\Payment;
use App\Models\User;
use Stripe;


class HiriningRequesrController extends Controller
{
  

    public function hiringForm(Request $request)
    {
        
        try{
            $player = User::where('id',$request->player_id)->first();
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $charge=$stripe->charges->create([
                'amount' => $request->amount*100,
                'currency' => 'usd',
                'source' => $request->stripe_token,
                'description' =>' hiring fee',
            ]);
            if($charge->status=="succeeded"){
                   
                // $matchData= array('user_id' => 0 );
                $hiring = new HiringRequest;
                $hiring->user_id=Auth()->user()->id;
                $hiring->player_id=$request->player_id;
                $hiring->save();
                $payment=new Payment;
                $payment->user_id=Auth()->user()->id;
                $payment->hiring_request_id=$hiring->id;
                $payment->amount=$request->amount;
                $payment->status=1;
                $payment->save();
            } else{
                $payment=new Payment;
                $payment->user_id=Auth()->user()->id;
                $payment->hiring_request_id=null;
                $payment->amount=$request->amount;
                $payment->status=0;
                $payment->save();
                return back()->with('error','Payment Unsuccessful!');
            }
            return redirect('/')->with('message','Request sent successfully!');
        } catch(\Exception $e){
            return redirect('/')->with('error', $e->getMessage());
        }
        
    }

    public function checkout($id){
        $user=User::find($id);
        return view('website.include.payment',compact('user'));
    }
}
