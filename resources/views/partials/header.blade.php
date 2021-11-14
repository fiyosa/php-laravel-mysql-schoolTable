<nav class="navbar navbar-expand-lg navbar-light bg-info bg-opacity-50">
  <div class="container-fluid">
    <a class="navbar-brand" disabled="disabled">SMAN 1 Cileunyi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title == 'home')?'active':'' }}" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title == 'about')?'active':'' }}" href="/tentang">Tentang</a> 
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ ($title == 'learning')?'active':'' }}" href="/pembelajaran">Pembelajaran</a>
        </li> --}}
        <li class="nav-item dropdown">
          <a class="nav-link {{ ($title == 'content')?'active':'' }} dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Berita & Acara 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/tenaga-kependidikan">Tenaga Kependidikan</a></li>
            <li><a class="dropdown-item" href="/tenaga-kependidikan">Humas</a></li>
            <li><a class="dropdown-item" href="/tenaga-kependidikan">Kurikulum</a></li>
            <li><a class="dropdown-item" href="/tenaga-kependidikan">Kesiswaan</a></li>
            <li><a class="dropdown-item" href="/tenaga-kependidikan">Sarana & Prasarana</a></li>
          </ul>
        </li>
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-bookmark-plus"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'login')?'active':'' }}" href="/login"><button type="button" class="btn btn-primary btn-sm align-middle">Login</button></a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
