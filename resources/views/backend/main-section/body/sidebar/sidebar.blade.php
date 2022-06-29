<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">


                <li class="menu-title mt-2">User Module</li>
                <li>
                    <a href="#sidebarEcommerce" data-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> User Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('user.view')}}">User List</a>
                            </li>
                            <li>
                                <a href="{{route('user.add')}}">User Add</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarCrm" data-toggle="collapse">
                        <i data-feather="user"></i>
                        <span> Profile Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('profile.view')}}">My Profile</a>
                            </li>
                            <li>
                                <a href="{{route('change.password')}}">Change Password</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title mt-2">Channel Module</li>
                <li>
                    <a href="#sidebar" data-toggle="collapse">
                        <i class="fe-monitor"></i>
                        <span> Live Channel </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebar">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('live.view')}}">Channel List</a>
                            </li>
                            <li>
                                <a href="{{route('live.add')}}">Channel Add</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{route('client.view')}}" data-toggle="">
                        <i data-feather="info"></i>
                        <span> Client Complain </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('setting.view')}}" data-toggle="">
                        <i data-feather="settings"></i>
                        <span> Site Settings </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>