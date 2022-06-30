@extends('website.layouts.app')
@section('title')
<title>{{__('content.epal')}} |  {{__('content.steven')}}</title>
@endsection
@section('content')

<div class="container" style="background-image: url({{asset('/website/assets/img/background-home.jpg')}});background-size: cover;">
  <div class="row banner-img" >
    <span class="banner">
      <h1>{{__('content.epal')}}</h1>
      <p>{{__('content.epalText')}}</p>
      <a href="#tournament-details-area ptb-100 "><button class="btn btn-light">{{__('content.startNow')}}</button></a>
      
    </span>    
  </div>
</div>
<section class="popular-leagues-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<span class="sub-title">{{__('content.tournaments')}}</span>
<h2>{{__('content.popularLeagues')}}</h2>
</div>
@foreach($matches as $match)
@if(Auth::check())
<?php

$player=\App\Models\MatchPlayer::where('match_id',$match->id)->where('user_id',Auth()->user()->id)->first();
$team=\App\Models\MatchPlayer::with('team')->whereHas('team', function (Illuminate\Database\Eloquent\Builder $query) {
 $query->where('added_by',Auth()->user()->id);
 })->where('match_id',$match->id)->first();

?>
@endif
<div class="single-popular-leagues-box">
<div class="popular-leagues-box">
<div class="popular-leagues-image">
<div class="image bg1">
<img src="{{asset('storage/'.$match->banner)}}" width="350px" height="350px" alt="image">
</div>
</div>
<div class="popular-leagues-content">
<div class="content">
<h3><a href="single-tournament.html">{{$match->name}}</a></h3>
<p>{{$match->desc}}</p>
<br>
@if(Auth::check())
@if($player || $team )
<p>{{$match->private_desc}}</p>
@endif
@endif
<br>
<ul class="info">
<li><i class="flaticon-coin"></i>{{$match->entry_fee}}</li>
<li><i class="flaticon-game"></i>{{$match->team}}</li>
<li><i class="flaticon-game-1"></i>{{$match->game['name']}}</li>
<li><i class="flaticon-teamwork"></i>{{$match->total_player}}</li>
</ul>
@if(Auth::check())

@if($player || $team )
<a class="join-now-btn" disabled>{{__('content.alreadyJoined')}}</a>

@elseif($match->total_player > $match->joined_players )
<a href="#offcanvasExample" class="join-now-btn team_modal" data-team="{{$match->team}}" data-match_id="{{$match->id}}" data-bs-toggle="offcanvas" data-team="{{$match->team}}" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">{{__('content.joinNow')}}</a>
@else
<a class="join-now-btn" disabled>{{__('content.slotsFull')}}</a>
@endif
@else
<a href="{{route('web_guest_login')}}" class="join-now-btn " role="button" aria-controls="offcanvasExample">{{__('content.joinNow')}}</a>
@endif
</div>
</div>
<div class="popular-leagues-date">
<div class="date">
<div class="d-table">
<div class="d-table-cell">
  <?php
$date=strtotime($match->timing);
$date=getDate($date);
  ?>
<span>{{ $date['year'] }}</span>
<h3>{{ $date['mday']}} {{$date['month']}}</h3>
<p>{{ $date['hours'] }}:{{ $date['minutes'] }}</p>
<i class="bx bx-calendar"></i>
</div>
</div>
</div>
</div>
</div>
</div>
@endforeach


</div>
</section>
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center text-light">
  <div class="col-md-4">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center">
         <button class="btn btn-secondary"> 
          <img src="{{asset('website/assets/img/profile3.jpg')}}"  class="profile-image" />
        </button> 
        <span class="name mt-3">{{__('content.danielRoss')}}</span> <span class="idd">@daniel</span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
              <span class="idd1">Oxc4c16a645_b21a</span> 
              <span><i class="fa fa-copy"></i></span> 
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
              <span class="number">1069 <span class="follow">Followers</span></span> 
            </div>
            <div class=" d-flex mt-2"> 
              <button class="btn1 btn-dark">Hire Me</button>
            </div>
            <div class="text mt-3"> 
              <span>Daniel ROss is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> 
            </div>
            <!-- <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div> -->
            <button class="btn btn-primary-join"  href="#offcanvasExample" role="button" >Hire Me</button>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center">
         <button class="btn btn-secondary"> 
          <img src="{{asset('website/assets/img/profile2.png')}}"  class="profile-image" />
        </button> 
        <span class="name mt-3">Steve Ross</span> <span class="idd">@steveross</span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
              <span class="idd1">Oxc4c16a645_b21a</span> 
              <span><i class="fa fa-copy"></i></span> 
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
              <span class="number">1069 <span class="follow">Followers</span></span> 
            </div>
            <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Hire Me</button> </div>
            <div class="text mt-3"> 
              <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> 
            </div>
            <!-- <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div> -->
            <button class="btn btn-primary-join"  href="#offcanvasExample" role="button" >Hire Me</button>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center">
         <button class="btn btn-secondary"> 
          <img src="{{asset('website/assets/img/profile1.jpg')}}"  class="profile-image" />
        </button> 
        <span class="name mt-3">Chanandeller Bong</span> <span class="idd">@chanandller</span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
              <span class="idd1">Oxc4c16a645_b21a</span> 
              <span><i class="fa fa-copy"></i></span> 
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
              <span class="number">1069 <span class="follow">Followers</span></span> 
            </div>
            <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Hire Me</button> </div>
            <div class="text mt-3"> 
              <span>Chanandeller Bong is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> 
            </div>
            <!-- <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div> -->
            <button class="btn btn-primary-join"  href="#offcanvasExample" role="button" >Hire Me</button>
        </div>
    </div>
