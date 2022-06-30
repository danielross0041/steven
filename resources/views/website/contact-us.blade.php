@extends('website.layouts.app')
@section('title')
<title>{{__('content.contactUs')}} |  {{__('content.steven')}}</title>
@endsection
@section('content')
<style type="text/css">
.signup-btn{
    margin-left: 25px;
}
    @media screen and (max-width: 1425px) {
    .zelda-responsive-nav{
    display: block;
  }

  .zelda-responsive-menu{
    display: block;
  }
  .align-items-center {
  margin-top: 20px;
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
<section class="contact-area ptb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="contact-info">
<span class="sub-title">{{__('content.contactDetails')}}</span>
<h2>{{__('content.getInTouch')}}</h2>
<p>{{__('content.contactText')}}</p>
<ul>
<li>
<div class="icon">
<i class="flaticon-location"></i>
</div>
<h3>{{__('content.address')}}</h3>
<p>{{__('content.addressText')}}</p>
</li>
<li>
<div class="icon">
<i class="flaticon-24-hours"></i>
</div>
<h3>{{__('content.contact')}}</h3>
<p>{{__('content.mobile')}}: <a href="tel:+44457895789">(+44) - 45789 - 5789</a></p>
<p>{{__('content.mail')}}: <a href="mailto:hello@zelda.com">hello@zelda.com</a></p>
</li>
<li>
<div class="icon">
<i class="flaticon-network"></i>
</div>
<h3>{{__('content.social')}}</h3>
<div class="social-box">
<a href="#" target="_blank"><i class="bx bxl-twitch"></i></a>
<a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
<a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
<a href="#" target="_blank"><i class="bx bxl-youtube"></i></a>
<a href="#" target="_blank"><i class="bx bxl-instagram"></i></a>
<a href="#" target="_blank"><i class="bx bxl-vimeo"></i></a>
</div>
</li>
</ul>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="contact-form">
<h2>{{__('content.readyToGetStarted')}}</h2>
<p>{{__('content.contactDetailsText')}}</p>
<form id="contactForm" novalidate="true">
<div class="row">
<div class="col-lg-12 col-md-6">
<div class="form-group">
<input type="text" name="name" id="name" required="" data-error="{{__('content.nameInputError')}}" placeholder="{{__('content.namePlaceholder')}}">
<div class="help-block with-errors"></div>
@if ($errors->has('name'))
<span class="text-white">
    <strong>{{ $errors->first('name') }}</strong>
</span>
@endif
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="form-group">
<input type="email" name="email" id="email" required="" data-error="{{__('content.emailPlaceholder')}}" placeholder="{{__('content.emailInputError')}}">
<div class="help-block with-errors"></div>
@if ($errors->has('email'))
<span class="text-white">
    <strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<input type="text" name="phone_number" id="phone_number" required="" data-error="{{__('content.phoneInputError')}}" placeholder="{{__('content.phonePlaceholder')}}">
 <div class="help-block with-errors"></div>
 @if ($errors->has('phone_number'))
<span class="text-white">
    <strong>{{ $errors->first('phone_number') }}</strong>
</span>
@endif
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<textarea name="message" id="message" cols="30" rows="5" required="" data-error="{{__('content.messageInputError')}}" placeholder="{{__('content.messagePlaceholder')}}"></textarea>
<div class="help-block with-errors"></div>
@if ($errors->has('message'))
<span class="text-white">
    <strong>{{ $errors->first('message') }}</strong>
</span>
@endif
@if ($errors->has('name'))
<span class="text-white">
    <strong>{{ $errors->first('name') }}</strong>
</span>
@endif
</div>
</div>
<div class="col-lg-12 col-md-12">
                                <button type="button" class="btn btn-primary " onclick="contact();">
                              {{__('content.contactButton')}}
                                </button>
<div id="msgSubmit" class="h3 text-center">{{__('content.contactSuccess')}}</div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
@include('website.include.join')
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

  document.getElementById('msgSubmit').style.display="none";
  

  function contact(){
    
    var name=document.getElementById('name').value;
    var email=document.getElementById('email').value;
    var phone=document.getElementById('phone_number').value;
    var message=document.getElementById('message').value;
    $.ajax({
            type: 'POST',
            url: "{{route('contact.store')}}",
            data: {
              _token: "{{ csrf_token() }}",
                name:name,
                email:email,
                phone:phone,
                message:message
            },
            dataType: 'json',
            success: function (data) {
                if(data==0){
                    alert('something went wrong');
                }
                else {
                  document.getElementById('msgSubmit').style.display="block";
                }
            },
            error: function (data) {
              alert('something went wrong');
            }
        });
    
   
        
    
   


}
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