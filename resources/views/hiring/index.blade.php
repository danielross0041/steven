@extends('layouts.app')
@section('content')
    
<h1 class="page-title">Feedbacks

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
                        <th>ID</th>
                        <th>Requester</th>
                        <th>PLayer</th>
                        <th>Reply</th>
                        <th>Timing</th>
                        <th>Status</th>
                        <th class="not">Action</th>
                    </tr>
  		
                <tbody>
                    @foreach($hirings as $hiring)
                    <tr>   
                        <td>{{$hiring->id}}</td>
                        <td>{{$hiring->user['name']}}</td>
                        <td>Flinch</td>
                        <td>{{$hiring->reply}}</td>
                        <td>{{$hiring->timing}}</td>
                        <td class = "{{$hiring->status == 1 ? 'badge badge-primary' : 'badge badge-danger'}}" >{{$hiring->status == 1 ? "Active" : " In Active"}}</td>  
                        <td>  
                            <a href="{{ route('hiringRequest.edit',$hiring->id) }}">
                                <button type="button" class="btn btn-primary">
                                    Reply
                                </button>
                            </a>
                        </td>
                       
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