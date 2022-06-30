@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                    <tr>
                        <th>Player ID</th>
                        <th>PLayer Name</th>
                        <th>Bank Name</th>
                        <th>Account Title</th>
                        <th>Account Number</th>
                    </tr>
                <tbody>
                    @foreach($bank_details as $val)
                    <tr>   
                        <td>{{$val->user['id']}}</td>
                        <td>{{$val->user['name']}}</td>
                        <td>{{$val->bank_name}}</td>
                        <td>{{$val->account_title}}</td>
                        <td>{{$val->account_number}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>   
    </div>    
</div>
@endsection
