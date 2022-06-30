<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegistrationRequest;
use App\Models\Match;
use App\Models\User;
use App\Models\Message;
use App\Models\MatchTeam;
use App\Models\TeamPlayer;
use App\Models\MatchPlayer;
use App\Models\Winning;
use App\Models\Feedback;
use Auth;
use Hash;
use Carbon\Carbon;
use Storage;
use Session;
use Stripe;

class HomeController extends Controller
{
    public function index(){
        if(Auth::check()){
            $users=User::whereHas('roles', function($q){
                $q->where('name', 'Player');
            })->where('status',1)->where('hiring_fee','!=',null)->where('id','!=',Auth()->user()->id)->inRandomOrder()
            ->limit(8)->get();
            $messages=Message::where('from',Auth()->user()->id)->orWhere('to',Auth()->user()->id)->get();
            return view('website.index',compact('users','messages'));
        }
        else{
            $users=User::whereHas('roles', function($q){
                $q->where('name', 'Player');
            })->where('status',1)->where('hiring_fee','!=',null)->inRandomOrder()
            ->limit(6)->get();
            return view('website.index',compact('users'));
        }
    }

    public function login(){
        return view('website.login');
    }
    public function guest_login()
    {
        Session::put('url',url()->previous());
        return view('website.login');
    }
    public function register(){
        return view('website.signup');
    }

    public function e_pal(){
        $top_users=User::where('status',1)->orderBy('id','ASC')->limit(4)->get();
        $matches=Match::where('status','ACTIVE')->where('timing','>',Carbon::today())->get();
        return view('website.e-pal',compact('top_users','matches'));
    }

    public function contact(){
        return view('website.contact-us');
    }

    public function communication(){
        $feedbacks=Feedback::where('status',1)->get();
        return view('website.Community')->with(compact('feedbacks'));
    }

    // public function live(){
    //     $matches=Match::where('status','ACTIVE')->where('timing','>',Carbon::today())->get();
    //     // dd($matches);
    //     return view('website.live',compact('matches'));
    // }
    public function create_team(Request $request)
    {   
        $match = Match::where('id',$request->match_id)->first();
        try{
            $validatedData = $request->validate([
                'team_name' => 'sometimes|unique:match_teams,team_name',
            ]);
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $match=Match::findOrFail($request->match_id);
            if(isset($_POST['team_name']) && $_POST['team_name'] != ''){
                $teamData = array('team_name' => $_POST['team_name'], 'added_by'=>Auth::user()->id);
                $team = MatchTeam::create($teamData);
                $team_id = $team->id;
                $playerData = array('team_id' => $team_id);
                if(isset($_POST['player3_id']) && $_POST['player3_id'] != ''){
                    for ($i=1; $i < 5; $i++) {
                        $playerData['player_id'] = $_POST['player'.$i.'_id'];
                        $playerData['player_name'] = $_POST['player'.$i.'_name'];
                        $TeamPlayer = TeamPlayer::create($playerData);
                    }
                    $feilds = array('joined_players'=> $match->joined_players+4);
                    $match_update = Match::where('id',$request->match_id)->update($feilds);
                } else{
                    for ($i=1; $i < 3; $i++) {
                        $playerData['player_id'] = $_POST['player'.$i.'_id'];
                        $playerData['player_name'] = $_POST['player'.$i.'_name'];
                        $TeamPlayer = TeamPlayer::create($playerData);
                    }
                    $feilds = array('joined_players'=> $match->joined_players+2);
                    $match_update = Match::where('id',$request->match_id)->update($feilds);
                }
                $charge=$stripe->charges->create([
                    'amount' => $match->entry_fee*100,
                    'currency' => 'usd',
                    'source' => $request->stripe_token,
                    'description' => $match->name.' entry fee',
                ]);
                if($charge->status=="succeeded"){
                    $matchData= array('team_id' => $team_id , 'match_id' => $_POST['match_id']);
                    $MatchPlayer = MatchPlayer::create($matchData);
                } else{
                    return back()->with('error','Payment Unsuccessful!');
                }

                
            } else{
                $charge=$stripe->charges->create([
                    'amount' => $match->entry_fee*100,
                    'currency' => 'usd',
                    'source' => $request->stripe_token,
                    'description' => $match->name.' entry fee',
                ]);
                if($charge->status=="succeeded"){
                    $feilds = array('joined_players'=> $match->joined_players+1);
                    $match_update = Match::where('id',$request->match_id)->update($feilds);
                    $matchData= array( 'match_id' => $_POST['match_id'], 'user_id' => Auth::user()->id);
                    $MatchPlayer = MatchPlayer::create($matchData);
                } else{
                    return back()->with('error','Payment Unsuccessful!');
                }
            }
            if ($MatchPlayer) {
                $winning_feilds = array('match_players_id'=>$MatchPlayer->id, 'user_id'=>Auth::user()->id, 'amount'=>0, 'match_id'=>$request->match_id,);
                $winning = Winning::create($winning_feilds);
                if($winning){
                    return back()->with('message','Match stored successfully!');
                }
                
            }
        }
        catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

    public function register_user(UserRegistrationRequest $request)
    {
        try{
            $feilds = array(
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'password' => Hash::make($request->password),
                'contact_no' => $request->contact_no,
                'nick' => $request->nick,
                'age' => $request->age,
                'status' => 1,
                'gender' => $request->gender,
                'language' => $request->language
            );
            
            $user = User::create($feilds);
            if($request->has('image')){
                $files = $request->image;
                $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = "user/".$user->id."/logo/" . time() . "." . $files->getClientOriginalExtension();
                $file = Storage::disk('public')->put($filePath, file_get_contents($files));
                $image_feilds = array('image'=>$filePath);
                $image = User::where('id',$user->id)->update($image_feilds);
            }
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($credentials)) {
                return redirect()->route('web')->with('message', 'User successfully saved');
            }
            return back()->with('error', 'User Unsuccessful');
        } catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

   
    

}
