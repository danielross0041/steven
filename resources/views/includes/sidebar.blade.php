<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav" class="p-t-30">
            <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('welcome')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Users</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('users.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> List </span></a></li>
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('users.create') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Create </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Games</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('games.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> List </span></a></li>
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('games.create') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Create </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Matches</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('matches.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> List </span></a></li>
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('matches.create') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Create </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Report</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('reports.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Matches </span></a></li>
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('game_report') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Games </span></a></li>
                        
                    </ul>
                </li>
                <!-- <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('reports.index')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Report</span></a></li> -->
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Countries</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('countries.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> List </span></a></li>
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('countries.create') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Create </span></a></li>
                    </ul>
                </li>
               
                <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.all')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Admins</span></a></li>
                <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('setting.all')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Site Settings</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Announcements</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('announcements.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> List </span></a></li>
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('announcements.create') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Create </span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Feedbacks</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('feedbacks.index') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> List </span></a></li>
                        <li class="sidebar-item" style="background-color: #786e0047;"><a href="{{ route('feedbacks.create') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Create </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('hiringRequest.index')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Hiring Request</span></a></li>

                <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.withdrawal.request')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Withdrawal Request</span></a></li>

                <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.player.bank_details')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Player Bank Details</span></a></li>

                <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.chat')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Chat</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark"  href="{{ route('admin.logout') }}"aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Logout</span></a></li>
        </ul>
    </nav>

</div>