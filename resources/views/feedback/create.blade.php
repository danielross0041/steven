@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Feedback</h2>
        </div>
    </div>
        <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Feedback Created! &nbsp;</strong>{{Session::get('success')}}
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
            <form   action="{{ route('feedbacks.store') }}" method="post"  enctype="multipart/form-data" > 
                {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Add Feedback</h4>
                    
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
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" id="email"  value="{{ old('email') }}" placeholder="Email ">
                            @if ($errors->has('email'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="subject" id="subject"  value="{{ old('subject') }}" placeholder="Name ">
                            @if ($errors->has('subject'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Feedback</label>
                        <div class="col-sm-9">
                        <textarea id="feedback" name="feedback" rows="4" cols="50" class="form-control">{{old('feedback')}}</textarea>
                        @if ($errors->has('feedback'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('feedback') }}</strong>
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
                        <a href="{{route('announcements.index')}}">
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
