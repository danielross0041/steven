<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HiringRequest;
use App\Models\PlayerWallet;

class HiriningRequesrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hirings=HiringRequest::all();
        return view('hiring.index',compact('hirings'));
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
        $hiring=HiringRequest::where('id',$id)->first();
        return view('hiring.edit',compact('hiring'));
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
        try{
            $hiring=HiringRequest::find($id);
            $player_id = $hiring->player_id;
            // dd("here",$id,$player_id);
            $hiring->reply = $request->reply;
            $hiring->timing = $request->timing;
            $hiring->status = 1;
            $hiring->update();
            $playerWallet = PlayerWallet::where('player_id',$player_id)->first();
            if ($playerWallet) {
                $feilds = array(
                    'player_id' => $player_id,
                    'amount' => $hiring->payment['amount']+$playerWallet->amount,
                );
                $create = PlayerWallet::where("id",$playerWallet->id)->update($feilds);
            } else{
                $feilds = array(
                    'player_id' => $player_id,
                    'amount' => $hiring->payment['amount'],
                );
                $create = PlayerWallet::create($feilds);
            }
            if($hiring && $create){
                return back()->with('success','Hiring hass been updated!');
            }
            return back()->with('error','Hiring could not be updated!');
        } catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
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
}
