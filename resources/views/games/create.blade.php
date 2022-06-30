@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Games</h2>
        </div>
    </div>
        <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Game Created! &nbsp;</strong>{{Session::get('success')}}
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
            <form   action="{{ route('games.store') }}" method="post"  enctype="multipart/form-data" > 
                {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Add Game info</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name"  value="{{ old('name') }}" placeholder="Name ">
                            @if ($errors->has('name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Package</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="package" id="package"  value="{{ old('package') }}" placeholder="Package Name ">
                            <span class="text-primary"><strong>Note: </strong>Package name can be found <a href="{{asset('note/note.png')}}" target="_blank">here</a></span><br>
                            @if ($errors->has('package'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('package') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
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
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="image" id="image"value="{{ old('image') }}"  placeholder="Contact No ">
                            @if ($errors->has('image'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                        <textarea id="description" name="description" rows="4" cols="50" class="form-control">{{old('description')}}</textarea>
                        @if ($errors->has('description'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status"  id="status">
                                <option value="1" {{ (old('status') == "1" ? "selected":"")}}>Active</option>
                                <option value="0" {{ (old('status') == "0" ? "selected":"")}}>In Active</option>
                             </select>   
                             @if ($errors->has('status'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                        </div>
                     </div> 
                  </div>
                    <div class="border-top">
                       <div class="card-body">
                        <a href="{{route('games.index')}}">
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
