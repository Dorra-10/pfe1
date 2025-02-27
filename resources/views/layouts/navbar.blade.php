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
                        <li><a href="#"> Ajouter utilisateur </a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-booking.html"> All Booking </a></li>
                        <li><a href="edit-booking.html"> Edit Booking </a></li>
                        <li><a href="add-booking.html"> Add Booking </a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-customer.html"> All Customers </a></li>
                        <li><a href="edit-customer.html"> Edit Customer </a></li>
                        <li><a href="add-customer.html"> Add Customer </a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-rooms.html">All Rooms </a></li>
                        <li><a href="edit-room.html"> Edit Room </a></li>
                        <li><a href="add-room.html"> Add Room </a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-staff.html">All Staff </a></li>
                        <li><a href="edit-staff.html"> Edit Staff </a></li>
                        <li><a href="add-staff.html"> Add Staff </a></li>
                    </ul>
                </li>

                <li><a href="pricing.html"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a></li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-share-alt"></i> <span> Apps </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="chat.html"><i class="fas fa-comments"></i> <span> Chat </span></a></li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-video camera"></i> <span> Calls </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="voice-call.html"> Voice Call </a></li>
                                <li><a href="video-call.html"> Video Call </a></li>
                                <li><a href="incoming-call.html"> Incoming Call </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-envelope"></i> <span> Email </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="compose.html">Compose Mail </a></li>
                                <li><a href="inbox.html"> Inbox </a></li>
                                <li><a href="mail-view.html"> Mail View </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a></li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-table"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="blog.html">Blog </a></li>
                        <li><a href="blog-details.html">Blog View </a></li>
                        <li><a href="add-blog.html">Add Blog </a></li>
                        <li><a href="edit-blog.html">Edit Blog </a></li>
                    </ul>
                </li>

                <li><a href="assets.html"><i class="fas fa-cube"></i> <span>Assets</span></a></li>
                <li><a href="activities.html"><i class="far fa-bell"></i> <span>Activities</span></a></li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="expense-reports.html">Expense Report </a></li>
                        <li><a href="invoice-reports.html">Invoice Report </a></li>
                    </ul>
                </li>

                <li><a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a></li>
            </ul>
        </div>
    </div>
</div>
