@extends('layouts.app')
@section('content')
    
<h1 class="page-title">Matches

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
    <a href="{{ route('matches.create') }}" ><button style="color: grey;font-size:16px;border: 3px solid black" >  + Add New Match</button> </a> 
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
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
                        <th class="not">Action</th>
                        <th class="not">Info</th>
                    </tr>
  		
                <tbody>
                    @foreach($matches as $match)
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
                        <td class = "{{$match->status != 'CANCEL' || $match->status != 'INACTIVE' ? 'badge badge-primary' : 'badge badge-danger'}}" >{{$match->status}}</td>  
                        <td>  
                            <a href="{{ route('matches.edit',$match->id) }}">
                                <button type="button" class="btn btn-primary">
                               Edit
                                </button></a>
                                <form action="{{route('matches.destroy', $match->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                                <td><a href="{{ route('matches.info',$match->id) }}">
                                <button type="button" class="btn btn-primary">
                               Info
                                </button></a>
                                <a href="{{ route('matches.points',$match->id) }}">
                                <button type="button" class="btn btn-success">
                               Position Points
                                </button></a>
                            </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>   
    </div>    
</div>
@endsection
@section('scripts')

<script>

    $(document).ready(function() {
        $('#zero_config').DataTable({
            paging: true,
           
        });

})
</script>
@stop