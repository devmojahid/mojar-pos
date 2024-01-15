<aside class="main-sidebar main-sidebar-custom sidebar-light-primary main-sidebarcustom-class">
    <!-- Sidebar -->
    <a href="../../index3.html" class="brand-link">
        <img src="backend/images/logo/logo.svg" class="brand-image">
        <img src="backend/images/logo/logo-2.png" class="brand-image-2 d-none">
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">Dashboard Area</li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">User Managemnt</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ route("users") }}" class="nav-link">
                                <i class="fas fa-angle-right"></i>
                                <p>
                                    User List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-angle-right"></i>
                                <p>
                                    Roles & Permission
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route("media") }}" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Media Library
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</aside>
