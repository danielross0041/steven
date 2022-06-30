<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GameStoreRequest;
use App\Http\Requests\GameUpdateRequest;
use App\Models\Game;
use Storage;
use Stichoza\GoogleTranslate\GoogleTranslate;

class GameController extends Controller
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
        $games=Game::all();
        return view('games.index',compact('games'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $games=Game::all();
        return view('games.create',compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameStoreRequest $request)
    {
        try {
           
            $game=new Game;
            $game->name=$request->name;
            $game->package=$request->package;
            $game->status=$request->status;
            $game->description=$request->description;
            $game->description_zh=$this->tr->setSource('en')->setTarget('zh')->translate($request->description);
            $game->save();
            if($request->has('logo')){
                $files = $request->logo;
                $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = "game/".$game->id."/logo/" . time() . "." . $files->getClientOriginalExtension();
                $file = Storage::disk('public')->put($filePath, file_get_contents($files));
                $game->logo = $filePath;
            }
            if($request->has('image')){
                $files = $request->image;
                $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = "game/".$game->id."/image/". time() . "." . $files->getClientOriginalExtension();
                $file = Storage::disk('public')->put($filePath, file_get_contents($files));
                $game->image = $filePath;
            }
                $game->update();
                return back()->with('success','Game stored successfully!');

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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game=Game::find($id);
        return view('games.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GameUpdateRequest $request, $id)
    {
        try {
            
            $game=Game::findOrFail($id);
            $game->name=$request->name;
            $game->package=$request->package;
            $game->status=$request->status;
            $game->description=$request->description;
            $game->description_zh=$this->tr->setSource('en')->setTarget('zh')->translate($request->description);
            $game->update();
            if($request->has('logo')){
                $files = $request->logo;
                $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = "game/".$game->id."/logo/" . time() . "." . $files->getClientOriginalExtension();
                $file = Storage::disk('public')->put($filePath, file_get_contents($files));
                $game->logo = $filePath;
            }
            if($request->has('image')){
                $files = $request->image;
                $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = "game/".$game->id."/image/". time() . "." . $files->getClientOriginalExtension();
                $file = Storage::disk('public')->put($filePath, file_get_contents($files));
                $game->image = $filePath;
            }
                $game->update();
                return back()->with('success','Game updated successfully!');

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
        $game = Game::findOrFail($id);
        $game->delete();
        return back()->with('success', 'Game deleted successfully');
    }
}
