@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Match</h2>
        </div>
        </div>
        <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Match Edited! &nbsp;</strong>{{Session::get('success')}}
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
                <form  action="{{ route('matches.update',$match->id) }}" method="POST" enctype="multipart/form-data" >   
                {{ csrf_field() }}     
                @method('PUT')
                <input type="hidden" name="_method" value="PUT">     
                <div class="card-body">
                    <h4 class="card-title">
        </div></h4>
        <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Game</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="game_id" id="game_id">
                                    @foreach($games as $game)
                                <option value="{{$game->id}}" {{ ($match->game_id == $game->id ? "selected":"")}}>{{$game->name}}</option>
                                @endforeach
                             </select>   
                             @if ($errors->has('game_id'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('game_id') }}</strong>
                                    </span>
                                @endif
                        </div>
                     </div> 
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name"  value="{{ $match->name }}" placeholder="Name ">
                            @if ($errors->has('name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Match Url</label>
                        <div class="col-sm-9">
                            <input type="url" class="form-control" name="url" id="url"  value="{{ $match->url }}" placeholder="Url ">
                            @if ($errors->has('url'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Room Id</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="room_id" id="room_id"  value="{{ $match->room_id }}" placeholder="Room Id ">
                            @if ($errors->has('room_id'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('room_id') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Schedule</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" name="timing" id="timing"  value="{{ $match->timing }}" placeholder="Schedule ">
                            @if ($errors->has('timing'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('timing') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Prize Pool</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="prize_pool" id="prize_pool" value="{{ $match->prize_pool }}" placeholder="Prize Pool ">
                            @if ($errors->has('prize_pool'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('prize_pool') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Per Kill</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="per_kill" id="per_kill" value="{{ $match->per_kill }}" placeholder="Per Kill ">
                            @if ($errors->has('per_kill'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('per_kill') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Team</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="team"  id="team">
                                <option value="SOLO" {{ ($match->team == "SOLO" ? "selected":"")}}>SOLO</option>
                                <option value="DUO" {{ ($match->team == "DUO" ? "selected":"")}}>DUO</option>
                                <option value="SQUAD" {{ ($match->team == "SQUAD" ? "selected":"")}}>SQUAD</option>
                             </select>   
                             @if ($errors->has('team'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('team') }}</strong>
                                    </span>
                                @endif
                        </div>
                     </div> 
                     <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Entry Fee</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="entry_fee" id="entry_fee" value="{{ $match->entry_fee }}" placeholder="Entry Fee ">
                            @if ($errors->has('entry_fee'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('entry_fee') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Total Players</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="total_player" id="total_player" value="{{  $match->total_player }}" placeholder="Total Player ">
                            @if ($errors->has('total_player'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('total_player') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Map</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="map" id="map"value="{{  $match->map }}"  placeholder="Map ">
                            @if ($errors->has('map'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('map') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Banner</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="banner" id="banner" value="{{  $match->banner }}" placeholder="Banner ">
                            @if ($errors->has('banner'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('banner') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
            
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                        <div class="col-sm-9">
                        <textarea id="desc" name="desc" rows="4" cols="50" class="form-control">{{ $match->desc}}</textarea>
                        @if ($errors->has('desc'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Prize Description</label>
                        <div class="col-sm-9">
                        <textarea id="prize_desc" name="prize_desc" rows="4" cols="50" class="form-control">{{ $match->prize_desc }}</textarea>
                        @if ($errors->has('prize_desc'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('prize_desc') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Sponsor</label>
                        <div class="col-sm-9">
                        <textarea id="sponsor" name="sponsor" rows="4" cols="50" class="form-control">{{ $match->sponsor }}</textarea>
                        @if ($errors->has('sponsor'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('sponsor') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Private Description (Only Available For Members Subscribed)</label>
                        <div class="col-sm-9">
                        <textarea id="private_desc" name="private_desc" rows="4" cols="50" class="form-control">{{ $match->private_desc }}</textarea>
                        @if ($errors->has('private_desc'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('private_desc') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status"  id="status">
                                <option value="ACTIVE" {{ ($match->status == "ACTIVE" ? "selected":"")}}>ACTIVE</option>
                                <option value="INACTIVE" {{ ($match->status == "INACTIVE" ? "selected":"")}}>INACTIVE</option>
                                <option value="COMPLETE" {{ ($match->status == "COMPLETE" ? "selected":"")}}>COMPLETE</option>
                                <option value="START" {{ ($match->status == "START" ? "selected":"")}}>START</option>
                                <option value="CANCEL" {{ ($match->status == "CANCEL" ? "selected":"")}}>CANCEL</option>
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