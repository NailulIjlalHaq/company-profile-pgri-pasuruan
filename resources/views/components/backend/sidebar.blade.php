<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('backend/dist/img/logos.jpeg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PGRI Pasuruan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image mt-2">
                <img src="{{asset('img/avatar.png')}}" alt="user-image" class="img-circle elevation-2">
            </div>
            <div class="info">
                <p class="text-light d-block m-0">
                    {{auth()->user()->name}}
                    <small class="mt-0 text-teal d-block">{{auth()->user()->is_admin ? 'Administrator':'Penulis'}}</small>
                </p>
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline mt-3">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{(request()->segment(2) == 'dashboard') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kategori.index') }}" class="nav-link {{(request()->segment(2) == 'kategori') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>
                            Kategori
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pengumuman.index') }}" class="nav-link {{(request()->segment(2) == 'pengumuman') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                            Pengumuman
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('berita.index') }}" class="nav-link {{(request()->segment(2) == 'berita') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Berita
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('artikel.index') }}" class="nav-link {{(request()->segment(2) == 'artikel') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Artikel
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('galeri.index') }}" class="nav-link {{(request()->segment(2) == 'galeri') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Galeri
                        </p>
                    </a>
                </li>
                @if(auth()->user()->is_admin)
                <li class="nav-item {{(request()->segment(2) == 'profil') ? 'menu-is-opening menu-open' : ''}}">
                    <a href="#" class="nav-link {{(request()->segment(2) == 'profil') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Profil
                        </p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('profil.index', 2) }}" class="nav-link {{(request()->segment(3) == '2') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visi Misi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profil.index', 1) }}" class="nav-link {{(request()->segment(3) == '1') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sambutan Kepala PGRI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profil.index', 3) }}" class="nav-link {{(request()->segment(3) == '3') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Struktur</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profil.index', 4) }}" class="nav-link {{(request()->segment(3) == '4') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sejarah</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('user.index') }}" class="nav-link {{(request()->segment(2) == 'user') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('pengaturan.index') }}" class="nav-link {{(request()->segment(2) == 'pengaturan') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Pengaturan
                        </p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>