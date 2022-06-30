<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HiringRequest;
use App\Models\PlayerBankDetail;
use App\Models\Payment;
use App\Models\WithdrawalRequest;
use Auth;
use App\Http\Requests\BankDetailsRequest;
use App\Http\Requests\UserUpdateProfileRequest;
use Storage;

class DashboardController extends Controller
{
    //


    public function user_dashboard()
    {
        return view('website.user-dashboard.index');
    }
    public function hiring_fee()
    {
        return view('website.user-dashboard.hiring_fee');
    }
    public function payment()
    {
        $payments = Payment::where('user_id',Auth::user()->id)->get();
        return view('website.user-dashboard.payment')->with(compact('payments'));
    }
    public function hiring_request()
    {
        $user = Auth::user();
        $sents = HiringRequest::where('user_id',$user->id)->get();
        $recieveds = HiringRequest::where('player_id',$user->id)->get();
        return view('website.user-dashboard.hiring_request')->with(compact('sents','recieveds'));
    }
    public function update_hiring_fee(Request $request)
    {
        try{
            $user = User::find(Auth::user()->id);
            $user->hiring_fee = $request->hiring_fee;
            $user->update();
            if($user){
                return back()->with('message','Hiring Fee Updated');
            }
            return back()->with('error','Failed Updating Hiring Fee');
        } catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
    public function bank_details()
    {
        $user = Auth::user();
        $bank_details = PlayerBankDetail::where('player_id',$user->id)->first();
        return view('website.user-dashboard.bank_details')->with(compact('bank_details'));
    }
    public function update_bank_details(BankDetailsRequest $request)
    {
        try{
            $userBankDetails = PlayerBankDetail::where('player_id',Auth::user()->id)->first();
            $feilds = array(
                'player_id' => Auth::user()->id,
                'bank_name' => $request->bank_name,
                'account_title' => $request->account_title,
                'account_number' => $request->account_number
            );
            if ($userBankDetails == null) {
                $create = PlayerBankDetail::create($feilds);
            } else{
                $create = PlayerBankDetail::where("id",$userBankDetails->id)->update($feilds);
            }
            if($create){
                return back()->with('message','Bank Details Updated');
            }
            return back()->with('error','Failed Updating Bank Details');
        } catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

    public function profile()
    {
        $user = Auth::user();
        return view('website.user-dashboard.profile')->with(compact('user'));
    }
    public function profile_update(UserUpdateProfileRequest $request)
    {
        try{
            $feilds = array(
                'name' => $request->name,
                'address' => $request->address,
                'contact_no' => $request->contact_no,
                'nick' => $request->nick,
                'age' => $request->age,
                'status' => 1,
                'gender' => $request->gender,
                'language' => $request->language,
            );
            
            $user = User::where('id',Auth::user()->id)->update($feilds);
            if($request->has('image')){
                $files = $request->image;
                $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = "user/".Auth::user()->id."/logo/" . time() . "." . $files->getClientOriginalExtension();
                $file = Storage::disk('public')->put($filePath, file_get_contents($files));
                $image_feilds = array('image'=>$filePath);
                $image = User::where('id',Auth::user()->id)->update($image_feilds);
            }
            // dd("here");
            return redirect()->back()->with('message', 'Profile Updated Successfully');
        } catch(\Exception $e){
            return back()->with('message', $e->getMessage());
        }
    }
    public function wallet()
    {
        $user = Auth::user();
        $wallet = $user->hiring_request;
        if ($wallet) {
            $wallet = $user->hiring_request()
                ->join('payments', 'payments.hiring_request_id', '=', 'hiring_requests.id')
                ->sum('amount');
        }
        return view('website.user-dashboard.wallet')->with(compact('wallet'));
    }
    public function withdrawal()
    {
        $user = Auth::user();
        $wallet = $user->wallet;
        $withdrawalRequest = WithdrawalRequest::where('player_id',$user->id)->get();
        
        return view('website.user-dashboard.withdrawal')->with(compact('withdrawalRequest','wallet'));
    }
    public function withdrawal_amount(Request $request)
    {
        try{
            $feilds = array(
                'amount' => $request->amount,
                'player_id' => Auth::user()->id,
            );
            $create = WithdrawalRequest::create($feilds);
            return redirect()->back()->with('message', 'Withdrawal Requested Successfully');
        } catch(\Exception $e){
            return back()->with('message', $e->getMessage());
        }
    }
}
