@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Announcement</h2>
        </div>
        </div>
        <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Announcement Edited! &nbsp;</strong>{{Session::get('success')}}
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
                <form  action="{{ route('announcements.update',$announcement->id) }}" method="POST" enctype="multipart/form-data" >   
                {{ csrf_field() }}     
                @method('PUT')
                <input type="hidden" name="_method" value="PUT">     
                <div class="card-body">
                    <h4 class="card-title">
        </div></h4>
        
                    
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Announcement</label>
                        <div class="col-sm-9">
                        <textarea id="announcement" name="announcement" rows="4" cols="50" class="form-control">{{$announcement->announcement}}</textarea>
                        @if ($errors->has('announcement'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('announcement') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status"  id="status">
                                <option value="1" {{ ($announcement->status == "1" ? "selected":"")}}>Active</option>
                                <option value="0" {{ ($announcement->status == "0" ? "selected":"")}}>In Active</option>
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
                        <button type="submit" class="btn btn-primary"> Update</button>
                        </div>
                     </div>
                </div>    
            </form>
        </div>
    </div>
</div>
@endsection