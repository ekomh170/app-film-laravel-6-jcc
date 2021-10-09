<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                    <img src="{{ asset('/adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset('/adminlte') }}/dist/img/avatar.png" class="img-circle elevation-2"
                                alt="User Image">
                        </div>
                        <div class="info">
                            @auth
                            <a href="#" class="d-block">{{ Auth::user()->name }} ({{ Auth::user()->profile->umur }})</a>
                            @endauth
                            @guest
                            <a href="/login" class="btn btn-outline-danger bg-danger">Login!!</a>
                            @endguest
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            @auth
                            <li class="nav-item">
                                <a href="/profile/show" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Data Lengkap Profile
                                    </p>
                                </a>
                            </li>
                            @endauth
                            @auth
                            <li class="nav-item">
                                <a href="/profile/" class="nav-link">
                                    <i class="nav-icon fas fa-cog"></i>
                                    <p>
                                        Edit Profile
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Data Pengguna Apps
                                    </p>
                                </a>
                            </li>
                            @endauth
                            <li class="nav-item">
                                <a href="/cast" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Data Menu Cast
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/peran" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Data Menu Peran
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/film" class="nav-link">
                                    <i class="nav-icon fas fa-film"></i>
                                    <p>
                                        Data Menu Film
                                    </p>
                                </a>
                            </li>
                            @auth
                            <li class="nav-item">
                                <a href="/genre" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Data Menu Genre
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Data Table
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/table" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Table</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/data-tables" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data-Table</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            @endauth
                        </ul>
                    </nav>

                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
        </div>
    </div>
</section>
