@extends('website.layouts.auth')
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
 <div class="container">
     <div class="row align-items-center">
         
  <center>    
<div class="col-lg-6 col-md-6" style="padding: 20px;">
                        <div class="contact-form">
                            <h2>{{__('content.readyToGetStarted')}}</h2>
                            <p><a href="login.php">{{__('content.login')}}</a>  {{__('content.or')}} {{__('content.signup')}}</p>
                            <form id="contactForm" method="POST" enctype="multipart/form-data" action="{{ route('user.store') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" required="" data-error="{{__('content.nameInputError')}}" placeholder="{{__('content.namePlaceholder')}}" value="{{ old('name') }}">
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
                                            <input type="number" name="age" id="age" required="" data-error="{{__('content.ageInputError')}}" placeholder="{{__('content.agePlaceholder')}}" value="{{ old('age') }}">
                                            <div class="help-block with-errors"></div>
                                            @if ($errors->has('age'))
                                                <span class="text-white">
                                                    <strong>{{ $errors->first('age') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="language" id="language" required="" data-error="{{__('content.languageInputError')}}" placeholder="{{__('content.languagePlaceholder')}}" value="{{ old('language') }}">
                                            <div class="help-block with-errors"></div>
                                            @if ($errors->has('language'))
                                                <span class="text-white">
                                                    <strong>{{ $errors->first('language') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="nick" id="nick" required="" data-error="{{__('content.nickInputError')}}" placeholder="{{__('content.nickPlaceholder')}}" value="{{ old('nick_name') }}">
                                            <div class="help-block with-errors"></div>
                                             @if ($errors->has('nick'))
                                                <span class="text-white">
                                                    <strong>{{ $errors->first('nick') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" required="" data-error="{{__('content.emailInputError')}}" placeholder="{{__('content.emailPlaceholder')}}" value="{{ old('email') }}">
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
                                            <input type="password" name="password" id="password" required="" data-error="{{__('content.passwordInputError')}}" placeholder="{{__('content.passwordPlaceholder')}}">
                                            <div class="help-block with-errors"></div>
                                             @if ($errors->has('password'))
                                                <span class="text-white">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" id="password_confirmation" required="" data-error="{{__('content.confirmPasswordInputError')}}" placeholder="{{__('content.confirmPasswordPlaceholder')}}">
                                            <div class="help-block with-errors"></div>
                                             @if ($errors->has('password_confirmation'))
                                                <span class="text-white">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="contact_no" id="contact_no" required="" data-error="{{__('content.contactInfoInputError')}}" placeholder="{{__('content.contactInfoPlaceholder')}}" value="{{ old('contact') }}">
                                            <div class="help-block with-errors"></div>
                                             @if ($errors->has('contact_no'))
                                                <span class="text-white">
                                                    <strong>{{ $errors->first('contact_no') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="address" id="address" required="" data-error="{{__('content.addressInputError')}}" placeholder="{{__('content.addressPlaceholder')}}" value="{{ old('address') }}">
                                            <div class="help-block with-errors"></div>
                                             @if ($errors->has('address'))
                                                <span class="text-white">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="role"  id="role">
                                                <option value="" disabled selected>{{__('content.selectRole')}}</option>
                                                <option value="1" {{ (old('role') == "1" ? "selected":"")}}>{{__('content.player')}}</option>
                                                <option value="2" {{ (old('role') == "2" ? "selected":"")}}>{{__('content.user')}}</option>
                                             </select>   
                                            <div class="help-block with-errors"></div>
                                             @if ($errors->has('role'))
                                                <span class="text-white">
                                                    <strong>{{ $errors->first('role') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="gender"  id="gender">
                                                <option value="MALE" {{ (old('gender') == "MALE" ? "selected":"")}}>Male</option>
                                                <option value="FEMALE" {{ (old('gender') == "FEMALE" ? "selected":"")}}>Female</option>
                                                <option value="OTHER" {{ (old('gender') == "OTHER" ? "selected":"")}}>Other</option>
                                             </select>   
                                            <div class="help-block with-errors"></div>
                                             @if ($errors->has('gender'))
                                                <span class="text-white">
                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image" id="image"value="{{ old('image') }}" >
                                            <div class="help-block with-errors"></div>
                                             @if ($errors->has('image'))
                                                <span class="text-white">
                                                    <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn" style="pointer-events: all; cursor: pointer;">{{__('content.signup')}}</button>
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
@endsection