@extends('layouts.app')
@section('content')
    
<h1 class="page-title">Admins

</h1>
<div class="ml-auto text-right">
</div> 
@if(Session::has('success'))
    <div class="alert alert-success text-center" role="alert">
        <strong>{{Session::get('success')}}</strong>
    </div>
@endif 
@if(Session::has('error'))
            <div class="alert alert-danger text-center" role="alert">
                <strong>Error! &nbsp;</strong>{{Session::get('error')}}
            </div>
        @endif 
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                    <tr>
                     <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                       
                    </tr>
  		
                <tbody>
                    @foreach($users as $user)
                    <tr>   
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>   
    </div>    
</div>
@endsection
@section('scripts')

<script>

    $(document).ready(function() {
        $('#zero_config').DataTable({
            paging: true,
           
        });

})
</script>
@stop