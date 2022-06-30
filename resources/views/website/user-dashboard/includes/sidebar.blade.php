<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav" class="p-t-30">

            <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('user_dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">{{__('content.dashboard')}}</span></a></li>

            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark"  href="{{route('dashboard.profile')}}"aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">{{__('content.profile')}}</span></a></li>

            @if(Auth::user()->hasRole('player'))

            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark"  href="{{route('dashboard.fee')}}"aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">{{__('content.hiring_fee')}}</span></a></li>
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark"  href="{{route('dashboard.bankDetails')}}"aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">{{__('content.bankDetails')}}</span></a></li>

            {{--
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark"  href="{{route('dashboard.wallet')}}"aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">{{__('content.walltet')}}</span></a></li>
            --}}
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark"  href="{{route('dashboard.withdrawal')}}"aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">{{__('content.withdrawal')}}</span></a></li>

            @endif

            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark"  href="{{route('dashboard.hiring_request')}}"aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">{{__('content.hiring_req')}}</span></a></li>

            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark"  href="{{route('dashboard.payment')}}"aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">{{__('content.payments')}}</span></a></li>
            
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark"  href="{{route('web.logout')}}"aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">{{__('content.logout')}}</span></a></li>
        </ul>
    </nav>

</div>