<div style="margin-top: 200px"></div>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
  <p class="align-top col-md-4 mb-0 text-muted">&copy; 2021 fiyosa</p>

  {{-- <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
  </a> --}}

  {{-- <ul class="nav col-md-4 justify-content-end">
    <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Beranda</a></li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
  </ul> --}}
</footer>