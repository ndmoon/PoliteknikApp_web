<nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
  <div class="container">
  <a class="navbar-brand" href="/home">Akademik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @yield('navMhs')" href="{{ route('mahasiswa') }}">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('navDosen')" href="{{route('dosen')}}">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('navProdi')" href="{{route('prodi',['jurusan'=>'Teknologi Informasi', 'prodi'=> 'TRPL'])}}">Prodi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('navBerita')" href="{{route('berita')}}">Berita</a>
        </li>

      </ul>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @yield('login')" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('register')" href="/register">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>