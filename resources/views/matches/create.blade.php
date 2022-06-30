@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Matches</h2>
        </div>
    </div>
        <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Match Created! &nbsp;</strong>{{Session::get('success')}}
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
            <form   action="{{ route('matches.store') }}" method="post"  enctype="multipart/form-data" > 
                {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">Add Match info</h4>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Game</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="game_id"  id="game_id">
                                    @foreach($games as $game)
                                <option value="{{$game->id}}" {{ (old('game_id') == $game->id ? "selected":"")}}>{{$game->name}}</option>
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
                            <input type="text" class="form-control" name="name" id="name"  value="{{ old('name') }}" placeholder="Name ">
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
                            <input type="url" class="form-control" name="url" id="url"  value="{{ old('url') }}" placeholder="Url ">
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
                            <input type="text" class="form-control" name="room_id" id="room_id"  value="{{ old('room_id') }}" placeholder="Room Id ">
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
                            <input type="datetime-local" class="form-control" name="timing" id="timing"  value="{{ old('timing') }}" placeholder="Schedule ">
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
                            <input type="number" class="form-control" name="prize_pool" id="prize_pool" value="{{ old('prize_pool') }}" placeholder="Prize Pool " min="0">
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
                            <input type="number" class="form-control" name="per_kill" id="per_kill" value="{{ old('per_kill') }}" placeholder="Per Kill " min="0">
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
                                <option value="SOLO" {{ (old('status') == "SOLO" ? "selected":"")}}>SOLO</option>
                                <option value="DUO" {{ (old('status') == "DUO" ? "selected":"")}}>DUO</option>
                                <option value="SQUAD" {{ (old('status') == "SQUAD" ? "selected":"")}}>SQUAD</option>
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
                            <input type="number" class="form-control" name="entry_fee" id="entry_fee" value="{{ old('entry_fee') }}" placeholder="Entry Fee " min="0">
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
                            <input type="number" class="form-control" name="total_player" step="1" id="total_player" value="{{ old('total_player') }}" placeholder="Total Player " min="2">
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
                            <input type="text" class="form-control" name="map" id="map"value="{{ old('map') }}"  placeholder="Map ">
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
                            <input type="file" class="form-control" name="banner" id="banner" value="{{ old('banner') }}" placeholder="Banner ">
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
                        <textarea id="desc" name="desc" rows="4" cols="50" class="form-control">{{old('desc')}}</textarea>
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
                        <textarea id="prize_desc" name="prize_desc" rows="4" cols="50" class="form-control">{{old('prize_desc')}}</textarea>
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
                        <textarea id="sponsor" name="sponsor" rows="4" cols="50" class="form-control">{{old('sponsor')}}</textarea>
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
                        <textarea id="private_desc" name="private_desc" rows="4" cols="50" class="form-control">{{old('private_desc')}}</textarea>
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
                                <option value="ACTIVE" {{ (old('status') == "ACTIVE" ? "selected":"")}}>ACTIVE</option>
                                <option value="INACTIVE" {{ (old('status') == "INACTIVE" ? "selected":"")}}>INACTIVE</option>
                                <option value="COMPLETE" {{ (old('status') == "COMPLETE" ? "selected":"")}}>COMPLETE</option>
                                <option value="START" {{ (old('status') == "START" ? "selected":"")}}>START</option>
                                <option value="CANCEL" {{ (old('status') == "CANCEL" ? "selected":"")}}>CANCEL</option>
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
                        <button type="submit" class="btn btn-primary"> Submit</button>
                        </div>
                     </div>
                </div>     
            </form>
        </div>
    </div>
</div>
                  
@endsection

@section('scripts')
<script type="text/javascript">
    
    $("#team").change(function(){
      // alert($(this).val());
      var element = $(this).val();
      if(element == 'SOLO'){
        $("#total_player").attr({
            'min':2,
            'step':1
        })
        $("#total_player").val(2)
      } else if(element == 'DUO'){
        $("#total_player").attr({
            'min':4,
            'step':2,
        })
        $("#total_player").val(4)
      } else{
        $("#total_player").attr({
            'min':8,
            'step':4,
        })
        $("#total_player").val(8)
      }
    });
</script>
@endsection