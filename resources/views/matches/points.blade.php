@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Match Position Points</h2>
        </div>
        </div>
        <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Points Edited! &nbsp;</strong>{{Session::get('success')}}
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
            
                <form  action="{{ route('matches.pos.points',$match->match_id) }}" method="POST" enctype="multipart/form-data" >   
                {{ csrf_field() }}     
                @method('PUT')
                <input type="hidden" name="_method" value="PUT">     
                <div class="card-body">
                    <h4 class="card-title">
        </div></h4>
                   <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">First Position</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="position_1" id="position_1" value="{{ $match->position_1 }}" placeholder="First Position ">
                            @if ($errors->has('position_1'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('position_1') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Second Position</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="position_2" id="position_2" value="{{ $match->position_2 }}" placeholder="Second Position ">
                            @if ($errors->has('position_2'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('position_2') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div> <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Third Position</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="position_3" id="position_3" value="{{ $match->position_3 }}" placeholder="Third Position ">
                            @if ($errors->has('position_3'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('position_3') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div> <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Fourth Position</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="position_4" id="position_4" value="{{ $match->position_4 }}" placeholder="Fourth Position ">
                            @if ($errors->has('position_4'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('position_4') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div> <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Fifth Position</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="position_5" id="position_5" value="{{ $match->position_5 }}" placeholder="Fifth Position ">
                            @if ($errors->has('position_5'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('position_5') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div> <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Other Positions</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="other" id="other" value="{{ $match->other }}" placeholder="Other Positions ">
                            @if ($errors->has('other'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('other') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    </div>
                     <div class="border-top">
                        <div class="card-body">
                        <a href="{{route('matches.index')}}">
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