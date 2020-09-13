<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                <a href="{{url('/admin/home')}}">
                        <i class="fas fa-home" style="margin-right:10px;"></i> <span>Dashboard</span></i>
                    </a>
                </li>
                {{-- for permission --}}
                @can('permission-access')
                    <li class="treeview">
                        <a href="#">
                            <i class="fab fa-product-hunt" style="margin-right:10px;"></i> <span>Permission</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li style="margin-left:20px;"><a href="{{route('permission_component.index')}}">Permission Components</a></li>
                            <li style="margin-left:20px;"><a href="{{route('permission.index')}}">Permissions</a></li>
                        </ul>
                    </li>
                @endcan
                {{-- end of permission session --}}

                {{-- start of role session --}}
                @can('role-access')
                    <li class="treeview">
                        <a href="#">
                            <i class="fas fa-registered" style="margin-right:10px;"></i> <span>Role</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li style="margin-left:20px;"><a href="{{route('role.index')}}">View Roles</a></li>
                            <li style="margin-left:20px;"><a href="{{route('role.create')}}">Add Role</a></li>
                        </ul>
                    </li>
                @endcan
                {{-- end of roles --}}

                {{-- start of user management --}}
                @can('user-access')
                    <li class="treeview">
                        <a href="#">
                            <i class="fas fa-users" style="margin-right: 8px;"></i> <span>User Management</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li style="margin-left:20px;"><a href="{{route('user.index')}}">View Users</a></li>
                            <li style="margin-left:20px;"><a href="{{route('user.create')}}">Add Users</a></li>
                        </ul>
                    </li>
                @endcan
                {{-- end of user  management --}}

                {{-- start of category --}}
                @can('category-access')
                    <li class="treeview">
                        <a href="#">
                            <i class="fab fa-cuttlefish" style="margin-right:10px;"></i> <span>Category</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li style="margin-left:20px;"><a href="{{route('category.index')}}">View Category</a></li>
                            <li style="margin-left:20px;"><a href="{{route('category.create')}}">Add Category</a></li>
                        </ul>
                    </li>
                @endcan
                {{-- end of category --}}

                {{-- start of animal management --}}
                @can('animal-access')
                    <li class="treeview">
                        <a href="#">
                            <i class="fas fa-horse" style="margin-right:10px;"></i> <span>Animal Management</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#">
                                    Manage Mammals
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li style="margin-left:20px;"><a href="{{route('mammal.index')}}">View Mammals</a></li>
                                    <li style="margin-left:20px;"><a href="{{route('mammal.create')}}">Add Mammals</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#">
                                    Manage Birds
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li style="margin-left:20px;"><a href="{{route('bird.index')}}">View Birds</a></li>
                                    <li style="margin-left:20px;"><a href="{{route('bird.create')}}">Add Birds</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#">
                                    Manage Fish
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li style="margin-left:20px;"><a href="{{route('fish.index')}}">View Fish</a></li>
                                    <li style="margin-left:20px;"><a href="{{route('fish.create')}}">Add Fish</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#">
                                    Reptiles-Amphibians
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li style="margin-left:20px;"><a href="{{route('reptileAmphibian.index')}}">View Reptiles-Amphibians</a></li>
                                    <li style="margin-left:20px;"><a href="{{route('reptileAmphibian.create')}}">Add Reptiles-Amphibians</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                @endcan
                {{-- end of animal management --}}

                {{-- route to view the sponsor requests --}}
                @can('sponsor-access')
                    <li>
                        <a href="{{route('viewSponsors')}}">
                            <i class="fas fa-donate" style="margin-right:10px;"></i> <span>View Sponsor Requests</span></i>
                        </a>
                    </li>
                @endcan

                {{-- route to view the ticket bookings --}}
                @can('ticket-access')
                    <li>
                        <a href="{{route('viewTickets')}}">
                            <i class="fa fa-ticket" style="margin-right:10px;"></i> <span>View Ticket Booking</span></i>
                        </a>
                    </li>
                @endcan

                {{-- view enquiries --}}
                @can('user-access')
                    <li>
                        <a href="{{route('enquiry.index')}}">
                            <i class="fas fa-envelope" style="margin-right:10px;"></i> <span>View Enquiries</span></i>
                        </a>
                    </li>
                @endcan
                {{-- end of enquiries --}}

            </ul>
    </section>
    <!-- /.sidebar -->
</aside>
