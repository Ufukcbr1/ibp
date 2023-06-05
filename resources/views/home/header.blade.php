

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{asset('imports')}}/assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/" class="active">Home</a></li>
                        <li><a href="browse.html">Browse</a></li>
                        <li><a href="details.html">Details</a></li>
                        <li><a href="{{route('game_list')}}">Games</a></li>
                        @guest()
                        <li><a href="{{route('user_login')}}">Login</a></li>
                        <li><a href="{{route('register_user')}}">Register</a></li>
                        @endguest
                        <li><a href="streams.html">Streams</a></li>

                        @if(auth()->check() && auth()->user()->role == 'admin')
                        <li><a href="{{ route('admin_message') }}">Admin Panel</a></li>
                        @endif



                        @auth()

                            <li><a href="{{route('announcements_list')}}">Announcements</a></li>
                            <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                            <li><a href="{{route('logout_user')}}">Logout</a></li>
                        <li><a href="profile.html">{{Auth::user()->name}} <img src="{{asset('imports')}}/assets/images/profile-header.jpg" alt=""></a></li>

                        @endauth
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
