<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <a href="{{ url('/') }}/assets/images/logo.jpg" class="logo">
            <span>
                <img src="{{ url('/') }}/assets/images/logo.jpg" alt="logo-small" class="logo-sm"
                    style="width: 250px; height: auto;" />
            </span>
        </a>
    </div>
    <!--end logo-->
    <!-- Navbar -->
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ url('/') }}/assets/images/users/user.png" alt="profile-user"
                        class="rounded-circle" />
                    <span class="ml-1 nav-user-name hidden-sm">{{ auth()->user()->username }}<i
                            class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="{{ url('login') }}"><i class="ti-power-off text-muted mr-2"></i>
                        Logout</a>
                </div>
            </li>
        </ul>
        <!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>

                <button class="nav-link button-menu-mobile waves-effect waves-light">
                    <i class="ti-menu nav-icon"></i>
                </button>

            </li>
        </ul>
    </nav>
    <!-- end navbar-->
</div>
