<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WithdrawalRequest;
use App\Models\PlayerWallet;
use App\Models\PlayerBankDetail;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function withdrawal_request()
    {
        // dd("here");
        $withdrawal_request = WithdrawalRequest::all();
        return view('transaction.withdrawal_request')->with(compact('withdrawal_request'));
    }
    public function withdrawal_approve(Request $request)
    {
        try{
            
            $withdrawal_request = WithdrawalRequest::find($request->id);

            $wallet = PlayerWallet::where('player_id',$withdrawal_request->player_id)->first();

            $withdrawal_request->status = $request->status;
            $withdrawal_request->update();

            $walletUpdate = PlayerWallet::find($wallet->id);
            $walletUpdate->amount = $walletUpdate->amount-$withdrawal_request->amount;
            $walletUpdate->update();

            if($withdrawal_request && $walletUpdate){
                return 1;
            }
            return 0;
        } catch(\Exception $e){
            return$e->getMessage();
        }
    }

    public function player_bank_details()
    {
        $bank_details = PlayerBankDetail::all();
        return view('transaction.bank_details')->with(compact('bank_details'));

    }
}
