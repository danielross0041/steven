<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class FeedbackController extends Controller
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
        $feedbacks=Feedback::all();
        return view('feedback.index',compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        try{
            $feedback=new Feedback;
            $feedback->name=$request->name;
            $feedback->email=$request->email;
            $feedback->subject=$request->subject;
            $feedback->subject_zh=$this->tr->setSource('en')->setTarget('zh')->translate($request->subject);
            $feedback->feedback=$request->feedback;
            $feedback->feedback_zh=$this->tr->setSource('en')->setTarget('zh')->translate($request->feedback);
            $feedback->status=1;
            $feedback->save();
            if($feedback){
                return back()->with('success','Feedback has been created!');
            }
            return back()->with('error','Feedback could not be submitted!');
        } catch(\Exception $e){
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
       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $feedback=Feedback::findOrFail($id);
            return view('feedback.edit',compact('feedback'));
        } catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
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
            $feedback=Feedback::findOrFail($id);
            $feedback->name=$request->name;
            $feedback->email=$request->email;
            $feedback->subject=$request->subject;
            $feedback->subject_zh=$this->tr->setSource('en')->setTarget('zh')->translate($request->subject);
            $feedback->feedback=$request->feedback;
            $feedback->feedback_zh=$this->tr->setSource('en')->setTarget('zh')->translate($request->feedback);
            $feedback->status=1;
            $feedback->update();
            if($feedback){
                return back()->with('success','Feedback hass been updated!');
            }
            return back()->with('error','Feedback could not be updated!');
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
        try{
            $feedback = Feedback::findOrFail($id);
            $feedback->delete();
            if($feedback){
                return back()->with('success', 'Feedback deleted successfully');
            }
            return back()->with('error', 'Feedback could not deleted');
        } catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
        
    }
}