</div>




<div class="col-md-4">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center">
         <button class="btn btn-secondary"> 
          <img src="{{asset('website/assets/img/profile4.jpg')}}"  class="profile-image" />
        </button> 
        <span class="name mt-3">Aron</span> <span class="idd">@aron</span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
              <span class="idd1">Oxc4c16a645_b21a</span> 
              <span><i class="fa fa-copy"></i></span> 
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
              <span class="number">1069 <span class="follow">Followers</span></span> 
            </div>
            <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Hire Me</button> </div>
            <div class="text mt-3"> 
              <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> 
            </div>
            <!-- <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div> -->
            <button class="btn btn-primary-join"  href="#offcanvasExample" role="button" >Hire Me</button>
        </div>
    </div>
</div>

</div>


<div class="container mt-4 mb-4 p-43 d-flex justify-content-center text-light">

<div class="col-md-4">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center">
         <button class="btn btn-secondary"> 
          <img src="{{asset('website/assets/img/profile3.jpg')}}"  class="profile-image" />
        </button> 
        <span class="name mt-3">Flinch</span> <span class="idd">@flinch</span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
              <span class="idd1">Oxc4c16a645_b21a</span> 
              <span><i class="fa fa-copy"></i></span> 
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
              <span class="number">1069 <span class="follow">Followers</span></span> 
            </div>
            <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Hire Me</button> </div>
            <div class="text mt-3"> 
              <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> 
            </div>
            <!-- <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div> -->
            <button class="btn btn-primary-join"  href="#offcanvasExample" role="button" >Hire Me</button>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center">
         <button class="btn btn-secondary"> 
          <img src="{{asset('website/assets/img/profile2.png')}}"  class="profile-image" />
        </button> 
        <span class="name mt-3">Albert</span> <span class="idd">@albert</span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
              <span class="idd1">Oxc4c16a645_b21a</span> 
              <span><i class="fa fa-copy"></i></span> 
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
              <span class="number">1069 <span class="follow">Followers</span></span> 
            </div>
            <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Hire Me</button> </div>
            <div class="text mt-3"> 
              <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> 
            </div>
            <!-- <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div> -->
            <button class="btn btn-primary-join"  href="#offcanvasExample" role="button" >Hire Me</button>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center">
         <button class="btn btn-secondary"> 
          <img src="{{asset('website/assets/img/profile1.jpg')}}"  class="profile-image" />
        </button> 
        <span class="name mt-3">Jonathan</span> <span class="idd">@jonathan</span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
              <span class="idd1">Oxc4c16a645_b21a</span> 
              <span><i class="fa fa-copy"></i></span> 
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
              <span class="number">1069 <span class="follow">Followers</span></span> 
            </div>
            <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Hire Me</button> </div>
            <div class="text mt-3"> 
              <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> 
            </div>
            <!-- <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div> -->
            <button class="btn btn-primary-join"  href="#offcanvasExample" role="button" >Hire Me</button>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center">
         <button class="btn btn-secondary"> 
          <img src="{{asset('website/assets/img/profile4.jpg')}}"  class="profile-image" />
        </button> 
        <span class="name mt-3">Micheal</span> <span class="idd">@micheal</span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
              <span class="idd1">Oxc4c16a645_b21a</span> 
              <span><i class="fa fa-copy"></i></span> 
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
              <span class="number">1069 <span class="follow">Followers</span></span> 
            </div>
            <div class=" d-flex mt-2"> 
              <button class="btn1 btn-dark">Hire Me</button> </div>
            <div class="text mt-3"> 
              <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> 
            </div>
            <!-- <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div> -->
            <button class="btn btn-primary-join"  href="#offcanvasExample" role="button" >Hire Me</button>
        </div>
    </div>
