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
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Approval</th>
                    </tr>
                <tbody>
                    @foreach($withdrawal_request as $val)
                    <tr>   
                        <td>{{$val->user['id']}}</td>
                        <td>{{$val->user['name']}}</td>
                        <td>{{$val->amount}}</td>
                        <td>{{$val->created_at}}</td>
                        <td>
                            <select name="status" id="status" onchange="myFunction('{{$val->id}}');">
                                <option value="0" {{$val->status==0? 'selected': ''}}>Pending</option>
                                <option value="1" {{$val->status==1? 'selected': ''}}>Approved</option>
                                <option value="2" {{$val->status==2? 'selected': ''}}>Rejected</option>
                            </select>
                            <!-- <a href="{{ route('admin.withdrawal.approve',$val->id) }}">
                                <button type="button" class="btn btn-primary">
                                    Approve
                                </button>
                            </a> -->
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
        
        $.ajaxSetup({
    
    headers: {
    
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    
    }
    
    });
})

function myFunction(id){
    var select = document.getElementById('status');
				var option = select.options[select.selectedIndex];

              
    $.ajax({
            type: 'GET',
            url: "{{route('admin.withdrawal.approve')}}",
            data: {
                status:option.value,
                id:id, 
            },
            dataType: 'json',
            success: function (data) {
                if(data==0){
                    alert('something went wrong');
                }
                else {
                    alert('success');
                   
                }
            },
            error: function (data) {
                alert(data);
            }
        });


}


</script>
@endsection
