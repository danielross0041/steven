@if(Auth::check())
<?php
$announcements = App\Models\Announcement::where('status',1)->get();
?>
<!-- Modal -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content announcement-modal" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{__('content.announcements')}}</h5>
        <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @foreach($announcements as $key => $announcement)
        <h4>
        @if(App::getLocale()=='en')
          {{$announcement->announcement}}
          @else
          {{$announcement->announcement_zh}}
          @endif
        </h4>
        <hr>
        @endforeach
      </div>

    </div>
  </div>
</div>
@endif