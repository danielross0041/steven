@extends('website.user-dashboard.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{__('content.hiring_fee')}}</h2>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <form action="{{ route('dashboard.fee.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">{{__('content.add_hiring_fee')}}</h4>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.hiring_fee')}}</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="hiring_fee" id="hiring_fee" value="{{ Auth::user()->hiring_fee}}" placeholder="{{__('content.your_hiring_fee')}}" required />
                            @if ($errors->has('hiring_fee'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('hiring_fee') }}</strong>
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
                        <button type="submit" class="btn btn-primary">{{__('content.submit')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
