<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> 
                    <a href="{{url('/dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
                    </a> 
                </li>
                <li class="list-divider"></li>

                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-user"></i> <span> Utilisateur </span> <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ url('users') }}"> Tous les Utilisateurs</a></li>
                        <li><a href="{{ route('adduser.create') }}"> Ajouter utilisateur </a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ url('allbooking') }}"> All Booking </a></li>
                        <li><a href="{{ url('editbooking') }}"> Edit Booking </a></li>
                        <li><a href="{{ url('addbooking') }}"> Add Booking </a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ url('allcustomers') }}"> All Customers </a></li>
                        <li><a href="{{ url('editcustomer') }}"> Edit Customer </a></li>
                        <li><a href="{{ url('addcustomer') }}"> Add Customer </a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ url('allroom') }}">All Rooms </a></li>
                        <li><a href="{{ url('editroom') }}"> Edit Room </a></li>
                        <li><a href="{{ url('addroom') }}"> Add Room </a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ url('allstaff') }}">All Staff </a></li>
                        <li><a href="{{ url('editstaff') }}"> Edit Staff </a></li>
                        <li><a href="{{ url('addstaff') }}"> Add Staff </a></li>
                    </ul>
                </li>

                <li><a href="{{ url('pricing') }}"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a></li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-share-alt"></i> <span> Apps </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ url('chat') }}"><i class="fas fa-comments"></i> <span> Chat </span></a></li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-video camera"></i> <span> Calls </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ url('voicecall') }}"> Voice Call </a></li>
                                <li><a href="{{ url('videocall') }}"> Video Call </a></li>
                                <li><a href="{{ url('incomingcall') }}"> Incoming Call </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-envelope"></i> <span> Email </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ url('compose') }}">Compose Mail </a></li>
                                <li><a href="{{ url('inbox') }}"> Inbox </a></li>
                                <li><a href="{{ url('mailview') }}"> Mail View </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                

                <li><a href="{{ url('calendrier') }}"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a></li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-table"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ url('blog') }}">Blog </a></li>
                        <li><a href="{{ url('blogview') }}">Blog View </a></li>
                        <li><a href="{{ url('addblog') }}">Add Blog </a></li>
                        <li><a href="{{ url('editblog') }}">Edit Blog </a></li>
                    </ul>
                </li>

                <li><a href="{{ url('assetslist') }}"><i class="fas fa-cube"></i> <span>Assets</span></a></li>
                <li><a href="{{ url('activities') }}"><i class="far fa-bell"></i> <span>Activities</span></a></li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ url('expensereport') }}">Expense Report </a></li>
                        <li><a href="{{ url('inoicereport') }}">Invoice Report </a></li>
                    </ul>
                </li>

                <li><a href="{{ url('companysetting') }}"><i class="fas fa-cog"></i> <span>Settings</span></a></li>
                
            </ul>
        </div>
    </div>
</div>
