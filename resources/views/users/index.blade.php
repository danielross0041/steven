@extends('layouts.app')
@section('content')
    
<h1 class="page-title">Users

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
    <a href="{{ route('users.create') }}" ><button style="color: grey;font-size:16px;border: 3px solid black" >  + Add New User</button> </a> 
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                    <tr>
                     <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th class="not">Action</th>
                    </tr>
  		
                <tbody>
                    @foreach($users as $user)
                    <tr>   
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->contact_no}}</td>   
                        <td class = "{{$user->status == 1 ? 'badge badge-primary' : 'badge badge-danger'}}" >{{$user->status == 1 ? "Active" : " In Active"}}</td>  
                        <td>  
                            <a href="{{ route('users.edit',$user->id) }}">
                                <button type="button" class="btn btn-primary">
                               Edit
                                </button></a>
                                <form action="{{route('users.destroy', $user->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-light" type="submit">Delete</button>
                                </form>
                       
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