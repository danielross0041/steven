<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Http\Requests\AnnouncementRequest;
use Stichoza\GoogleTranslate\GoogleTranslate;

class AnnouncementController extends Controller
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
        $announcements=Announcement::all();
        // dd($announcements);
        return view('announcements.index',compact('announcements'));
        // try{
           

        //     $validator = Validator::make($request->all(), [
        //         'name' => 'required',
        //         'email' => 'required|email',
        //         'phone' => 'required',
        //         'message' => 'required'
        //     ]);
         
        //     if ($validator->passes()) {
               
            
         
           
        // $inquiry=new Inquiry;
        // $inquiry->name=$request->name;
        // $inquiry->email=$request->email;
        // $inquiry->phone=$request->phone;
        // $inquiry->message=$request->message;
        // $inquiry->save();
        // $data=array(
        //     'status' => 1,
        //     'message' => "Submitted Successfully!"
        // );
        // return $data;
        //     }
        //     else {
        //         $data=array(
        //             'status' => 2,
        //             'message' => $validator->errors()->all()
        //         );
        //         return $data;
               
        //     }
        // }
        // catch(\Exception $e){
        //     $data=array(
        //         'status' => 0,
        //         'message' => "Something Went Wrong!"
        //     );
        //     return $data;
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $announcements=Announcement::all();
        return view('announcements.create',compact('announcements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementRequest $request)
    {
        // dd("here");
        try {
            
            $announcement=new Announcement;
            $announcement->announcement=$request->announcement;
            $announcement->announcement_zh=$this->tr->setSource('en')->setTarget('zh')->translate($request->announcement);
            $announcement->save();
            return back()->with('success','Announcement stored successfully!');

        }catch(\Exception $e){
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
        $announcement=Announcement::find($id);
        return view('announcements.edit',compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnnouncementRequest $request, $id)
    {
        try {
            
            $announcement=Announcement::findOrFail($id);
            
            $announcement->announcement=$request->announcement;
            $announcement->announcement_zh=$this->tr->setSource('en')->setTarget('zh')->translate($request->announcement);
            $announcement->update();
            
                return back()->with('success','Announcement updated successfully!');

        }catch(\Exception $e){
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
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();
        return back()->with('success', 'Announcement deleted successfully');
    }
}
