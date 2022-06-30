<div class="modal" tabindex="-1" role="dialog" id="hireModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{__('content.payNow')}}</h5>
      </div>
      <div class="modal-body">
        <p class="text-center" id="hiring_fee"></p>
        <p class="text-center" style="color:red;">{{__('content.payModalText')}}</p>
        <form id="hiringForm" action="{{route('hiringForm')}}" method="POST">
            @csrf
            <input type="hidden" name="player_id" id="player_id" value="">
        
        <div id="card-element">
                            {{-- A Stripe Element will be inserted here. --}}
                        </div>

                        <!-- Used to display Element errors. -->
                        <div id="card-errors" role="alert"></div>
       
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit">{{__('content.pay')}}</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modal_close">{{__('content.close')}}</button>
      </div>
    </form>
    </div>
  </div>
</div>