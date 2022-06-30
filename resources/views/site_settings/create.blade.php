@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Site Settings</h2>
        </div>
    </div>
        <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Settings Done! &nbsp;</strong>{{Session::get('success')}}
            </div>
        @endif 
        @if(Session::has('error'))
            <div class="alert alert-danger text-center" role="alert">
                <strong>Error! &nbsp;</strong>{{Session::get('error')}}
            </div>
        @endif 
            
         </div> 
    <div class="col-md-12">
        <div class="card">
            <form   action="{{ route('settings') }}" method="post"  enctype="multipart/form-data" > 
                {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Logo</h4>
                    
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Logo</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="logo" id="logo" value="{{ old('logo') }}" placeholder="Logo ">
                            @if ($errors->has('logo'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('logo') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <?php
                    $setting=\App\Models\SiteSetting::find(1);
                    ?>
                    @if($setting)
                    <div class="form-group row">
                        <div class="col-md-12 text-center">
                    <img src="{{asset('storage/'.$setting->logo)}}" alt="Logo" width="200" height="100" style="float:center">
                    </div>
                    </div>
                    @endif
                  </div>
                    <div class="border-top">
                       <div class="card-body">
                        <a href="{{route('welcome')}}">
                        <button type="button" class=" btn btn-danger">
                        Back
                        </button></a>
                        <button type="submit" class="btn btn-primary"> Submit</button>
                        </div>
                     </div>
                </div>     
            </form>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <form   action="{{ route('settings.footer') }}" method="post"  enctype="multipart/form-data" > 
                {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Footer</h4>
                    
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                        <textarea id="footer_desc" name="footer_desc" rows="4" cols="50" class="form-control">{{(isset($setting->footer_desc) ? $setting->footer_desc: 'welcome to Steven Server')}}</textarea>
                        @if ($errors->has('footer_desc'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('footer_desc') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Copyright</label>
                        <div class="col-sm-9">
                        <textarea id="copyright" name="copyright" rows="4" cols="50" class="form-control">{{(isset($setting->copyright)?$setting->copyright:'welcome to Steven Server')}}</textarea>
                        @if ($errors->has('copyright'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('copyright') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="border-top">
                       <div class="card-body">
                        <a href="{{route('welcome')}}">
                        <button type="button" class=" btn btn-danger">
                        Back
                        </button></a>
                        <button type="submit" class="btn btn-primary"> Submit</button>
                        </div>
                     </div>
</div>
</form>
</div>
</div>
</div>
                  
@endsection
