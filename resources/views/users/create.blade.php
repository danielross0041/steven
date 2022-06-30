@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users</h2>
        </div>
    </div>
        <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                <strong>User Created! &nbsp;</strong>{{Session::get('success')}}
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
            <form   action="{{ route('users.store') }}" method="post"  enctype="multipart/form-data" > 
                {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Add User info</h4>
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
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Age</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="age" id="age"  value="{{ old('age') }}" placeholder="Age ">
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
                            <input type="text" class="form-control" name="language" id="language"  value="{{ old('language') }}" placeholder="Language ">
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
                            <input type="text" class="form-control" name="nick" id="nick"  value="{{ old('nick') }}" placeholder="Nick ">
                            @if ($errors->has('nick'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('nick') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" id="password"  value="{{ old('password') }}" placeholder="Password ">
                            @if ($errors->has('password'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email ">
                            @if ($errors->has('email'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="contact_no" id="contact_no"value="{{ old('contact_no') }}"  placeholder="Contact No ">
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
                            <input type="text" class="form-control" name="address" id="address"value="{{ old('address') }}"  placeholder="Address ">
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
                                <option value="MALE" {{ (old('gender') == "MALE" ? "selected":"")}}>Male</option>
                                <option value="FEMALE" {{ (old('gender') == "FEMALE" ? "selected":"")}}>Female</option>
                                <option value="OTHER" {{ (old('gender') == "OTHER" ? "selected":"")}}>Other</option>
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
                  </div>
                    <div class="border-top">
                       <div class="card-body">
                        <a href="{{route('users.index')}}">
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
