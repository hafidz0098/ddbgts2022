<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Welcome</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Post
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
        <a class="nav-link " href="/dashboard/posts">
            <i class="fas fa-book"></i>
            <span>My Posts</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    @can('admin')
    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>
    

    <li class="nav-item {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/categories">
            <i class="fas fa-border-all"></i>
            <span>Post Categories</span></a>
    </li>

    <li class="nav-item {{ Request::is('dashboard/peserta-pending*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-users"></i>
            <span>Peserta</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/dashboard/peserta-pending">Peserta Pending</a>
                <a class="collapse-item" href="/dashboard/peserta-sukses">Peserta Sukses</a>
                <a class="collapse-item" href="/dashboard/peserta-gagal">Peserta Gagal</a>
            </div>
        </div>
    </li>

    {{-- <li class="nav-item {{ Request::is('dashboard/peserta-pending*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/peserta-pending">
            <i class="fas fa-user-clock"></i>
            <span>Peserta Pending</span></a>
    </li>

    <li class="nav-item {{ Request::is('dashboard/peserta-sukses*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/peserta-sukses">
            <i class="fas fa-user-plus"></i>
            <span>Peserta Sukses</span></a>
    </li>

    <li class="nav-item {{ Request::is('dashboard/peserta-gagal*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/peserta-gagal">
            <i class="fas fa-user-times"></i>
            <span>Peserta Gagal</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    @endcan

    

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->