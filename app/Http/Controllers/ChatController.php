<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\AdminMessageSent;
use App\Events\MessageSent;
use Auth;
use App\Models\Message;
use Pusher;
use App\Models\User;
use App\Models\Admin;


class ChatController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('website.test');
    }

    public function fetchMessages()
{
  return Message::with('user')->get();
}

/**
 * Persist message to database
 *
 * @param  Request $request
 * @return Response
 */
public function sendMessage(Request $request)
{ 
    try{
    $from = Auth::user();
    $to=Admin::first();
        $pusher = new Pusher\Pusher(env('PUSHER_APP_KEY'), env('PUSHER_APP_SECRET'), env('PUSHER_APP_ID'), array('cluster' => env('PUSHER_APP_CLUSTER')));
        $message=new Message;
        $message->message=$request->input('message');
        $message->to=$to->id;
        $message->from=Auth()->user()->id;
        $message->save();
        if($message){
           

    $pusher->trigger('steven-backend', 'MessageSent', array('message' => $message,'to'=> $to,'from'=>Auth()->user()));
    broadcast(new MessageSent($to, $message, $from));
   // broadcast(new AdminMessageSent($from, $message, $to));
  }
  
  return 1;
}
catch(\Exception $e){
    return $e->getMessage();
}

}

    public function adminChat(){
        return view('adminchat');
    }

    public function retrieveChatForAdmin(Request $request){
        try{
            $messages=Message::where('from',$request->id)->orWhere('to',$request->id)->get();
            $user=User::findOrFail($request->id);

            $view=view('adminchatajax',compact('user','messages'))->render();
            $data=array(
                "status" => 1,
                "view" => $view
            );
            return $data;
        }
        catch(\Exception $e){
            $data=array(
                "status" => 0,
               
            );
            return $data;
        }
    }


    public function adminSendMessage(Request $request)
{
    
    try{
    $from = Admin::first();
    $to=User::findOrFail($request->id);

        $pusher = new Pusher\Pusher(env('PUSHER_APP_KEY'), env('PUSHER_APP_SECRET'), env('PUSHER_APP_ID'), array('cluster' => env('PUSHER_APP_CLUSTER')));
        $message=new Message;
        $message->message=$request->input('message');
        $message->to=$to->id;
        $message->from=$from->id;
        $message->save();
        if($message){
           

    $pusher->trigger('steven-backend', 'MessageSent', array('message' => $message,'to'=> $to,'from'=>Admin::first()));
    //broadcast(new AdminMessageSent($to, $message, $from));
    broadcast(new MessageSent($from, $message, $to));
  }
  
  return 1;
}
catch(\Exception $e){
    return $e->getMessage();
}

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
}
