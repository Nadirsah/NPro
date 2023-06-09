<style>
.btn-group:hover .dropdown-menu {
    display: block;
}
</style>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-success topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <!-- admin -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center text-white"
                        href="{{route('admin.dashboard')}}">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fa-solid fa-user-secret"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">Admin Panel</div>
                    </a>
                    <!-- settings -->
                    <a class="nav-link text-white" href="{{route('admin.ayarlar.index')}}">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <span>Ayarlar</span>
                    </a>

                    <a class="nav-link text-white" href="{{route('admin.techizatci.index')}}">
                        <i class="fa-solid fa-truck-field"></i>
                        <span>Təchizatçı</span>
                    </a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Mal Əməliyyatları
                        </button>
                        <ul class="dropdown-menu">
                            <li> <a class="nav-link text-dark dropdown-item" href="{{route('admin.mal_alis.index')}}">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                    <span>Mal alışı</span>
                                </a></li>
                        </ul>
                    </div>

                    <!-- Example single danger button -->
                   



                    <!-- profil -->
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name }}</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('admin.profil.index')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('admin.logout')}}" data-toggle="" data-target="">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Cixis
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid ">