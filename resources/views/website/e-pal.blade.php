@extends('website.layouts.app')
@section('title')
<title>
{{__('content.epal')}} | {{__('content.steven')}}
</title>
@endsection 

@section('content')


<div class="container e-pal-banner" style="background-image: url({{asset('/website/assets/img/epal.jpg')}});background-size: cover;">
    <div class="row banner-img">
        <span class="banner">
            <h1>{{__('content.epal')}}</h1>
            <p>{{__('content.epalText')}}</p>
            <a href="#tournament-details-area ptb-100 "><button class="btn btn-light">{{__('content.startNow')}}</button></a>
        </span>
    </div>
</div>
<div class="section-title" style="margin-top: 35px;">
        <h2>{{__('content.topRankingPlayer')}}</h2>
    </div>
    <div class="container">
  <div class="row">
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile3.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Steven</span> <span class="idd">@Steven</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
                <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">

                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile1.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Ross</span> <span class="idd">@Ross</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
                <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">

                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile4.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Jose</span> <span class="idd">@Jose</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
                <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile5.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Milay</span> <span class="idd">@Milay</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
                <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile6.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Buttler</span> <span class="idd">@Buttler</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile7.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Root</span> <span class="idd">@Root</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile11.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">LEe</span> <span class="idd">@LEe</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile9.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Anerson</span> <span class="idd">@Anerson</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile1.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Brad</span> <span class="idd">@Brad</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile3.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Michiel</span> <span class="idd">@Michiel</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile4.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Smith</span> <span class="idd">@Smith</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile5.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Clarke</span> <span class="idd">@Clarke</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile6.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Ronaldo</span> <span class="idd">@Ronaldo</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile7.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Messi</span> <span class="idd">@Messi</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile11.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Jordan</span> <span class="idd">@Jordan</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile9.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Fletcher</span> <span class="idd">@Fletcher</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
  </div>
  <!--
    <div class="row">
    <div class="col-sm-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile3.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Flinch</span> <span class="idd">@flinch</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
              
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile3.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Flinch</span> <span class="idd">@flinch</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
              
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile3.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Flinch</span> <span class="idd">@flinch</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile3.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Flinch</span> <span class="idd">@flinch</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               
                <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
  </div>
    <div class="row">
    <div class="col-sm-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile3.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Flinch</span> <span class="idd">@flinch</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile3.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Flinch</span> <span class="idd">@flinch</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile3.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Flinch</span> <span class="idd">@flinch</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
               <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
    <div class="card">
            <div class="image d-flex flex-column justify-content-center align-items-center" style="padding:18px;">
                <button class="btn btn-secondary">
                    <img src="{{asset('website/assets/img/profile3.jpg')}}" class="profile-image" />
                </button>
                <span class="name mt-3">Flinch</span> <span class="idd">@flinch</span>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span>
                    <span><i class="fa fa-copy"></i></span>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
               
                <div class="text mt-3">
                    <span>
                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br />
                        <br />
                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                    </span>
                </div>
               
                <a class="btn btn-primary-join" href="javascript:void(0);">{{__('content.hireME')}}</a>
            </div>
        </div>
    </div> -->
  </div>
</div>
    


@include('website.include.join')
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }
    .signup-btn{
    margin-left: 25px;
}

    .btn-primary-join {
        background-color: black;
        color: white;
    }
    .btn-primary-join:hover {
        color: white;
    }

    .card {
        
        background-color: #e10e6f;
        border: none;
        cursor: pointer;
        transition: all 0.5s;
        color: white;
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
        color: white;
    }

    .idd {
        font-size: 14px;
        font-weight: 600;
        color: white;
    }

    .idd1 {
        font-size: 12px;
        color: white;
    }

    .number {
        font-size: 22px;
        font-weight: bold;
        color: white;
    }

    .follow {
        font-size: 12px;
        font-weight: 500;

        color: white;
    }

    /*.btn1 {
    height: 40px;
    width: 150px;
    border: none;
    background-color: #000;
    color: #aeaeae;
    font-size: 15px
}*/

    .p-3 {
        padding: 8rem !important;
    }
    .p-43 {
        padding: 8rem !important;
        position: relative;
    }

    .text span {
        font-size: 13px;
        color: white;
        font-weight: 500;
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

    @media screen and (max-width: 1425px) {
        .card {
        width: 322px;
        background-color: #e10e6f;
        border: none;
        cursor: pointer;
        transition: all 0.5s;
        color: white;
    }
    .e-pal-banner{
        background: url(http://127.0.0.1:8000/website/assets/img/epal.jpg) -200px center no-repeat;
  background-size: auto;
background-size: cover;
object-fit: cover;
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
}
@media screen and (min-width: 1500px) {
        .card {
        width: 350px;
    }
}
</style>

@endsection @section('scripts')

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

<script type="text/javascript">
    $("#payNow").click(function () {
        $("#hiringForm").submit()
    })
    $(".hireME").click(function () {
        
        $("#hireModal").modal('show')
    })


    $("#modal_close").click(function () {
        $("#hireModal").modal('hide')
    })
    $(".team_modal").click(function () {
        $("#match_id").val($(this).data("match_id"));
        $("#team").val("nothn");
        var team = $(this).data("team");
        console.log($(this).data("team"));
        $("#duo > input").each(function () {
            $(this).attr("required", true);
            $("#duo").show();
            $("#squad").show();
        });
        $("#squad > input").each(function () {
            $(this).removeAttr("required");
        });
        $("#team_input").attr("required", true);
        $("#team_name").show();
        if (team == "DUO") {
            $("#squad").hide();
            $("#squad > input").each(function () {
                $(this).removeAttr("required");
            });
        } else if (team == "SOLO") {
            $("#duo").hide();
            $("#duo > input").each(function () {
                $(this).removeAttr("required");
            });
            $("#team_name").hide();
            $("#team_input").removeAttr("required");
        }
    });
    $(document).ready(function () {
        if ($(".bbb_viewed_slider").length) {
            var viewedSlider = $(".bbb_viewed_slider");

            viewedSlider.owlCarousel({
                loop: true,
                margin: 30,
                autoplay: true,
                autoplayTimeout: 6000,
                nav: false,
                dots: false,
                responsive: {
                    0: { items: 1 },
                    575: { items: 2 },
                    768: { items: 3 },
                    991: { items: 4 },
                    1199: { items: 6 },
                },
            });

            if ($(".bbb_viewed_prev").length) {
                var prev = $(".bbb_viewed_prev");
                prev.on("click", function () {
                    viewedSlider.trigger("prev.owl.carousel");
                });
            }

            if ($(".bbb_viewed_next").length) {
                var next = $(".bbb_viewed_next");
                next.on("click", function () {
                    viewedSlider.trigger("next.owl.carousel");
                });
            }
        }
    });
</script>
@endsection
