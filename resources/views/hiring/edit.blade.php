@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Feedback</h2>
        </div>
        </div>
        <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Hiring Edited! &nbsp;</strong>{{Session::get('success')}}
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
                <form  action="{{ route('hiringRequest.update',$hiring->id) }}" method="POST" enctype="multipart/form-data" >  
                {{ csrf_field() }}     
                @method('PUT')
                <div class="card-body">
                    <h4 class="card-title">
        </div></h4>
        
        <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Reply</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="reply" id="reply"  value="{{ old('reply') }}" placeholder="reply ">
                            @if ($errors->has('reply'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('reply') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Timing</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="timing" id="timing"  value="{{ old('timing') }}" placeholder="timing ">
                            @if ($errors->has('timing'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('timing') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    
                    </div>
                     <div class="border-top">
                        <div class="card-body">
                        <a href="{{route('hiringRequest.index')}}">
                        <button type="button" class=" btn btn-danger">
                       Back
                        </button></a>
                        <button type="submit" class="btn btn-primary"> Reply</button>
                        </div>
                     </div>
                </div>    
            </form>
        </div>
    </div>
</div>
@endsection