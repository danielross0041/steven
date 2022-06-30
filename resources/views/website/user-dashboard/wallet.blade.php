@extends('website.user-dashboard.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{__('content.walltet')}}</h2>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body" style="text-align:center;">
                <h4>{{$wallet}}</h4>
            </div>
        </div>
    </div>
    
    

</div>
@endsection
