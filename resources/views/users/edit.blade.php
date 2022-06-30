@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit User</h2>
        </div>
        </div>
        <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                <strong>User Edited! &nbsp;</strong>{{Session::get('success')}}
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
                <form  action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data" >   
                {{ csrf_field() }}     
                @method('PUT')
                <input type="hidden" name="_method" value="PUT">     
                <div class="card-body">
                    <h4 class="card-title">
        </div></h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"name="name"  value="{{ $user->name }}" placeholder="First Name Here">
                            @if ($errors->has('name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Age</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="age" id="age"  value="{{ $user->age }}" placeholder="Age ">
                            @if ($errors->has('age'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Language</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="language" id="language"  value="{{ $user->language }}" placeholder="Language ">
                            @if ($errors->has('language'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('language') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nick</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"name="nick"  value="{{ $user->nick }}" placeholder="Nick">
                            @if ($errors->has('nick'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('nick') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row ">
                            <label for="password" class="col-sm-3 text-right control-label col-form-label">Password</label>
                            <div class="col-md-6">
                                <input  type="password" class="form-control"  name="password"  >
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="contact_no"  value="{{$user->contact_no }}"  placeholder="Contact No Here">
                            @if ($errors->has('contact_no'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('contact_no') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address"  value="{{$user->address }}"  placeholder="Contact No Here">
                            @if ($errors->has('address'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="gender"  id="gender">
                                <option value="MALE" {{ ($user->gender == "MALE" ? "selected":"")}}>Male</option>
                                <option value="FEMALE" {{ ($user->gender == "FEMALE" ? "selected":"")}}>Female</option>
                                <option value="OTHER" {{ ($user->gender == "OTHER" ? "selected":"")}}>Other</option>
                             </select>   
                             @if ($errors->has('gender'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                        </div>
                     </div> 
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status"  id="status">
                                <option value="1" {{ ($user->status == 1? "selected":"")}}>Active</option>
                                <option value="0" {{ ($user->status ==  0? "selected":"")}}>In Active</option>
                             </select>   
                             @if ($errors->has('password'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                        </div>
                     </div>  
                      
                     <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="image" id="image"value="{{ $user->image }}"  placeholder="Contact No ">
                            @if ($errors->has('image'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    @if($user->image)
                    <div class="form-group row">
                        <div class="col-md-12 text-center">
                    <img src="{{asset('storage/'.$user->image)}}" alt="Image" width="200" height="100" style="float:center">
                    </div>
                    </div>
                    @endif
                    </div>
                     <div class="border-top">
                        <div class="card-body">
                        <a href="{{route('users.index')}}">
                        <button type="button" class=" btn btn-danger">
                       Back
                        </button></a>
                        <button type="submit" class="btn btn-primary"> Update</button>
                        </div>
                     </div>
                </div>    
            </form>
        </div>
    </div>
</div>
@endsection