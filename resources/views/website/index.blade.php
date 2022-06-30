@extends('website.layouts.app')
@section('content')
<style>
 /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
  margin-bottom: 40px;
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: #dc3545;
  color: white;
  transform: rotateY(180deg);
}
.signup-btn{
    margin-left: 25px;
}

@media screen and (max-width: 390px) {
  h1 {
    font-size: 28px;.signup-btn{
    margin-left: 25px;
}
  }

  .content-center{
    color: white;
    top: 5px;
    left: 0px;
  }
  .list-icon-text{
    line-height: 16.5px;
   
  }

  .topplayers{
    margin-bottom: 15px;
  }

  .container{
    padding-left: 28px;
  }

  .heading-how-play{
    text-align: center;
    padding-bottom: 15px;
  }

  .heading-what-we-do{
    text-align: center;
    padding-bottom: 15px;
  }

  .heading-what-we-do{
    text-align: center;
    padding-bottom: 15px;
  }

  .text-what-we-do{
    margin-left: 0px;
  }

  .feedback{
    margin-top: 15px;
    text-align: center;
    margin-left: 15px;
  }

  .testi{
    left: 0px;
    top: 0px;
    margin-bottom: 20px;
  }

  .social{
    margin-left: -145px;
  }

  .zelda-responsive-nav{
    display: block;
  }
  .profile-button {
        position: relative;
        left: 46px;
        top: 15px;
    }
    .signup-btn{
        margin-left: 0px;
        top: 70px;
        left: -51px;
    }

  
  
}
 </style>
	@include('website.include.announcement')
<div class="container"  style="background-image: url({{asset('/website/assets/img/background-home.jpg')}});background-size: cover; margin-top: 1%;">
  <div class="row banner-img">

    <span class="banner">
      <h1>Lorem ipsum dolor sitamet, <br>consectetueradipiscing elit, sed diam</h1>
      <p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed<br> diam nonummy nibh euismod tincidunt ut laoreet</p>
      <button class="btn btn-light" style="background: #e10e6f;">{{__('content.startNow')}}</button>
      
    </span>     
  </div>
</div>
<!-- SLIDER END  -->

<!-- CONTENT AND IMAGE START -->

<div class="container text-img">
  <div class="row ">
    
      <div class="col-md-6 content-center text-for-image">
        <h4 class="in-left">Lorem ipsum dolor sit amet, consectetuer </h4>
        <ul class="list-icon-text">
          <p><img src="{{asset('/website/assets/img/icon-for.png')}}" class="icon-for">Lorem ipsum dol</p>
          <p><img src="{{asset('/website/assets/img/icon-for.png')}}" class="icon-for">Lorem ipsum dolor sit</p>
          <p><img src="{{asset('/website/assets/img/icon-for.png')}}" class="icon-for">Lorem ipsum dolor sit amet, consectetuer</p>
          <p><img src="{{asset('/website/assets/img/icon-for.png')}}" class="icon-for">Lorem ipsum dolor sit</p>
          <p><img src="{{asset('/website/assets/img/icon-for.png')}}" class="icon-for">Lorem ipsum dolor</p>
        </ul>
      </div>
      <div class="col-md-6 image-for-home">
        <img src="{{url('/website/assets/img/home-img.png')}}" class="img-fluid" alt="Responsive image">
      </div>
    
  </div>
</div>

<!-- CONTENT AND IMAGE END -->




<!-- USER PROFILE HEADING -->
@if(!$users->isEmpty())
<div class="container-fluid">
  <div class="row">
    <div class="user-profile">
      <h1>{{__('content.userprofile')}}</h1>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center text-white">
      <h4 class="text-center topplayers">{{__('content.topplayers')}}</h4>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-md-center">
  @foreach($users as $user)
    <div class="col col-lg-4">
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="{{asset('storage/'.$user->image)}}" alt="Avatar">
    </div>
    <div class="flip-card-back">
      <h2>{{strtoupper($user->name)}}</h2>
      <p>&nbsp;&nbsp;{{$user->age}}&nbsp;&nbsp;{{$user->gender}}&nbsp;&nbsp;{{$user->language}}</p>
      <p>${{$user->hiring_fee}}</p>
      @if(Auth::check() )
        @if(Auth::user()->hasRole('user') )
          <?php
          $requestSent = App\Models\HiringRequest::where('user_id',Auth::user()->id)->where('player_id',$user->id)->first();
          ?>
          @if($requestSent)
          <a class="text-white btn btn-dark" style="color:black">{{__('content.hired')}}</a>
          @else
          <a class="text-white btn btn-dark" style="color:black" href="{{route('checkout',['id'=>$user->id])}}">{{__('content.hireME')}}</a>
          @endif
        @else
        <a class="text-white btn btn-dark" style="color:black" href="javascript:;" message="You do not have permission" disabled>{{__('content.hireME')}}</a>
        @endif
      @else
      <a class="text-white btn btn-dark" style="color:black" href="{{route('web_guest_login')}}">{{__('content.hireME')}}</a>
      @endif
  
    </div>
  </div>
