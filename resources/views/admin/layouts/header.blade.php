<header class="main-header" id="header">
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>

        <span class="page-title">dashboard</span>

        <div class="navbar-right ">

            <ul class="nav navbar-nav">
                <!-- Offcanvas -->
                
                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <img src="admin/images/user/user-xs-01.jpg" class="user-image rounded-circle"
                            alt="User Image" />
                        <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a class="dropdown-link-item" href="user-profile.html">
                                <i class="mdi mdi-account-outline"></i>
                                <span class="nav-text">My Profile</span>
                            </a>
                        </li>

                        <!-- Display user email -->
                        <li>
                            <a class="dropdown-link-item">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="nav-text">{{ Auth::user()->email }}</span>
                            </a>
                        </li>

                        <li class="dropdown-footer ml-5">
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="dropdown-link-item" style="border: none; background: none; padding: 0; color: inherit;">
                                    <i class="mdi mdi-logout"></i> Log Out
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
