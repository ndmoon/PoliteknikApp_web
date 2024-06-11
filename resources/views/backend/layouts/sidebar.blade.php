<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('backend')}}">
            <span data-feather="home" class="align-text-bottom"></span>
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('mahasiswa-backend')}}">
            <span data-feather="file" class="align-text-bottom"></span>
            Mahasiswa
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('dosen-backend')}}">
            <span data-feather="users" class="align-text-bottom"></span>
            Dosen
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('prodi-backend')}}">
            <span data-feather="users" class="align-text-bottom"></span>
            Prodi
          </a>
        </li>
        @can('admin')
        <li class="nav-item">
          <a class="nav-link" href="{{url('berita-backend')}}">
            <span data-feather="bar-chart" class="align-text-bottom"></span>
            Berita
          </a>
        </li>
        @endcan
        <li class="nav-item">
          <a class="nav-link" href="{{url('kategori-backend')}}">
            <span data-feather="layers" class="align-text-bottom"></span>
            Kategori
          </a>
        </li>
      </ul>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="{{url('user-backend')}}">
            <span data-feather="layers" class="align-text-bottom"></span>
            User
          </a>
        </li>
      </ul>
    </div>
  </nav>