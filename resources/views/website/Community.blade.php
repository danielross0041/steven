@extends('website.layouts.app')
@section('title')
<title>{{__('content.community')}} | {{__('content.steven')}}</title>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<style type="text/css">
    .error{
        color: white;
    }
    .demo {
        
    }
    .top-icon,
    .bottom-icon {
        display: block;
        font-size: 70px;
        color: #fdfeff;
        text-align: center;
        margin: 0 auto;
    }
    .testimonial {
        padding: 0 40px;
        position: relative;
        overflow: hidden;
        background: #ee398c;
        color: #fdfeff;
        z-index: 1;
    }
    .testimonial:after {
        content: "";
        width: 150px;
        height: 107%;
        background: #003;
        position: absolute;
        top: -20px;
        left: -60px;
        transform: matrix(1, 0, 0.5, 1, 150, 0);
        z-index: -1;
    }
    .testimonial .pic {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        float: left;
        margin: 10px 25px 0 0;
        position: relative;
    }
    .testimonial .pic img {
        width: 100%;
        height: auto;
    }
    .testimonial .testimonial-content {
        width: 70%;
        float: right;
        padding: 30px 0;
        text-align: center;
    }
    .testimonial .testimonial-title {
        font-size: 30px;
        font-weight: 700;
        margin: 0 0 20px;
        text-transform: capitalize;
        text-decoration: underline;
    }
    .testimonial .description {
        font-size: 18px;
        line-height: 26px;
        border: 1px solid;
        padding: 30px;
    }
    .owl-theme .owl-controls .owl-page span {
        width: 10px;
        height: 10px;
        background: #fff;
        border: 2px solid #1ec4f3;
    }
    .owl-theme .owl-controls .owl-page:active span {
        color: #1ec4f3;
    }
    @media only screen and (max-width: 767px) {
        .testimonial {
            text-align: center;
        }
        .testimonial .pic {
            float: none;
            margin: 20px auto 0;
        }
        .testimonial .testimonial-content {
            width: 100%;
            float: none;
            padding: 20px 0;
        }
        .testimonial .description {
            font-size: 14px;
        }
    }
    @media only screen and (max-width: 480px) {
        .testimonial {
            padding: 0 20px;
        }
        .testimonial .testimonial-title {
            font-size: 22px;
        }
    }


.be-comment-block {
    margin-bottom: 50px !important;
    border: 1px solid #edeff2;
    border-radius: 2px;
    padding: 50px 70px;
    border:1px solid #ffffff;
}

.comments-title {
    font-size: 16px;
    color: #262626;
    margin-bottom: 15px;
    font-family: 'Conv_helveticaneuecyr-bold';
}

.be-img-comment {
    width: 60px;
    height: 60px;
    float: left;
    margin-bottom: 15px;
}

.be-ava-comment {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}

.be-comment-content {
    margin-left: 80px;
}

.be-comment-content span {
    display: inline-block;
    width: 49%;
    margin-bottom: 15px;
    color: white;
}

.be-comment-name {
    font-size: 13px;
    font-family: 'Conv_helveticaneuecyr-bold';
}

.be-comment-content a {
    color: #383b43;
}

.be-comment-content span {
    display: inline-block;
    width: 49%;
    margin-bottom: 15px;
}

.be-comment-time {
    text-align: right;
}

.be-comment-time {
    font-size: 11px;
    color: #b4b7c1;
}

.be-comment-text {
    font-size: 13px;
    line-height: 18px;
    color: #7a8192;
    display: block;
    background: #f6f6f7;
    border: 1px solid #edeff2;
    padding: 15px 20px 20px 20px;
}

.form-group.fl_icon .icon {
    position: absolute;
    top: 1px;
    left: 16px;
    width: 48px;
    height: 48px;
    background: #f6f6f7;
    color: #b5b8c2;
    text-align: center;
    line-height: 50px;
    -webkit-border-top-left-radius: 2px;
    -webkit-border-bottom-left-radius: 2px;
    -moz-border-radius-topleft: 2px;
    -moz-border-radius-bottomleft: 2px;
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px;
}

.form-group .form-input {
    font-size: 13px;
    line-height: 50px;
    font-weight: 400;
    color: #b4b7c1;
    width: 100%;
    height: 50px;
    padding-left: 20px;
    padding-right: 20px;
    border: 1px solid #edeff2;
    border-radius: 3px;
}

.form-group.fl_icon .form-input {
    padding-left: 70px;
}

.form-group textarea.form-input {
    height: 150px;
}