</div>
    </div> <!-- col -->
    @endforeach
  </div> <!-- row -->
</div> <!-- cont -->
@endif


<div class="container">
  <div class="row">
   <div class="user-profile">
      <h1>{{__('content.howWebWorks')}}</h1>
    </div>
    
      <div class="col-md-6">
        <img src="{{asset('/website/assets/img/how-we-work.png')}}" class="img-fluid-how-we-work">
      </div>
      <div class="col-md-6">
        <div class="heading-how-play">
          <h2>{{__('content.howToPlay')}}</h2>
        </div>
        <div class="text-how-play in-left">
          <p>{{__('content.howToPlayText')}}
             <br>
             <br>
             {{__('content.howToPlayText2')}}
           </p>
        </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
      <div class="col-md-6">
        <div class="heading-what-we-do">
          <h2>{{__('content.whatToDo')}}</h2>
        </div>
        <div class="text-what-we-do in-left">
          <p>{{__('content.whatToDoText')}}
             <br>
             <br>
             {{__('content.whatToDoText2')}}
           </p>
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{asset('/website/assets/img/how-to-play.png')}}" class="img-fluid-what-we-do">
      </div>
  </div>
</div>

<div class="container">
  <div class="row">
      <div class="col-md-6">
        <img src="{{asset('/website/assets/img/what-to-do.png')}}" class="img-fluid-how-we-work">
      </div>
      <div class="col-md-6">
        <div class="heading-how-play in-left">
          <h2>{{__('content.howToPlay')}}</h2>
        </div>
        <div class="text-how-play">
          <p>{{__('content.howToPlayText')}}
             <br>
             <br>
             {{__('content.howToPlayText2')}}
           </p>
        </div>
    </div>
  </div>
</div>



<div class="container">
  <div class="row">
   <div class="user-profile feedback">
      <h1>{{__('content.customerFeedBack')}}</h1>
    </div>
    <div class="col-md-4">
    <div class="testi">
    <img src="{{asset('/website/assets/img/testi-1.jpg')}}" class="card-img-testi" alt="...">
    <div class="testi-body">
    <img src="{{asset('/website/assets/img/testi-icon.png')}}" class="testi-people">
    <p class="testi-text in-left">{{__('content.customerFeedBackText')}}</p>
    
    </div>
    </div>
    </div>
      
   
    <div class="col-md-4">
    <div class="testi">
    <img src="{{asset('/website/assets/img/testi-2.jpg')}}" class="card-img-testi" alt="...">
    <div class="testi-body">
    <img src="{{asset('/website/assets/img/testi-icon.png')}}" class="testi-people">
    <p class="testi-text in-left">{{__('content.customerFeedBackText')}}</p>
    
    </div>
    </div>
  </div>
      
      
    <div class="col-md-4">
    <div class="testi">
    <img src="{{asset('/website/assets/img/testi-3.jpg')}}" class="card-img-testi" alt="...">
    <div class="testi-body">
    <img src="{{asset('/website/assets/img/testi-icon.png')}}" class="testi-people">
    <p class="testi-text in-left">{{__('content.customerFeedBackText')}}</p>
    
    </div>
    </div>
  </div>
      
    
 </div>
  
@include('website.include.join')

@if(Auth::check())
@include('website.include.chat')
@endif


<br>
<br>
<br>
<br>
<br>
<br>

@endsection
@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@if(Auth::check())
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<style>
    .StripeElement {
        background-color: white;
        padding: 8px 12px;
        border-radius: 4px;
        border: 1px solid transparent;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }
