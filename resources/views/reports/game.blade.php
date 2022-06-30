@extends('layouts.app')
@section('content')
    
<h1 class="page-title">Reports

</h1>

<div class="card">
    <div class="card-body">
    <!-- <a href="{{ route('matches.create') }}" ><button style="color: grey;font-size:16px;border: 3px solid black" >  + Add New Match</button> </a>  -->
        @foreach($games as $key => $game)
        <div class="table-responsive">
            <h3>{{$game->name}}</h3>
            <table id="zero_config" class="table table-striped table-bordered zero_table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Winning</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach($game->matches as $match)
                        @foreach($match->players as $player)
                        @if($player->winning)
                        <tr>   
                            <td>{{$player->winning['id']}}</td>
                            <td>{{$player->winning->user['name']}}</td>
                            <td>{{$player->winning['amount']}}</td>
                        </tr>
                        @endif
                        @endforeach
                    @endforeach

                </tbody>
            </table>
        </div>
        @endforeach  
    </div>    
</div>
@endsection
@section('scripts')

<script>

    $(document).ready(function() {
        $('.zero_table').DataTable({
            paging: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
           
        });

})
</script>
@stop