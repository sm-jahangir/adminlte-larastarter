<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('app.dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LaraStarter</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Jahangir Alam</a>
                <small class="text-white">{{Auth::user()->role->name}}</small>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('app.dashboard') }}"
                        class="nav-link {{Request::is('app/dashboard') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item  {{Request::is('app/roles*') ? 'menu-open' : ''}}">
                    <a href="{{ route('app.roles.index') }}"
                        class="nav-link  {{Request::is('app/roles*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Roles
                        </p>
                    </a>
                </li>
                <li class="nav-item  {{Request::is('app/users*') ? 'menu-open' : ''}}">
                    <a href="{{ route('app.users.index') }}"
                        class="nav-link  {{Request::is('app/users*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>
                <li class="nav-item  {{Request::is('app/pages*') ? 'menu-open' : ''}}">
                    <a href="{{ route('app.pages.index') }}"
                        class="nav-link  {{Request::is('app/pages*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Pages
                        </p>
                    </a>
                </li>
                <li class="nav-item  {{Request::is('app/category*') ? 'menu-open' : ''}}">
                    <a href="{{ route('app.category.index') }}"
                        class="nav-link  {{Request::is('app/category*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item  {{Request::is('app/tags*') ? 'menu-open' : ''}}">
                    <a href="{{ route('app.tags.index') }}"
                        class="nav-link  {{Request::is('app/tags*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Tags
                        </p>
                    </a>
                </li>
                <li class="nav-item  {{Request::is('app/brand*') ? 'menu-open' : ''}}">
                    <a href="{{ route('app.brand.index') }}"
                        class="nav-link  {{Request::is('app/brand*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Brand
                        </p>
                    </a>
                </li>
                <li class="nav-item  {{Request::is('app/ads*') ? 'menu-open' : ''}}">
                    <a href="{{ route('app.ads.index') }}"
                        class="nav-link  {{Request::is('app/ads*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Ads
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Catalogues
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="pages/charts/chartjs.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/chartjs.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Color</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/flot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Size</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>