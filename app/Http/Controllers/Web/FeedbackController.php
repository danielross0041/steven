<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Stichoza\GoogleTranslate\GoogleTranslate;

class FeedbackController extends Controller
{
    public $tr;
    public function __construct()
    {
        $this->tr=new GoogleTranslate();
    }

   
    public function feedback_submit(Request $request)
    {
       
        try{
            $feedback=new Feedback;
            $feedback->name=$request->name;
            $feedback->email=$request->email;
            $feedback->status=1;
            // $feedback->subject=$tr->setSource()->setTarget('en')->translate($request->subject);
            // $feedback->subject_zh=$tr->setSource()->setTarget('zh')->translate($request->subject);
            // $feedback->subject=$request->subject;
            $feedback->feedback=$this->tr->setSource()->setTarget('en')->translate($request->feedback);
            $feedback->feedback_zh=$this->tr->setSource()->setTarget('zh')->translate($request->feedback);

            $feedback->save();
            if($feedback){
                return back()->with('success','Feedback hass been submitted!');
            }
            return back()->with('error','Feedback could not be submitted!');
        } catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
        

    }
}
