<!DOCTYPE html>

@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-md-flex align-items-center">
                    <div>
                        <h4 class="card-title">Site Analysis</h4>
                        <h5 class="card-subtitle">Overview of Latest Month</h5>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-9">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-line-chart" ></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                      
                            <div class="col-6">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-user m-b-5 font-16"></i>
                                    <h5 class="m-b-0 m-t-5">{{$users}}</h5>
                                    <small class="font-light"> Total Users   </small>
                                </div>
                            </div>
                                <div class="col-6">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-plus m-b-5 font-16"></i>
                                    <h5 class="m-b-0 m-t-5">{{$matches}}</h5>
                                    <small class="font-light">Total Matches</small>
                                </div>
                            </div>
                            <div class="col-6 m-t-15">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-table m-b-5 font-16"></i>
                                    <h5 class="m-b-0 m-t-5">9</h5>
                                    <small class="font-light">Recieved Payments</small>
                                </div>
                            </div>
                            <div class="col-6 m-t-15">
                                <div class="bg-dark p-10 text-white text-center">
                                    <i class="fa fa-table m-b-5 font-16"></i>
                                    <h5 class="m-b-0 m-t-5">1</h5>
                                    <small class="font-light">Total Withdrawal</small>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <!-- column -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Sales chart -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Recent comment and chats -->
<!-- ============================================================== -->

    <!-- column -->

   
</div>
<!-- ============================================================== -->
<!-- Recent comment and chats -->
<!-- ============================================================== -->


@endsection 

































