@extends('website.user-dashboard.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{__('content.profile')}}</h2>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <form action="{{ route('dashboard.profile.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">{{__('content.profile')}}</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" placeholder="{{__('content.namePlaceholder')}}" required />
                            @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.age')}}</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="age" id="age" value="{{ $user->age}}" placeholder="{{__('content.agePlaceholder')}}" required />
                            @if ($errors->has('age'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('age') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.language')}}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="language" id="language" value="{{ $user->language}}" placeholder="{{__('content.languagePlaceholder')}}" required />
                            @if ($errors->has('language'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('language') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.nick')}}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nick" id="nick" value="{{ $user->nick}}" placeholder="{{__('content.nickPlaceholder')}}" required />
                            @if ($errors->has('nick'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('nick') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.contact_no')}}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="contact_no" id="contact_no" value="{{ $user->contact_no}}" placeholder="{{__('content.contactInfoPlaceholder')}}" required />
                            @if ($errors->has('contact_no'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('contact_no') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.address')}}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" id="address" value="{{ $user->address}}" placeholder="{{__('content.addressPlaceholder')}}" required />
                            @if ($errors->has('address'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.gender')}}</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="gender"  id="gender">
                                <option value="MALE" {{ $user->gender == "MALE" ? "selected":""}}>Male</option>
                                <option value="FEMALE" {{ $user->gender == "FEMALE" ? "selected":""}}>Female</option>
                                <option value="OTHER" {{ $user->gender == "OTHER" ? "selected":""}}>Other</option>
                             </select>   
                            @if ($errors->has('gender'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.image')}}</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="image" id="image" >
                            @if ($errors->has('age'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('age') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <a href="{{route('user_dashboard')}}">
                            <button type="button" class="btn btn-danger">
                                {{__('content.back')}}
                            </button>
                        </a>
                        <button type="submit" class="btn btn-primary">{{__('content.update')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
