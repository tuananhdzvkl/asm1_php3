<style>
    .img-profile {
        width: 40px;
        /* Adjust the width as needed */
        height: 40px;
        /* Adjust the height as needed */
        object-fit: cover;
        /* Ensures the image covers the set width and height */
    }

    .d-flex {
        display: flex;
        align-items: center;
        /* Align items vertically in the center */
    }

    .ml-2 {
        margin-left: 0.5rem;
        /* Adjust spacing between the image and text */
    }

    .dropdown-menu {
        padding: 6px 10px !important;
        font-size: 16px;
        color: #fff;
    }

    .dropdown-item {
        color: #333;
        /* Text color for dropdown items */
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
        /* Background color on hover */
        color: #000;
        /* Text color on hover */
    }

    .dropdown-menu {
        color: #000;
        /* Adjust text color */
    }
</style>

<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header">
            <div class="header-bottom header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{ route('user.home') }}"><img src="{{ asset('admin_assets/img/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation" class="d-flex align-items-center">
                                            <li><a href="{{ route('user.home') }}">Home</a></li>
                                            <li><a href="{{ route('user.package') }}">Packages</a></li>
                                            <li><a href="{{ route('user.help') }}">Help</a></li>
                                            <li><a href="#">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('user.blog') }}">Blog</a></li>
                                                    <li><a href="{{ route('user.blog_details') }}">Blog Details</a></li>
                                                    <li><a href="{{ route('user.elements') }}">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('user.contact') }}">Contact</a></li>
                                            <!-- Button -->
                                            @guest
                                                @if (Route::has('register'))
                                                    <li class="button-header margin-left"><a href="{{ route('register') }}" class="btn">Sign Up</a></li>
                                                @endif
                                                @if (Route::has('login'))
                                                    <li class="button-header"><a href="{{ route('login') }}" class="btn3">Sign In</a></li>
                                                @endif
                                            @else
                                                <!-- Nav Item - User Information -->
                                                <li class="nav-item dropdown no-arrow">
                                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <img class="img-profile rounded-circle" src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : 'https://startbootstrap.github.io/startbootstrap-sb-admin-2/img/undraw_profile.svg' }}">
                                                            <div class="ml-2">
                                                                <span class="d-block text-gray-600 small">{{ auth()->user()->name }}</span>
                                                                <small>{{ auth()->user()->level }}</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <!-- Dropdown - User Information -->
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                                        </a>
                                                        @if(auth()->user()->level === 'admin')
                                                        <a class="dropdown-item" href="{{ route('dashboard') }}">
                                                            <i class="fas fa-user-shield fa-sm fa-fw mr-2 text-gray-400"></i> Admin
                                                        </a>
                                                        @endif
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                                        </a>
                                                    </div>
                                                    
                                                </li>
                                            @endguest
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
