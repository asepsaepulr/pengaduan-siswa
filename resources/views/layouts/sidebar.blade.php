<aside class="main-sidebar sidebar-light-primary   elevation-4">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          @role('admin')
          <div class="profile-image">
            <img class="img-xs rounded-circle" src="{{ asset('assets/img/gambar/login1.png')  }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{Auth::user()->name}}</p>
            <div>
              <small class="designation text-muted" style="text-transform: uppercase;letter-spacing: 1px;">{{ Auth::user()->level }} ADMIN</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    @endrole
    @role('member')
    <div class="profile-image">
      <img class="img-xs rounded-circle" src="{{ asset('assets/img/gambar/'.Auth::user()->datasiswa->gambar)  }}" alt="profile image">
    </div>
    <div class="text-wrapper">
      <p class="profile-name">{{Auth::user()->name}}</p>
      <div>
        <small class="designation text-muted" style="text-transform: uppercase;letter-spacing: 1px;">{{ Auth::user()->level }} USER</small>
        <span class="status-indicator online"></span>
      </div>
    </div>
  </div>
</div>
</li>
@endrole
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/home">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-content-copy"></i>
          <span class="menu-title">Data Sekolah</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a href="{{ route('kategori.index') }}" class="nav-link" >Jurusan</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('kelas.index') }}" class="nav-link">Kelas</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('datasiswa.index') }}" class="nav-link">Data Siswa</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="menu-icon fa fa-bullhorn"></i>
          <span class="menu-title">Laporan</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a href="{{ route('pertanyaan.index') }}" class="nav-link">Pertanyaan</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('jawaban.index') }}" class="nav-link">Jawaban</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
</div>
</ul>
</aside>