<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo float-right">
                            <a href="index.html"><img src="{{url('assets/images/logo.png')}}" style="width:80px; height:80px;" alt="Perpustakaan" srcset=""></a>
                        </div>
                        <div class="perpus float-left">
                            <small>Perpustakaan</small>
                            <p><small style="font-size:15px;">SMA Negeri 1 Losarang</small></p>
                        </div>

                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="{{url('admin/dashboard')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="{{url('admin/index')}}" class='sidebar-link'>
                                <i class="far fa-user"></i>
                                <span>Admin</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="{{url('guru/index')}}" class='sidebar-link'>
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span>Guru</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="{{url('siswa/index')}}" class='sidebar-link'>
                                <i class="fas fa-users"></i>
                                <span>Siswa</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="{{url('buku/index')}}" class='sidebar-link'>
                                <i class="fas fa-book"></i>
                                <span>Buku</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="{{url('kategori/index')}}" class='sidebar-link'>
                                <i class="far fa-list-alt"></i>
                                <span>Kategori</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="{{route('admin.kritik.index')}}" class='sidebar-link'>
                                <i class="far fa-list-alt"></i>
                                <span>Kritik & Saran</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fas fa-address-book"></i>
                                <span>Peminjaman</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{route('peminjaman.guru.index')}}">Peminjaman guru</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('peminjaman/siswa/index')}}">Peminjaman siswa</a>
                                </li>
                            </ul>
                         </li>
                         <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="far fa-address-book"></i>
                                <span>Pengembalian</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{url('pengembalian/guru/index')}}">Pengembalian guru</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('pengembalian/siswa/index')}}">Pengembalian siswa</a>
                                </li>
                            </ul>
                         </li>


                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fas fa-user-circle"></i>
                                <span>{{Session::get('nama_pustakawan')}}</span>
                            </a>
                            <ul class="submenu ">
                                {{-- <li class="submenu-item ">
                                    <a href="#"><img src="{{url('assets/images/logo.png')}}" style="width:80px; height:40px;" alt="Perpustakaan" srcset=""></a>
                                </li> --}}
                                <li class="submenu-item ">
                                    <a href="{{route('profil.admin.edit', Session::get('id'))}}">Profil</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('admin.update.password', Session::get('id'))}}">Ganti Password</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item ">
                            <a href="{{route('admin.logout')}}" class="btn mx-auto btn-primary mb-5 mt-5 text-center" style="heigth:250px">Log out</a>
                        </li>
                    </ul>

                </div>

            </div>
