@php
$currentRouteName = Route::currentRouteName();
@endphp
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <span class="brand-text font-weight-light">Edelstenen en Mineralen</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin Panel</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ $currentRouteName == 'home' ? 'active' : '' }}">
                        <i class="fa fa-solid fa-house-user"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('minerals.index') }}" class="nav-link {{ $currentRouteName == 'minerals.index' ? 'active' : '' }}">
                        <i class="fa fa-solid fa-list"></i>
                        <p>
                            Minerals
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('forms.index') }}" class="nav-link {{ $currentRouteName == 'forms.index' ? 'active' : '' }}">
                        <i class="fa fa-solid fa-list"></i>
                        <p>
                            Forms
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('stones.index') }}" class="nav-link {{ $currentRouteName == 'stones.index' ? 'active' : '' }}">
                        <i class="fa fa-solid fa-gem"></i>
                        <p>
                            Stones
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
