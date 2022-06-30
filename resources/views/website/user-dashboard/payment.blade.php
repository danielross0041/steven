@extends('website.user-dashboard.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{__('content.payments')}}</h2>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>{{__('content.player_name')}}</th>
                                <th>{{__('content.player_email')}}</th>
                                <th>{{__('content.amount')}}</th>
                                <th>{{__('content.timing')}}</th>
                                <th>{{__('content.status')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payments as $payment)
                            <tr>
                                <td>{{$payment->hiring->player['name']}}</td>
                                <td>{{$payment->hiring->player['email']}}</td>
                                <td>${{$payment->amount}}</td>
                                <td>${{$payment->created_at}}</td>
                                <td class = "{{$payment->status == 0 ? 'badge badge-danger' : 'badge badge-primary'}}" >{{$payment->status == 0?__('content.failed'):__('content.success')}}</td>  
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    

</div>
@endsection
