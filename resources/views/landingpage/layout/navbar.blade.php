<div class="container">
    <div class="row align-items-center justify-content-between d-flex">
      <div id="logo">
        <a href="index.html" class="text-white"><img src="{{url('assets/images/logo.png')}}" alt="" title="" style="height:50px; width:50px;"/>Perpustakaan SMA Negeri 1 Losarang</a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('user/buku/index')}}">Buku</a></li>
          @if (session('berhasil_login'))
          <li><a href="{{route('landing.histori.index')}}">History Peminjaman</a></li>
          <li class="menu-has-children"><a href="">Profil</a>
            <ul>
                @if (Session::get('is_user') == "1")
                    <li><a href="{{route('profil.user.edit',Session::get('id_user'))}}">Ganti Informasi</a></li>
                    <li><a href="{{route('user.update.password',Session::get('id_user'))}}">Ubah Password</a></li>
                    <li><a href="{{route('user.logout')}}">Log out</a></li>
                @else
                    <li><a href="{{route('profil.guru.edit',Session::get('id_guru'))}}">Ganti Informasi</a></li>
                    <li><a href="{{route('user.guru.update.password',Session::get('id_guru'))}}">Ubah Password</a></li>
                    <li><a href="{{route('user.logout.guru')}}">Log out</a></li>
                @endif

            </ul>
          </li>
          @else
          <li><a href="{{url('user/kritik/index')}}">Kritik & Saran</a></li>
          <li><a href="{{url('user/register')}}">Register</a></li>
          <li><a data-toggle="modal" data-target=".modal-login" href="#">Login</a></li>
          @endif
        </ul>
      </nav>
    </div>
</div>
