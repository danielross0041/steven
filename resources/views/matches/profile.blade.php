@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Matches</h2>
        </div>
    </div>
        <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Match Created! &nbsp;</strong>{{Session::get('success')}}
            </div>
        @endif 
        @if(Session::has('error'))
            <div class="alert alert-danger text-center" role="alert">
                <strong>Error! &nbsp;</strong>{{Session::get('error')}}
            </div>
        @endif 
            
         </div> 
    <div class="col-md-12">
        <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Player Profile info</h4>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"  value="{{$user->name}}" disabled>
                        </div>
                        <div class="col-sm-6">
                            <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email"  value="{{$user->email}}" disabled>
                        </div>
                    </div>
                    
                  </div>
                    
                </div>  
        </div>
    </div>
</div>
                  
@endsection
