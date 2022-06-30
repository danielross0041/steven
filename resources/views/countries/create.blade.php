@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Countries</h2>
        </div>
    </div>
        <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Country Created! &nbsp;</strong>{{Session::get('success')}}
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
            <form   action="{{ route('countries.store') }}" method="post"  enctype="multipart/form-data" > 
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
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="code" id="code"  value="{{ old('code') }}" placeholder="Country Code ">
                            @if ($errors->has('code'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Phone Code</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="phonecode" id="phonecode" value="{{ old('phonecode') }}" placeholder="Phone Code ">
                            @if ($errors->has('phonecode'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('phonecode') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                   
                  </div>
                    <div class="border-top">
                       <div class="card-body">
                        <a href="{{route('countries.index')}}">
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
