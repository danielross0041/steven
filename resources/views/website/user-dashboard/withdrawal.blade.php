@extends('website.user-dashboard.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form action="{{ route('dashboard.withdraw') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">{{__('content.withdraw_amount')}}</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="amount" id="amount" value="" max="{{$wallet->amount}}" min="30" required />
                            @if ($errors->has('amount'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('amount') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        
                        <button type="submit" class="btn btn-primary">{{__('content.withdraw')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{__('content.withdrawalReq')}}</h2>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>{{__('content.amount')}}</th>
                                <th>{{__('content.date')}}</th>
                                <th>{{__('content.date2')}}</th>
                                <th>{{__('content.status')}}</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @if(!$withdrawalRequest->isEmpty())
                            @foreach($withdrawalRequest as $val)
                            <tr>
                                <td>{{$val->amount}}</td>
                                <td>{{date('d-m-Y', strtotime($val->created_at))}}</td>
                                <td >{{ $val->created_at!=$val->updated_at? date('d-m-Y', strtotime($val->updated_at)) : 'Not Approved Yet'}}</td>
                                <td class = "{{$val->status == 0 || $val->status == 2 ? 'badge badge-danger' : 'badge badge-primary'}}" >{{$val->status == 0?__('content.pending'):$val->status == 2 ?  __('content.failed') : __('content.success')}}</td>  
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

</div>
@endsection
