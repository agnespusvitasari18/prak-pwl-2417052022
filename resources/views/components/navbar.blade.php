<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/') }}">🚀 Prak PWL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">🏠 Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->is('matakuliah*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            📚 Mata Kuliah
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('/matakuliah') }}">Lihat Semua</a></li>
            <li><a class="dropdown-item" href="{{ route('matakuliah.create') }}">Tambah Baru</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->is('user*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            👥 User
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('/user') }}">Lihat Semua</a></li>
            <li><a class="dropdown-item" href="{{ route('user.create') }}">Tambah Baru</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
