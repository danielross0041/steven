@extends('website.layouts.app')
@section('content')

<!-- NAVBAR END -->
<!-- <div class="container" style="background-image: url({{asset('/website/assets/img/background-home.jpg')}});background-size: cover;">
  <div class="row banner-img" >
    <span class="banner">
      <h1>LIVE</h1>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed<br> diam nonummy nibh euismod tincidunt ut laoreet</p>
      <a href="#container-fluid"><button class="btn btn-light">Start Now</button></a>
      
    </span>    
  </div>
</div> -->



</div>  
</div>
<section class="popular-leagues-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<span class="sub-title">TOURNAMENTS</span>
<h2>Popular Leagues</h2>
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
<a class="join-now-btn" disabled>Already Joined</a>

@elseif($match->total_player > $match->joined_players )
<a href="#offcanvasExample" class="join-now-btn team_modal" data-team="{{$match->team}}" data-match_id="{{$match->id}}" data-bs-toggle="offcanvas" data-team="{{$match->team}}" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Join Now</a>
@else
<a class="join-now-btn" disabled>Slots Full</a>
@endif
@else
<a href="{{route('web_guest_login')}}" class="join-now-btn " role="button" aria-controls="offcanvasExample">Join Now</a>
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




@include('website.include.join')

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
