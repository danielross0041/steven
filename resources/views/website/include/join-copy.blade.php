<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"style="background-color: #141414; color: white;" >
  <div class="offcanvas-header" >
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">{{__('content.join')}}</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      {{__('content.joinText')}}
    </div>
    <div class="dropdown mt-3">
      
      <form class="form-group" action="{{route('create_team')}}" method="POST" id="join_form">
        @csrf
        <input type="hidden" name="match_id" value="" id="match_id">
        <div id="team_name">
          <label>Enter Team Name</label>
          <input  type="text" name="team_name" placeholder="{{__('content.teamNamePlaceholder')}}" class="form-control" id="team_input" required>
          @if ($errors->has('team_name'))
                <span class="text-danger">
                    <strong>{{ $errors->first('team_name') }}</strong>
                </span>
              @endif
        </div>
        
        <label>Enter Player Name</label>
        <input  type="text" name="player1_name" placeholder="{{__('content.player1NamePlaceholder')}}" class="form-control" required>
        @if ($errors->has('player1_name'))
            <span class="text-danger">
                <strong>{{ $errors->first('player1_name') }}</strong>
            </span>
        @endif
        <label>Enter Player ID</label>
        <input  type="text" name="player1_id" placeholder="{{__('content.player1IDPlaceholder')}}" class="form-control" required>
        @if ($errors->has('player1_id'))
            <span class="text-danger">
                <strong>{{ $errors->first('player1_id') }}</strong>
            </span>
        @endif
        <div id="duo">
            <label>Enter Player 2 Name</label>
            <input  type="text" name="player2_name" placeholder="{{__('content.player1NamePlaceholder')}}" class="form-control" required>
            @if ($errors->has('player2_name'))
                <span class="text-danger">
                    <strong>{{ $errors->first('player2_name') }}</strong>
                </span>
            @endif
            <label>Enter Player 2 ID</label>
            <input  type="text" name="player2_id" placeholder="{{__('content.player1IDPlaceholder')}}" class="form-control" required>
            @if ($errors->has('player2_id'))
                <span class="text-danger">
                    <strong>{{ $errors->first('player2_id') }}</strong>
                </span>
            @endif
            <div id="squad">
              <label>Enter Player 3 Name</label>
              <input  type="text" name="player3_name" placeholder="{{__('content.player1NamePlaceholder')}}" class="form-control" required>
              @if ($errors->has('player3_name'))
                <span class="text-danger">
                    <strong>{{ $errors->first('player3_name') }}</strong>
                </span>
              @endif
              <label>Enter Player 3 ID</label>
              <input  type="text" name="player3_id" placeholder="{{__('content.player1IDPlaceholder')}}" class="form-control" required>
              @if ($errors->has('player3_id'))
                <span class="text-danger">
                    <strong>{{ $errors->first('player3_id') }}</strong>
                </span>
              @endif
              <label>Enter Player 4 Name</label>
              <input  type="text" name="player4_name" placeholder="{{__('content.player1NamePlaceholder')}}" class="form-control" required>
              @if ($errors->has('player4_name'))
                <span class="text-danger">
                    <strong>{{ $errors->first('player4_name') }}</strong>
                </span>
              @endif
              <label>Enter Player 4 ID</label>
              <input  type="text" name="player4_id" placeholder="{{__('content.player1IDPlaceholder')}}" class="form-control" required>
              @if ($errors->has('player4_id'))
                <span class="text-danger">
                    <strong>{{ $errors->first('player4_id') }}</strong>
                </span>
              @endif
            </div>
        </div>
       <br><br>
       <div id="card-element">
                            {{-- A Stripe Element will be inserted here. --}}
                        </div>

                        <!-- Used to display Element errors. -->
                        <div id="card-errors" role="alert"></div>
        <!-- <label>Enter Your Password</label>
        <input required type="password" class="form-control" placeholder="Password *" value="" name="password" id="myInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" > -->
        <!-- <input type="submit" class="btn btn-primary-join"  value="JOIN NOW" /> -->
        <button class="btn btn-primary-join">{{__('content.join')}}</button>
      </form>
    </div>
  </div>
</div>