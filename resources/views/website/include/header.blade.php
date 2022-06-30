<header>
    <div class="navbar-area is-sticky">
        <div class="zelda-responsive-nav">
            <div class="container">
                <div class="zelda-responsive-menu">
                    <div class="logo">
                        <a href="javascript:openNav();">
                            <?php
                            $setting=\App\Models\SiteSetting::find(1);
                            ?>
                            @if($setting)
                            <img src="{{asset('storage/'.$setting->logo)}}" alt="homepage" width="100" height="50" class="light-logo" />
                            @else
                            <h2>{{__('content.logo')}}</h2>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="zelda-nav" id="res">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand">
                        <a href="{{route('web')}}">

                            @if($setting)

                            <img src="{{asset('storage/'.$setting->logo)}}" alt="homepage" width="100" height="50" class="light-logo" />
                            @else
                            <h2>{{__('content.logo')}}</h2>
                            @endif
                        </a>
                        <div class="collapse navbar-collapse mean-menu" style="display: block;">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="{{route('web')}}" class="nav-link active">{{__('content.home')}}</a></li>
                                <li class="nav-item"><a href="{{route('e_pal')}}" class="nav-link">{{__('content.epal')}}</a></li>
                                <li class="nav-item"><a href="{{route('communication')}}" class="nav-link">{{__('content.community')}}</a></li>
                                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">{{__('content.contactus')}}</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach (Config::get('languages') as $lang => $language) @if ($lang != App::getLocale())
                                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                                        @endif @endforeach
                                    </div>
                                </li>
                            </ul>
                            <div class="others-option d-flex align-items-center">
                                <div class="option-item">
                                    <div class="search-box">
                                        <i class="flaticon-search-1"></i>
                                    </div>
                                </div>
                                <div class="option-item">
                                    <div class="side-menu-btn">
                                        <i class="flaticon-null-2" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(auth()->check())
                            <div class="menu-toggle-mobile">
                                <a href="{{route('web.logout')}}"><button class="btn btn-danger profile-button">{{__('content.logout')}}</button></a>
                                <a href="{{route('user_dashboard')}}">
                                    <button class="btn btn-danger profile-button signup-btn">{{__('content.dashboard')}}</button>
                                </a>
                            </div>
                        @else
                            <div class="menu-toggle-mobile">
                                <a href="{{route('web_login')}}">
                                    <button class="btn btn-danger profile-button">{{__('content.login')}}</button>
                                </a>
                                <a href="{{route('web_register')}}">
                                    <button class="btn btn-danger profile-button signup-btn" >{{__('content.signup')}}</button>
                                </a>
                            </div>

                        @endif

                        <!--<div id="google_translate_element" class="hello"></div>-->
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option">
                            <div class="option-item">
                                <div class="search-box">
                                    <i class="flaticon-search-1"></i>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="flaticon-null-2" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style type="text/css">
    .hello {
        margin-left: 25px;
    }
    .goog-te-gadget .goog-te-combo {
        color: white;
        background-color: black;
        padding: 8px;
        margin-top: 13px;
    }
    .profile-button {
        font-size: 20px;
        padding: 5px 20px;
        background-color: #e10e6f;
    }
    .profile-button:hover {
        background-color: #e10e6f;
    }
    @media screen and (max-width: 1425px) {
        .zelda-nav {
            height: 390px;
        }
    }
</style>
