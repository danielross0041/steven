@extends('website.user-dashboard.layouts.app')
@section('content')
<div class="row">
    @if(Auth::user()->hasRole('user'))
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{__('content.req_sent')}}</h2>
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>{{__('content.name')}}</th>
                                <th>{{__('content.email')}}</th>
                                <th>{{__('content.reply')}}</th>
                                <th>{{__('content.timing')}}</th>
                                <th>{{__('content.status')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!$sents->isEmpty())
                            @foreach($sents as $sent)
                            <tr>
                                <td>{{$sent->player['name']}}</td>
                                <td>{{$sent->player['email']}}</td>
                                <td>{{$sent->reply}}</td>
                                <td>{{$sent->timing}}</td>
                                <td class = "{{$sent->status == 0 ? 'badge badge-danger' : 'badge badge-primary'}}" >{{$sent->status == 0? __('content.req_sent'):__('content.req_sent')}}</td>  
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @elseif(Auth::user()->hasRole('player'))
    
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{__('content.req_recvd')}}</h2>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>{{__('content.name')}}</th>
                                <th>{{__('content.email')}}</th>
                                <th>{{__('content.reply')}}</th>
                                <th>{{__('content.timing')}}</th>
                                <th>{{__('content.status')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!$recieveds->isEmpty())
                            @foreach($recieveds as $recieved)
                            <tr>
                                <td>{{$recieved->user['name']}}</td>
                                <td>{{$recieved->user['email']}}</td>
                                <td>{{$recieved->reply}}</td>
                                <td>{{$recieved->timing}}</td>
                                <td class = "{{$recieved->status == 0 ? 'badge badge-danger' : 'badge badge-primary'}}" >{{$recieved->status == 0? __('content.pending'):__('content.approaved')}}</td>  
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>
@endsection
