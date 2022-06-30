@extends('website.user-dashboard.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{__('content.bankDetails')}}</h2>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <form action="{{ route('dashboard.bank_details.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <h4 class="card-title">{{__('content.add_bankDetails')}}</h4>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.bank_name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="bank_name" id="bank_name" value="{{ ($bank_details == null?'':$bank_details->bank_name) }}" placeholder="{{__('content.your_bank_name')}}" required />
                            @if ($errors->has('bank_name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('bank_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.account_title')}}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="account_title" id="account_title" value="{{ ($bank_details == null?'':$bank_details->account_title) }}" placeholder="{{__('content.account_title')}}" required />
                            @if ($errors->has('account_title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('account_title') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.account_number')}}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="account_number" id="account_number" value="{{ ($bank_details == null?'':$bank_details->account_number) }}" placeholder="{{__('content.account_number')}}" required />
                            @if ($errors->has('account_number'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('account_number') }}</strong>
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
