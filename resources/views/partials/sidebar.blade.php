<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('homepage')}}">
        <div class="sidebar-brand-icon ">
            <i href="{{route('homepage')}}"><img src="{{ asset('backend') }}/img/logo.png" alt="logo"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TukuMobil</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.dashboard.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Databases
    </div>


    <li class="nav-item">
        <a class="nav-link" href="{{route('mobils.index')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Mobil</span></a>
    </li>
<li class="nav-item">
        <a class="nav-link" href="{{route('admin.messages.index')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Daftar Pesan</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        SPK
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('kriteria.index')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Kriteria</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('alternatif.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Alternatif</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('hitung')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Hitung</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
