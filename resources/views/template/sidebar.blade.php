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
                            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
                            <li class="nav-item">
                                <a href="/cast" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Cast
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/film" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Film
                                    </p>
                                </a>
                            </li>
                            @auth
                            <li class="nav-item">
                                <a href="/genre" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Genre
                                    </p>
                                </a>
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