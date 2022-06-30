<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MatchStoreRequest;
use App\Http\Requests\MatchUpdateRequest;
use App\Models\Match;
use App\Models\Game;
use App\Models\MatchPlayer;
use App\Models\MatchTeam;
use App\Models\MatchPositionPoint;
use App\Models\User;
use App\Models\Winning;
use Storage;
use Stichoza\GoogleTranslate\GoogleTranslate;

class MatchController extends Controller
{

    public $tr;
    public function __construct()
    {
        $this->tr=new GoogleTranslate();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches=Match::with('game','players')->get();
        return view('matches.index',compact('matches'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $games=Game::where('status',1)->get();
        return view('matches.create',compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MatchStoreRequest $request)
    {
        try{

            

        $match=new Match;
        $match->game_id=$request->game_id;
        $match->name=$request->name;
        $match->url=$request->url;
        $match->timing=$request->timing;
        $match->prize_pool=$request->prize_pool;
        $match->per_kill=$request->per_kill;
        $match->team=$request->team;
        $match->entry_fee=$request->entry_fee;
        $match->total_player=$request->total_player;
        $match->map=$request->map;
        $match->prize_desc=$request->prize_desc;
        $match->prize_desc_zh=$this->tr->setSource('en')->setTarget('zh')->translate($request->prize_desc);
        $match->sponsor=$request->sponsor;
        $match->sponsor_zh=$this->tr->setSource('en')->setTarget('zh')->translate($request->sponsor);
        $match->desc=$request->desc;
        $match->desc_zh=$this->tr->setSource('en')->setTarget('zh')->translate($request->desc);
        $match->private_desc=$request->private_desc;
        $match->private_desc_zh=$this->tr->setSource('en')->setTarget('zh')->translate($request->private_desc);
        $match->status=$request->status;
        $match->room_id=$request->room_id;
        $match->save();
        if($request->has('banner')){
            $files = $request->banner;
            $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
            $filePath = "match/".$match->id."/banner/". time() . "." . $files->getClientOriginalExtension();
            $file = Storage::disk('public')->put($filePath, file_get_contents($files));
            $match->banner = $filePath;
            $match->update();
        }
        $pos=new MatchPositionPoint;
        $pos->match_id=$match->id;
        $pos->save();
          return back()->with('success','Match Created Successfully!'); 
    }
    catch(\Exception $e){
       
        return back()->with('error',$e->getMessage());
    }   
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
        $match=Match::findOrFail($id);
        $games=Game::where('status',1)->get();
        return view('matches.edit',compact('match','games'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MatchUpdateRequest $request, $id)
    {
        try{
           

        $match=Match::findOrFail($id);
        $match->game_id=$request->game_id;
        $match->name=$request->name;
        $match->url=$request->url;
        $match->timing=$request->timing;
        $match->prize_pool=$request->prize_pool;
        $match->per_kill=$request->per_kill;
        $match->team=$request->team;
        $match->entry_fee=$request->entry_fee;
        $match->total_player=$request->total_player;
        $match->map=$request->map;
        $match->prize_desc=$request->prize_desc;
        $match->sponsor=$request->sponsor;
        $match->desc=$request->desc;
        $match->private_desc=$request->desc;
        $match->status=$request->status;
        $match->room_id=$request->room_id;
        $match->save();
        if($request->has('banner')){
            $files = $request->banner;
            $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
            $filePath = "match/".$match->id."/banner/". time() . "." . $files->getClientOriginalExtension();
            $file = Storage::disk('public')->put($filePath, file_get_contents($files));
            $match->banner = $filePath;
            $match->update();
        }
          return back()->with('success','Match Edited Successfully!'); 
    }
    catch(\Exception $e){
        dd($e);
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
        $match = Match::findOrFail($id);
        $match->delete();
        return back()->with('success', 'Match deleted successfully');
    }

    public function points($id){
        
        $match=MatchPositionPoint::where('match_id',$id)->first();
        return view('matches.points',compact('match'));
    }

    public function positionPoints(Request $request,$id){
        try{
        $match=MatchPositionPoint::where('match_id',$id)->first();
        $match->position_1=$request->position_1 ?? 0;
        $match->position_2=$request->position_2 ?? 0;
        $match->position_3=$request->position_3 ?? 0;
        $match->position_4=$request->position_4 ?? 0;
        $match->position_5=$request->position_5 ?? 0;
        $match->other=$request->other ?? 0;
        $match->update();
        return back()->with('success','Points Updated Successfully');
        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    public function info($id){
        $match=Match::with('game','players','place')->findOrFail($id);
        
        return view('matches.detail',compact('match'));
    }

    public function playerInfo(Request $request){
        try{
        $m=Match::findOrFail($request->m_id);
        $find_match=MatchPlayer::where('match_id',$request->m_id)->where('user_id',$request->u_id)->orWhere('team_id',$request->u_id)->first();
        $match_player_id = $find_match->id;
        
        $match_update_feilds = array('win_prize' => $request->win, 'kills' => $request->kills, 'kill_amount' => ($request->kills*$m->per_kill) , 'position' => $request->pos, 'refund'=> $request->refund, 'bonus' => $request->bonus, 'total_amount' => ($request->bonus+($request->kills*$m->per_kill)+$request->win));
        $update_match = MatchPlayer::where('id',$match_player_id)->update($match_update_feilds);
        $match = MatchPlayer::where('id',$match_player_id)->first();
        if($match->user_id !== null){
            $winning = Winning::where('match_players_id',$match->id)->where('user_id',$match->user_id)->first();
            // dd($winning);
            if($winning !== null){
                $feilds = array('amount'=>$match->total_amount);
                $create = Winning::where('id',$winning->id)->update($feilds);
            } else{
                $feilds = array('match_players_id'=>$match->id,'user_id'=>$request->u_id,'amount'=>$match->total_amount, 'match_id'=>$match->match_id,);
                $create = Winning::create($feilds);
            }
        } else{
            $user_id = $match->team['added_by'];
            $winning = Winning::where('match_players_id',$match->id)->where('user_id',$user_id)->first();
            // dd($winning);
            if($winning !== null){
                $feilds = array('amount'=>$match->total_amount);
                $create = Winning::where('id',$winning->id)->update($feilds);
            } else{
                $feilds = array('match_players_id'=>$match->id,'user_id'=>$user_id,'amount'=>$match->total_amount, 'match_id'=>$match->match_id,);
                $create = Winning::create($feilds);
            }
        }
        
        return 1;
        }
        catch(\Exception $e){
            return $e->getMessage();
        }

    }

    public function result(Request $request,$id){
        try{
        $validatedData = $request->validate([
            'result' => 'required',   
            
          
        ]);
        $match=Match::findOrFail($id);
        $match->result=$request->result;
        $match->update();
        return back()->with('success','Result updated successfully!');
    }catch(\Exception $e){
        return back()->with('error',$e->getMessage());
    }
    }

    public function player_profile($id='')
    {
        $user = User::where('id',$id)->first();
        return view('matches.profile')->with(compact('user'));
    }
    public function team_profile($id='')
    {
        $team = MatchTeam::where('id',$id)->first();
        // dd($team);
        return view('matches.team')->with(compact('team'));
    }
}