.feedback_button {
  height: 40px;
  width: 100px;
  margin-left:13px;
}
.signup-btn{
    margin-left: 25px;
}
@media screen and (max-width: 1425px) {
    .be-comment-block {
        padding: 50px 10px;
    }
    .time-feedback{
        padding-top: 14px;
    }
    .feedback_button{
        margin: 0 auto;
    }
    .zelda-responsive-nav{
        display: block;
    }
    .zelda-responsive-menu{
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

    display: block;
  }

  .zelda-responsive-menu{
    display: block;
  }
}

</style>
@endsection
@section('content')
<!-- NAVBAR END -->
<div class="container e-pal-banner" style="background-image: url({{asset('/website/assets/img/comm.jpg')}});background-size: cover;">
    <div class="row banner-img">
        <span class="banner">
            <h1>{{__('content.community')}}</h1>
            <p>{{__('content.communityText')}}</p>
            <a href="#tournament-details-area ptb-100 "><button class="btn btn-light">{{__('content.startNow')}}</button></a>
        </span>
    </div>
</div>

@include('website.include.header')

<!-- <section class="services-area pt-100 pb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12">
<div class="section-title">
<span class="sub-title">What We Do</span>
<h2>We offer game application development services</h2>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-services-box">
<div class="icon">
<i class="flaticon-game"></i>
</div>
<h3>Bingo Game Development</h3>
<p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod por incididunt ut labore et dolore magna ectetur aliqua.</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-services-box">
<div class="icon">
<i class="flaticon-card-game"></i>
</div>
<h3>Poker Game Development</h3>
<p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod por incididunt ut labore et dolore magna ectetur aliqua.</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-services-box">
<div class="icon">
<i class="flaticon-slot-machine"></i>
</div>
<h3>Slot Game Development</h3>
<p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod por incididunt ut labore et dolore magna ectetur aliqua.</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-services-box">
<div class="icon">
<i class="flaticon-3d"></i>
</div>
<h3>3D Game Development</h3>
<p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod por incididunt ut labore et dolore magna ectetur aliqua.</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-services-box">
<div class="icon">
<i class="flaticon-website"></i>
</div>
<h3>Web Game Development</h3>
<p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod por incididunt ut labore et dolore magna ectetur aliqua.</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="single-services-box">
<div class="icon">
<i class="flaticon-game-controller"></i>
</div>
<h3>AR/VR Game Development</h3>
<p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod por incididunt ut labore et dolore magna ectetur aliqua.</p>
</div>
</div>
</div>
</div>
</section>  
 -->
 {{--
 @if(!$feedbacks->isEmpty())
<div class="demo">
    <div class="container">
    
        <div class="row">
            <div class="col-md-offset-2 col-md-12">
                <span class="top-icon"><i class="fa fa-quote-left"></i></span>
                <div id="testimonial-slider" class="owl-carousel">
                    @foreach($feedbacks as $feedback)
                    <div class="testimonial">
                        <div class="pic">
                            <img src="images/img-1.jpg" alt="" />
                        </div>
                        <div class="testimonial-content">
                            <h3 class="testimonial-title">{{ucfirst($feedback->name)}}</h3>
                            
                            <p class="description">
                                {!! nl2br($feedback->feedback) !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <span class="bottom-icon"><i class="fa fa-quote-right"></i></span>
            </div>
        </div>
    </div>
</div>
@endif
--}}
<br>
<br>
<br>

<div class="container">
<div class="user-profile">
      <h1>{{__('content.feedbacks')}}</h1>
    </div>
    <div class="be-comment-block">
        @if(!$feedbacks->isEmpty())
        @foreach($feedbacks as $feedback)
        <div class="be-comment">
            <div class="be-img-comment">
                <a href="blog-detail-2.html">
                    <img src="{{asset('/website/img/feedback_avatar.jpg')}}" alt="" class="be-ava-comment" />
                </a>
            </div>
            <div class="be-comment-content">
                <span class="be-comment-name"> {{ucfirst($feedback->name)}}</span>
                <span class="be-comment-time time-feedback">
                    <i class="fa fa-clock-o"></i>
                    
                    {{date('M d, Y H:i',strtotime($feedback->created_at)) }}
                </span>

                <p class="be-comment-text" disabled>
                @if(App::getLocale()=='en')
                    {!! nl2br($feedback->feedback) !!}
                @else
                    {!! nl2br($feedback->feedback_zh) !!}
                @endif
                </p>
            </div>
        </div>
        @endforeach 
        @endif
        <form class="form-block" action="{{route('feedback_submit')}}" method="POST" style="margin-top:40px;" name="feedbackForm">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="form-group fl_icon">
                        <div class="icon"><i class="fa fa-user"></i></div>
                        <input class="form-input" type="text" name="name" id="name" required="" data-error="Please enter Your name" placeholder="{{__('content.namePlaceholder')}}" value="{{Auth::check()?Auth::user()->name:''}}" >
                    </div>
                    @if ($errors->has('name'))
                    <span class="text-white">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-6 fl_icon">
                    <div class="form-group fl_icon">
                        <div class="icon"><i class="fa fa-envelope-o"></i></div>
                        <input class="form-input" type="email" name="email" id="email" required=""  data-error="Please enter Your email" placeholder="{{__('content.emailPlaceholder')}}"  value="{{Auth::check()?Auth::user()->email:''}}">

                    </div>
                    @if ($errors->has('email'))
                    <span class="text-white">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-xs-12">                                 
                    <div class="form-group">
                        <textarea class="form-input" placeholder="{{__('content.feedbackPlaceholder')}}" name="feedback" id="feedback"  data-error="Please enter feedback" ></textarea>
                    </div>
                    @if ($errors->has('feedback'))
                    <span class="text-white">
                        <strong>{{ $errors->first('feedback') }}</strong>
                    </span>
                    @endif
                </div>
                <button  type="submit" class="btn btn-primary pull-right feedback_button">{{__('content.submit')}}</button>
            </div>
        </form>     
    </div>
</div>

{{--
<div class="container">
    <div class="row align-items-center">
        <center>
            <div class="col-lg-6 col-md-6" style="padding: 20px;">
                <div class="contact-form">
                    <h2>FeedBack Form</h2>
                    
                    <form id="contactForm" novalidate="true" action="{{route('feedback_submit')}}" method="POST" name="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" required="" data-error="Please enter Your name" placeholder="Your Name" value="{{Auth::check()?Auth::user()->name:''}}" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" required=""  data-error="Please enter Your email" placeholder="Your email"  value="{{Auth::check()?Auth::user()->email:''}}"/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" required="" data-error="Please enter subject" placeholder="subject" />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <textarea name="feedback" id="feedback" required="" data-error="Please enter feedback" placeholder="Your FeedBack here..."> </textarea>
                                    
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">Submit</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </center>
    </div>
</div>
--}}
<!-- <div class="magazine-area" style="padding: 54px;">
    <div class="container">
        <div class="magazine-items" style="position: relative; height: 1101.75px;">
            <div class="col-lg-3 col-md-6 grid-item" style="position: absolute; left: 0%; top: 0px;">
                <div class="single-magazine-box">
                    <img src="{{asset('website/assets/img/magazine-img1.jpg')}}" alt="image" />
                    <div class="content">
                        <ul class="meta">
                            <li>Game</li>
                            <li>June 12, 2021</li>
                        </ul>
                        <h3>Android tools for mobile game development</h3>
                        <a href="#" class="read-more-btn"><i class="flaticon-null"></i> Read More</a>
                    </div>
                    <a href="#" class="link-btn"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid-item" style="position: absolute; left: 25%; top: 0px;">
                <div class="single-magazine-box">
                    <img src="{{asset('website/assets/img/magazine-img2.jpg')}}" alt="image" />
                    <div class="content">
                        <ul class="meta">
                            <li>Programmer</li>
                            <li>June 11, 2021</li>
                        </ul>
                        <h3>Get a job: Disbelief is hiring a Programmer</h3>
                        <a href="#" class="read-more-btn"><i class="flaticon-null"></i> Read More</a>
                    </div>
                    <a href="#" class="link-btn"></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 grid-item" style="position: absolute; left: 50%; top: 0px;">
                <div class="single-magazine-box">
                    <img src="{{asset('website/assets/img/magazine-img3.jpg')}}" alt="image" />
                    <div class="content">
                        <ul class="meta">
                            <li>Spider-Man</li>
                            <li>June 10, 2021</li>
                        </ul>
                        <h3>Don't Miss: Making Insomniac's Spider-Man do what a spider can</h3>
                        <a href="#" class="read-more-btn"><i class="flaticon-null"></i> Read More</a>
                    </div>
                    <a href="#" class="link-btn"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid-item" style="position: absolute; left: 0%; top: 368.547px;">
                <div class="single-magazine-box">
                    <img src="{{asset('website/assets/img/magazine-img5.jpg')}}" alt="image" />
                    <div class="content">
                        <ul class="meta">
                            <li>Mobile</li>
                            <li>June 09, 2021</li>
                        </ul>
                        <h3>How to hit the mark with mobile games</h3>
                        <a href="#" class="read-more-btn"><i class="flaticon-null"></i> Read More</a>
                    </div>
                    <a href="#" class="link-btn"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid-item" style="position: absolute; left: 25%; top: 368.547px;">
                <div class="single-magazine-box">
                    <img src="{{asset('website/assets/img/magazine-img7.jpg')}}" alt="image" />
                    <div class="content">
                        <ul class="meta">
                            <li>Fails</li>
                            <li>June 08, 2021</li>
                        </ul>
                        <h3>Game Translation Fails - Common Causes</h3>
                        <a href="#" class="read-more-btn"><i class="flaticon-null"></i> Read More</a>
                    </div>
                    <a href="#" class="link-btn"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid-item" style="position: absolute; left: 50%; top: 372.25px;">
                <div class="single-magazine-box">
                    <img src="{{asset('website/assets/img/magazine-img4.jpg')}}" alt="image" />
                    <div class="content">
                        <ul class="meta">
                            <li>Borderlands</li>
                            <li>June 07, 2021</li>
                        </ul>
                        <h3>Borderlands 3 Hotfix Update Is Here</h3>
                        <a href="#" class="read-more-btn"><i class="flaticon-null"></i> Read More</a>
                    </div>
                    <a href="#" class="link-btn"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid-item" style="position: absolute; left: 75%; top: 372.25px;">
                <div class="single-magazine-box">
                    <img src="{{asset('website/assets/img/magazine-img6.jpg')}}" alt="image" />
                    <div class="content">
                        <ul class="meta">
                            <li>Game</li>
                            <li>June 06, 2021</li>
                        </ul>
                        <h3>Zelda comes to Game Pass for its 10th anniversary</h3>
                        <a href="#" class="read-more-btn"><i class="flaticon-null"></i> Read More</a>
                    </div>
                    <a href="#" class="link-btn"></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 grid-item" style="position: absolute; left: 50%; top: 729.5px;">
                <div class="single-magazine-box">
                    <img src="{{asset('website/assets/img/magazine-img8.jpg')}}" alt="image" />
                    <div class="content">
                        <ul class="meta">
                            <li>Hardware</li>
                            <li>June 05, 2021</li>
                        </ul>
                        <h3>What’s New In Matter of Hardware This Year?</h3>
                        <a href="#" class="read-more-btn"><i class="flaticon-null"></i> Read More</a>
                    </div>
                    <a href="#" class="link-btn"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid-item" style="position: absolute; left: 0%; top: 737.094px;">
                <div class="single-magazine-box">
                    <img src="{{asset('website/assets/img/magazine-img9.jpg')}}" alt="image" />
                    <div class="content">
                        <ul class="meta">
                            <li>BaaS</li>
                            <li>June 04, 2021</li>
                        </ul>
                        <h3>BaaS MPlayer Services Mega Comparison Sheet</h3>
                        <a href="#" class="read-more-btn"><i class="flaticon-null"></i> Read More</a>
                    </div>
                    <a href="#" class="link-btn"></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 grid-item" style="position: absolute; left: 25%; top: 737.094px;">
                <div class="single-magazine-box">
                    <img src="{{asset('website/assets/img/magazine-img10.jpg')}}" alt="image" />
                    <div class="content">
                        <ul class="meta">
                            <li>Windows</li>
                            <li>June 03, 2021</li>
                        </ul>
                        <h3>How To Make The Windows 10 Bootable?</h3>
                        <a href="#" class="read-more-btn"><i class="flaticon-null"></i> Read More</a>
                    </div>
                    <a href="#" class="link-btn"></a>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- ________ -->

@endsection @section('scripts')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>




<script type="text/javascript">
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 1,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: true,
            slideSpeed: 1000,
            singleItem: true,
            transitionStyle: "fadeUp",
            autoPlay: true,
        });
        $("#contactForm").validate({
            rules: {
                feedback : {
                    required: true,
                },
            }
        });
    });
    $(function () {
        $("form[name='feedbackForm']").validate({
            rules: {
                name: "required",
                feedback: "required",
                email: {
                    required: true,
                    email: true,
                },
            },
            messages: {
                name: "Please enter your name",
                feedback: "Please enter your feedback",
                email: "Please enter a valid email address",
            },
            submitHandler: function (form) {
                form.submit();
            },
        });
    });


</script>
@endsection