</div>
</div>



<section class="top-team-area pb-70" style="margin-top: -688px;">
<div class="container">
<div class="section-title">
<span class="sub-title">{{__('content.team')}}</span>
<h2>{{__('content.topRankingPlayer')}}</h2>
</div>
<div class="row">
  @foreach($top_users as $user)
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-top-team-item">
<img src="{{asset('storage/'.$user->image)}}" alt="image">
<h3>{{strtoupper($user->nick)}}</h3>
<ul>
<li><a href="#" target="_blank"><i class="bx bxl-youtube"></i></a></li>
<li><a href="#" target="_blank"><i class="bx bxl-twitch"></i></a></li>
<li><a href="#" target="_blank"><i class="bx bxl-vimeo"></i></a></li>
</ul>
</div>
</div>
@endforeach

</div>
</div>
</section>

</div>  
</div>
@include('website.include.join')
<style type="text/css">
  * {
    margin: 0;
    padding: 0;
}

.btn-primary-join
{
  background-color: black;
  color: white;
}
.btn-primary-join:hover{
  color: white;
}

.card {
    width: 350px;
    background-color: #e10e6f;
    border: none;
    cursor: pointer;
    transition: all 0.5s;
    color:white;
}

.image img {
    transition: all 0.5s;
}

.card:hover .image img {
    transform: scale(1.5);
}



.name {
    font-size: 22px;
    font-weight: bold;
    color:white;
}

.idd {
    font-size: 14px;
    font-weight: 600;
    color:white;
}

.idd1 {
    font-size: 12px;
    color:white;
}

.number {
    font-size: 22px;
    font-weight: bold;
    color:white;
}

.follow {
    font-size: 12px;
    font-weight: 500;
    
    color:white;
}

/*.btn1 {
    height: 40px;
    width: 150px;
    border: none;
    background-color: #000;
    color: #aeaeae;
    font-size: 15px
}*/


.p-3
{
  padding: 14rem!important;
  
}
.p-43
{
  padding: 14rem !important;
  position: relative;
    top: -473px;
}

.text span {
    font-size: 13px;
    color: white;
    font-weight: 500
}

.icons i {
    font-size: 19px;
}

hr .new1 {
    border: 1px solid;
}

.join {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold;
}

.date {
    background-color: #ccc;
}
.pb-70 {
  padding-bottom: 0px !important;
}
</style>

@endsection
@section('scripts')

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
  var form = document.getElementById('join_form'); // The id of the form that handles payment submission
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripe_token');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}

// Handle form submission.
var form = document.getElementById('join_form');
form.addEventListener('submit', function(event) {
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

<script type="text/javascript">
  $(".team_modal").click(function(){
    $("#match_id").val($(this).data("match_id"))
    $("#team").val("nothn")
    var team = $(this).data("team")
    console.log($(this).data("team"))
    $("#duo > input").each(function() {
      $(this).attr("required",true);
      $("#duo").show();
      $("#squad").show();
    })
    $("#squad > input").each(function() {
        $(this).removeAttr("required");
      })
    $("#team_input").attr("required",true);
    $("#team_name").show()
    if(team == 'DUO'){
      $("#squad").hide();
      $("#squad > input").each(function() {
        $(this).removeAttr("required");
      })
    } else if(team == 'SOLO'){
      $("#duo").hide();
      $("#duo > input").each(function() {
        $(this).removeAttr("required");
      })
      $("#team_name").hide()
      $("#team_input").removeAttr("required");
    }
  })
  $(document).ready(function()
{


if($('.bbb_viewed_slider').length)
{
var viewedSlider = $('.bbb_viewed_slider');

viewedSlider.owlCarousel(
{
loop:true,
margin:30,
autoplay:true,
autoplayTimeout:6000,
nav:false,
dots:false,
responsive:
{
0:{items:1},
575:{items:2},
768:{items:3},
991:{items:4},
1199:{items:6}
}
});

if($('.bbb_viewed_prev').length)
{
var prev = $('.bbb_viewed_prev');
prev.on('click', function()
{
viewedSlider.trigger('prev.owl.carousel');
});
}

if($('.bbb_viewed_next').length)
{
var next = $('.bbb_viewed_next');
next.on('click', function()
{
viewedSlider.trigger('next.owl.carousel');
});
}
}

});



</script>
@endsection
