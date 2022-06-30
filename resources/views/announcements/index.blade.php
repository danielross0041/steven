@extends('layouts.app')
@section('content')
    
<h1 class="page-title">Announcements

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
    <a href="{{ route('announcements.create') }}" ><button style="color: grey;font-size:16px;border: 3px solid black" >  + Add New Announcement</button> </a>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Announcement</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="not">Action</th>
                    </tr>
  		
                <tbody>
                    @foreach($announcements as $announcement)
                    <tr>   
                        <td>{{$announcement->id}}</td>
                        <td>{{$announcement->announcement}}</td>
                        <td class = "{{$announcement->status == 1 ? 'badge badge-primary' : 'badge badge-danger'}}" >{{$announcement->status == 1 ? "Active" : " In Active"}}</td>  
                        <td>  
                            <a href="{{ route('announcements.edit',$announcement->id) }}">
                                <button type="button" class="btn btn-primary">
                               Edit
                                </button></a>
                                <form action="{{route('announcements.destroy', $announcement->id)}}" method="post">
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