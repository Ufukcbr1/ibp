
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{asset('imports/admin-assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('imports/admin-assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">

                @auth()
                  <div> {{Auth::user()->name}} </div>

                <div> <a href="{{route('logout_user')}}">Logout</a></div>



                @endauth
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{route('admin_category')}}" class="nav-link">

                        <p>
                            Category

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('user_list')}}" class="nav-link">

                        <p>
                            Users

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin_message')}}" class="nav-link">

                        <p>
                            Messages

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin_announcements')}}" class="nav-link">

                        <p>
                            Announcements
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('admin_game')}}" class="nav-link">
                        <p>
                            Games
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
