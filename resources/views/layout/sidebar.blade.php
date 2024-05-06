<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Faris Danish</p>
            <div class="dropdown" data-display="static">
              <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <small class="designation text-muted">Setiausaha</small>
              </a>
              <div class="dropdown-menu" aria-labelledby="UsersettingsDropdown">
                <a class="dropdown-item p-0">
                  <div class="d-flex border-bottom">
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                      <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                      <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                      <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item mt-2"> Manage Accounts </a>
                <a class="dropdown-item"> Change Password </a>
                <a class="dropdown-item"> Check Inbox </a>
                <a class="dropdown-item"> Sign Out </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">Basic UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="basic-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="">Accordions</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Buttons</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Badges</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Breadcrumbs</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Dropdowns</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Modals</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Progress Bar</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Pagination</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Tabs</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Typography</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Tooltips</a>
          </li>
        </ul>
      </div>
    </li> --}}
    <li class="nav-item ">
      <a class="nav-link" href="/">
        <i class="menu-icon mdi mdi-cards-variant"></i>
        <span class="menu-title">Login/Register</span>
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
  </ul>
</nav>