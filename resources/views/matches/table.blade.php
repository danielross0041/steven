<table id="zero_config" class="table table-striped table-bordered">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Game</th>
                        <th>User Name</th>
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
                        <td>{{$player->user['name']}}</td>
                        <td><input type="text" value="{{$player->position}}" id="pos" onchange="sameed(4,4);"></td>
                        <td>{{$match->place['position_'.$player->position] ?? $match->place['other']}}</td>
                        <td><div><input style="width:107px;" type="number" value="{{$player->kills}}" id="kills" onchange="player({{$match->id}},{{$player->user['id']}})"></div></td>
                        <td>{{$player->kill_amount}}</td>
                        <td><div><input style="width:107px;" type="text" value="{{$player->win_prize ?? 0}}" id="win_prize" onchange="player({{$match->id}},{{$player->user['id']}})"></div></td>
                        <td><div><input style="width:107px;" type="text" value="{{$player->bonus ?? 0}}" id="bonus" onchange="player({{$match->id}},{{$player->user['id']}})"></div></td>
                        <td>{{$player->total ?? 0}}</td>
                        <td><div><input style="width:107px;" type="text" value="{{$player->refund ?? 0}}" id="refund" onchange="player({{$match->id}},{{$player->user['id']}})"></div></td>   
                      
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>