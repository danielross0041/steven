@extends('layouts.app')
@section('content')

<div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
          <div class="col-2">
          <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Users</h4>
                  <ul style="list-style:none;margin-left:-40px;">
                      @foreach(\App\Models\User::all() as $user)
                      <li style="margin-bottom:20px;"><img src="{{asset('/website/img/avatar.png')}}" height="40px" width="40px"><a href="javascript:myFunction({{$user->id}});" style="color:#3e5569;">{{$user->name}}</a><span id="new-{{$user->id}}" style="background:red;display:none;width: 30px;border-radius: 50%;float: right;">new<span></li>
                     <hr>
                      @endforeach
</ul>
</div>
</div>
            </div>
            <div class="col-10">
              <div class="card">
                <div class="card-body" id="paste">
                  <h4 class="card-title">Chats</h4>
                  <h3 style="text-align:center;margin:200px;">Your chats will be visible here</h3>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>


@endsection
@section('scripts')
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
function myFunction(id){
    $.ajax({
            type: 'POST',
            url: "{{route('get.chat')}}",
            data: {
                _token: '{{csrf_token()}}',
                id: id,
            },
            dataType: 'json',
            success: function (data) {
                if(data.status==0){
                    alert('something went wrong');
                }
                else {
                    $("#paste").html(data.view);
                }
            }
        });
}


function sendMessage(id) {
   
    var msg = $("#textarea1").val(); 
    if(msg.trim() == ''){
        alert('Please type a message first');
      return false;
    }
    else {
        $.ajax({
            type: 'POST',
            url: "{{route('admin.send.message')}}",
            data: {
                _token: '{{csrf_token()}}',
                message: document.getElementById('textarea1').value,
                id:id
            },
            dataType: 'json',
            success: function (data) {
                if(data==0){
                    alert('something went wrong');
                }
                else {
                   
                }
            },
            error: function (data) {
                alert('something went wrong');
            }
        });
    }

}

function generate_message(msg, type,from) {
    if(type=="user"){
    var str="";
    str += "<li class=\"chat-item\">";
    str += "<div class=\"chat-img\">";
    str += "            <img src=\"{{URL::to('/')}}\from.image\" alt=\"user\" /> </div>";
    str += "          <div class=\"chat-content\">";
    str += "          <h6 class=\"font-medium\">"+from.name+"</h6>";
    str += " <div class=\"box bg-light-info\">";
    str += msg.message;
    str += "</div></div> <div class=\"chat-time\">just now</div></li>";
    $(".chat-list").append(str);
    }
    else{
    $("#textarea1").val('');
    var str="";
    str += "<li class=\"odd chat-item\">";
    str += "          <div class=\"chat-content\">";
    str += "         <div class=\"box bg-light-inverse\">";
    str += msg.message;
    str += "</div><br></div></li>";
    $(".chat-list").append(str);
    }
       
  }  


  var pusher=new Pusher("{{env('PUSHER_APP_KEY')}}", {
  cluster: "{{env('PUSHER_APP_CLUSTER')}}",
  forceTLS: true
});
    
    var channel=pusher.subscribe("steven-backend");
    channel.bind("MessageSent", (data)=>{
       
      
        if(data.from.id == {{Auth()->user()->id }}){
            generate_message(data.message, 'self',data.from);
        }
        else if(data.to.id=={{Auth()->user()->id}}){
            document.getElementById('new-'+data.from.id).style.display="block";
            generate_message(data.message, 'user',data.from);
        }
        // else {
        //     generate_message(data.message.message, 'user');
        // }
    });

   
</script>
@endsection