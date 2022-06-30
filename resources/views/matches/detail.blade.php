@extends('layouts.app')
@section('content')
    
<h1 class="page-title">{{$match->name}} - Match#{{$match->id}}

</h1>
<div class="ml-auto text-right">
</div> 
@if(Session::has('success'))
    <div class="alert alert-success text-center" role="alert">
        <strong>{{Session::get('success')}}</strong>
    </div>
@endif 
@if(Session::has('error'))
            <div class="alert alert-danger text-center" role="alert">
                <strong>Error! &nbsp;</strong>{{Session::get('error')}}
            </div>
        @endif 
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="zero_config1" class="table table-striped table-bordered">
            <thead>
                    <tr>
                     <th>ID</th>
                     <th>Game</th>
                        <th>Name</th>
                        <th>Room Id</th>
                        <th>Schedule</th>
                        <th>Total Player</th>
                        <th>Total Player Joined</th>
                        <th>Wininig Prize</th>
                        <th>Entry Fee</th>
                        <th>Status</th>
                    </tr>
  		
                <tbody>
                    <tr>   
                        <td>{{$match->id}}</td>
                        <td>{{$match->game['name']}}</td>
                        <td>{{$match->name}}</td>
                        <td>{{$match->room_id}}</td>
                        <td>{{$match->timing}}</td>
                        <td>{{$match->total_player}}</td>
                        <td>{{$match->players->count()}}</td>
                        <td>{{$match->prize_pool}}</td>
                        <td>{{$match->entry_fee}}</td>   
                        <td class = "{{$match->status != 'CANCEL' || $match->status != 'INACTIVE' ? 'text-primary' : 'text-danger'}}" >{{$match->status}}</td>  
                        
                       
                    </tr>
                    
                </tbody>
            </table>
        </div>  
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Game</th>
                        <th>User/Team Name</th>
                        <th>Place</th>
                        <th>Place Point</th>
                        <th>Killed</th>
                        <th>Kill Win</th>
                        <th>Win Prize</th>
                        <th>Bonus</th>
                        <th>Total</th>
                        <th>Refund</th>
                    </tr>
  		
                <tbody>
                    @foreach($match->players as $player)
                    <tr>   
                        <td>{{$player->id}}</td>

                        <td>{{$match->game['name']}}</td>
                        @if(isset($player->user))
                        <td> <a href="{{route('player.profile',$player->user['id'])}}">{{ $player->user['name'] }}</a></td>
                        @else
                        <td><a href="{{route('team.profile',$player->team['id'])}}">{{$player->team['team_name']}}</a></td>
                        @endif
                        <td><input type="text" value="{{$player->position}}" id="pos" onchange="player({{$match->id}},{{$player->user['id'] ?? $player->team['id']}})"></td>
                        <td>{{$match->place['position_'.$player->position] ?? $match->place['other']}}</td>
                        <td><div><input style="width:107px;" type="number" value="{{$player->kills}}" id="kills" onchange="player({{$match->id}},{{$player->user['id'] ?? $player->team['id']}})"></div></td>
                        <td>{{$player->kill_amount}}</td>
                        <td><div><input style="width:107px;" type="text" value="{{$player->win_prize ?? 0}}" id="win_prize" onchange="player({{$match->id}},{{$player->user['id'] ?? $player->team['id']}})"></div></td>
                        <td><div><input style="width:107px;" type="text" value="{{$player->bonus ?? 0}}" id="bonus" onchange="player({{$match->id}},{{$player->user['id'] ?? $player->team['id']}})"></div></td>
                        <td>{{$player->total_amount ?? 0}}</td>
                        <td><div><input style="width:107px;" type="text" value="{{$player->refund ?? 0}}" id="refund" onchange="player({{$match->id}},{{$player->user['id'] ?? $player->team['id']}})"></div></td>   
                      
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>  
        
    </div>    
</div>
<div class="card">

    <div class="card-body">
    <h4 class="card-title">Result Notes</h4>
<form action="{{route('matches.results',[$match->id])}}" method="POST">
    @csrf
<textarea name="result" rows="4" cols="50" class="form-control">
    {{$match->result}}
</textarea>
<br>
<br>
<button type="submit" class="btn btn-primary"> Submit</button>
</form>
    </div>
</div>
@endsection
@section('scripts')

<script>

    $(document).ready(function() {
        
    $.ajaxSetup({

headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

}

});
        $('#zero_config').DataTable({
            paging: true,
           
        });
    })


    function player(m_id,u_id){
    var pos=document.getElementById('pos').value;
    var kils=document.getElementById('kills').value;
    var win=document.getElementById('win_prize').value;
    var bonus=document.getElementById('bonus').value;
    var refund=document.getElementById('refund').value;
    $.ajax({
            type: 'POST',
            url: "{{route('matches.player.update')}}",
            data: {
                m_id:m_id,
                u_id:u_id,
                pos:pos,
                kills:kils,
                win:win,
                bonus:bonus,
                refund:refund
            },
            dataType: 'json',
            success: function (data) {
                if(data==0){
                    alert('something went wrong');
                }
                else {
                    alert('success');
                    location.reload();
                }
            },
            error: function (data) {
                alert(data);
            }
        });
    
   
        
    
   


}



</script>
@stop