{{-- BUAT ROLE --}}
@php
    $user_role = auth()->user()->role;
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/home" class="brand-link">
        <img src="dist/img/bootstrap-5-logo-icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Praktikum Web-B</span>
    </a>
    <div class="sidebar" id="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-white">{{ auth()->user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                <li class="nav-item {{ request()->is('user') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('user') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/user" class="nav-link {{ request()->is('user*') ? 'active' : '' }}">
                                {{-- &emsp; --}}
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Pengguna</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                {{-- &emsp; --}}
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index3.html" class="nav-link">
                                {{-- &emsp; --}}
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 3</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/home" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Home
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Menu 3
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/boxed.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 3</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 4</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 5</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 6</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-footer.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 7</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 8</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Menu 4
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/charts/chartjs.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/flot.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/inline.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 3</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/uplot.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 4</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Menu 5
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/general.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/buttons.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 3</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/sliders.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 4</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/modals.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 5</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/navbar.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 6</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/timeline.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 7</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/ribbons.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 8</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Menu 6
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/forms/general.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/advanced.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 3</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/validation.html" class="nav-link">
                                <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                <p>Submenu 4</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if ($user_role == 'owner')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Menu 7
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/tables/simple.html" class="nav-link">
                                    <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                    <p>Submenu 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/data.html" class="nav-link">
                                    <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                    <p>Submenu 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/tables/jsgrid.html" class="nav-link">
                                    <i class="fa fa-minus fa-beat-fade fa-xl nav-icon"></i>
                                    <p>Submenu 3</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
