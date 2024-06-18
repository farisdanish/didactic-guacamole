<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      @auth
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Faris Danish</p>
            <small class="designation text-muted">@yield('jabatan',' ')</small>
          </div>
        </div>
      </div>
      @endauth
    </li>
    @auth
    <li class="nav-item">
      <a class="nav-link" href="/">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Homepage</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/borang_permohonan">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Borang Permohonan</span> {{-- <span class="badge badge-primary ml-1">New</span> --}}
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/senarai_permohonan">
        <i class="menu-icon mdi mdi-format-list-bulleted-type"></i>
        <span class="menu-title">Senarai Permohonan</span> {{-- <span class="badge badge-primary ml-1">New</span> --}}
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('notifications') }}">
        <i class="menu-icon mdi mdi-bell-outline"></i>
        <span class="menu-title">Notifications</span>
      </a>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link" href="/">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="/login">
        <i class="menu-icon mdi mdi-cards-variant"></i>
        <span class="menu-title">Login/Register</span>
      </a>
    </li>
    @endauth
  </ul>
</nav>