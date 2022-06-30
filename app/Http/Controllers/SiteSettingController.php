<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Requests\SiteSettingStoreRequest;
use App\Http\Requests\FooterStoreRequest;
use Storage;
use Illuminate\Support\Facades\Artisan;
use Stichoza\GoogleTranslate\GoogleTranslate;

class SiteSettingController extends Controller
{
    public $tr;
    public function __construct()
    {
        $this->tr=new GoogleTranslate();
    }

    public function store(SiteSettingStoreRequest $request){
        try{
        
        $setting=SiteSetting::find(1);
        if($setting){
        if($request->has('logo')){
            $files = $request->logo;
            $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
            $filePath = "site/logo/" . time() . "." . $files->getClientOriginalExtension();
            $file = Storage::disk('public')->put($filePath, file_get_contents($files));
            $setting->logo = $filePath;
        }
        $setting->update();}
        else {
            $setting=new SiteSetting;
            if($request->has('logo')){
                $files = $request->logo;
                $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = "site/logo/" . time() . "." . $files->getClientOriginalExtension();
                $file = Storage::disk('public')->put($filePath, file_get_contents($files));
                $setting->logo = $filePath;
            }
            $setting->save();
        }
        return back()->with('success','Settings Updated Successfully!');
    }
    catch(\Exception $e){
        dd($e);
        return back()->with('error',$e->getMessage());
    }
    }

    public function index(){
       
        return view('site_settings.create');
    }

    public function footer(FooterStoreRequest $request){
        try{
            
            $setting=SiteSetting::find(1);
            if($setting){
                $setting->footer_desc=$request->footer_desc ?? null;
                if($setting->footer_desc!=null){
                $setting->footer_desc_zh=$this->tr->setSource('en')->setTarget('zh')->translate($setting->footer_desc);}
                $setting->copyright=$request->copyright ?? null;
                if($setting->copyright!=null){
                $setting->copyright_zh=$this->tr->setSource('en')->setTarget('zh')->translate($setting->copyright);}
            $setting->update();}
            else {
                $setting=new SiteSetting;
                $setting->footer_desc=$request->footer_desc ?? null;
                if($setting->footer_desc!=null){
                    $setting->footer_desc_zh=$this->tr->setSource('en')->setTarget('zh')->translate($setting->footer_desc);}
                $setting->copyright=$request->copyright ?? null;
                if($setting->copyright!=null){
                    $setting->copyright_zh=$this->tr->setSource('en')->setTarget('zh')->translate($setting->copyright);}
                $setting->save();
            }
            return back()->with('success','Footer Updated Successfully!');
        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    public function optimize(){
        try{
    $exitCode = Artisan::call('storgae:link');
     return back()->with('success','Application Optimized');
    }
        catch(\Exception $e){
         return back()->with('error','Something Went Wrong!');   
        }
    }
    
    public function optimizeClear(){
        try{
    $exitCode = Artisan::call('optimize:clear');
     return back()->with('success','Application Cache Cleared');
     
        }
        catch(\Exception $e){
         return back()->with('error','Something Went Wrong!');   
        }
        
    }
}