</style>
<script src="https://js.stripe.com/v3/"></script>
<script>
     var stripe = Stripe('{{ env('STRIPE_KEY') }}');

    var elements = stripe.elements();

    var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('hiringForm'); // The id of the form that handles payment submission
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripe_token');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form
      form.submit();
    }

    // Handle form submission.
    var form = document.getElementById('hiringForm');
    form.addEventListener('submit', function(event) {
        console.log('sameed');
      event.preventDefault();

      stripe.createToken(card).then(function(result) {
        if (result.error) {
          // Inform the customer that there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
      } else {
          // Send the token to your server.
          stripeTokenHandler(result.token);
      }
    });
    });
</script>
<script>
 
   $(".hireME").click(function () {
        $('#player_id').val($(this).data('player_id'));
        $('#hiring_fee').text('$'+$(this).data('hiring_fee'));
        $("#hireModal").modal('show')
    })

$(function() {
  var INDEX = {{$messages->count()}}; 
  $("#chat-submit").click(function(e) {
    e.preventDefault();
    var msg = $("#chat-input").val(); 
    if(msg.trim() == ''){
        alert('Please type a message first');
      return false;
    }
    else {
        $.ajax({
            type: 'POST',
            url: "{{route('send.message')}}",
            data: {
                _token: '{{csrf_token()}}',
                message: document.getElementById('chat-input').value,
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
    // generate_message(msg, 'self');
    // var buttons = [
    //     {
    //       name: 'Existing User',
    //       value: 'existing'
    //     },
    //     {
    //       name: 'New User',
    //       value: 'new'
    //     }
    //   ];
    // setTimeout(function() {      
    //   generate_message(msg, 'user');  
    // }, 1000)
    
  });
  
  function generate_message(msg, type) {
    INDEX++;
    var str="";
    str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"{{asset('/website/img/avatar.png')}}\">";
    str += "          <\/span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msg.message;
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);    
  }  
  
  function generate_button_message(msg, buttons){    
    /* Buttons should be object array 
      [
        {
          name: 'Existing User',
          value: 'existing'
        },
        {
          name: 'New User',
          value: 'new'
        }
      ]
    */
    INDEX++;
    var btn_obj = buttons.map(function(button) {
       return  "              <li class=\"button\"><a href=\"javascript:;\" class=\"btn btn-primary chat-btn\" chat-value=\""+button.value+"\">"+button.name+"<\/a><\/li>";
    }).join('');
    var str="";
    str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg user\">";
    str += "          <span class=\"msg-avatar\">";
    str += "            <img src=\"{{asset('/website/assets/img/avatar.png')}}\">";
    str += "          <\/span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msg;
    str += "          <\/div>";
    str += "          <div class=\"cm-msg-button\">";
    str += "            <ul>";   
    str += btn_obj;
    str += "            <\/ul>";
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);   
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);
    $("#chat-input").attr("disabled", true);
  }
  
  $(document).delegate(".chat-btn", "click", function() {
    var value = $(this).attr("chat-value");
    var name = $(this).html();
    $("#chat-input").attr("disabled", false);
    generate_message(name, 'self');
  })
  
  $("#chat-circle").click(function() {  
    document.getElementById('new').style.display="none";
    $("#chat-circle").toggle('scale');
    $(".chat-box").toggle('scale');
  })
  
  $(".chat-box-toggle").click(function() {
    $("#chat-circle").toggle('scale');
    $(".chat-box").toggle('scale');
  })
  

  var pusher=new Pusher("{{env('PUSHER_APP_KEY')}}", {
  cluster: "{{env('PUSHER_APP_CLUSTER')}}",
  forceTLS: true
});
    
    var channel=pusher.subscribe("steven-backend");
    channel.bind("MessageSent", (data)=>{
      console.log(data);
        document.getElementById('new').style.display="block";
        if(data.from.id =={{Auth()->user()->id}}){
            generate_message(data.message, 'self');
        }
        else if(data.to.id=={{Auth()->user()->id}}){
            generate_message(data.message, 'user');
        }
        // else {
        //     generate_message(data.message.message, 'user');
        // }
    });


})
</script>
<?php
$announcements = App\Models\Announcement::where('status',1)->get();
?>
@if(!$announcements->isEmpty())
<script type="text/javascript">
    setTimeout(
        function(){
            $("#exampleModalCenter").modal('show');
        }
        ,1000 /// milliseconds = 10 seconds
        );
$('.modal-close').click(function(){
  $("#exampleModalCenter").modal('hide');
})
    
</script>
@endif
@endif


<style type="text/css">
  .announcement-modal {
  background-color: #d52c7a;
  color: white;
}
.announcement-modal h4 {
  margin: 25px 0px 10px 20px;
}

</style>


@endsection