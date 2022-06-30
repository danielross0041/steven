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
                    <p>{{__('content.login')}} {{__('content.or')}} <a href="signup.php">{{__('content.signup')}}</a></p>
                    <form id="contactForm" novalidate="true" action="{{route('web.login')}}" method="POST" name="loginForm">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" required="" data-error="{{__('content.emailInputError')}}" placeholder="{{__('content.emailPlaceholder')}}" />
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
                                    <input type="password" name="password" id="password" required="" data-error="{{__('content.passwordInputError')}}" placeholder="{{__('content.passwordPlaceholder')}}" />
                                    <div class="help-block with-errors"></div>
                                    @if ($errors->has('password'))
                                        <span class="text-white">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">{{__('content.login')}}</button>
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
@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript">
    
    $(function () {
        $("form[name='loginForm']").validate({
            rules: {
                password: "required",
                email: {
                    required: true,
                    email: true,
                },
            },
            messages: {
                password: "Please enter your password",
                email: "Please enter a valid email address",
            },
            submitHandler: function (form) {
                form.submit();
            },
        });
    });


</script>
@endsection 
