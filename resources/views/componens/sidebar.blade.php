<div id="db-wrapper">
    <!-- navbar vertical -->
    <!-- Sidebar -->
    <nav class="navbar-vertical navbar">
        <div class="nav-scroller">
            <!-- Brand logo -->
            <a class="navbar-brand" href="./index.html">
                <img src="./assets/images/brand/logo/logo.svg" alt="" />
            </a>
            <!-- Navbar nav -->
            <ul class="navbar-nav flex-column" id="sideNavbar">
                <li class="nav-item">
                    <a class="nav-link has-arrow  active " href="{{ url('dashboard') }}">
                        <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                    </a>

                </li>


                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">Administrator</div>
                </li>


                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                        data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                        <i data-feather="user" class="nav-icon icon-xs me-2">
                        </i> Manajemen User
                    </a>

                    <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('super-admin') }}">
                                    Super Admin
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link has-arrow   " href="{{ url('petugas') }}">
                                    Petugas
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link has-arrow" href="{{ url('mahasiswa') }}">
                                    Mahasiswa
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Nav item -->
                <li class="nav-item">
                    <div class="navbar-heading">Managemen Barang</div>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="{{ url('barang') }}">
                        <i data-feather="package" class="nav-icon icon-xs me-2">
                        </i> Barang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="{{ url('peminjaman') }}">
                        <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                        </i> Peminjaman
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link has-arrow " href="{{ url('pengembalian') }}">
                        <i data-feather="check-square" class="nav-icon icon-xs me-2">
                        </i> Pengembalian
                    </a>
                </li>
            </ul>
        </div>
    </nav>
