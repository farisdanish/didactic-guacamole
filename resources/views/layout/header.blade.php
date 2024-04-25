<nav class="navbar navbar-info default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="{{ url('/') }}" style="font-size: 22px;">
      <b>eJKDB</b> </a>
    <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}" style="font-size: 15px;">
      <b>eJKDB</b> </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler me-auto" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-left header-links">
      <li class="nav-item d-none d-xl-flex">
        
      </li>
      <li class="nav-item d-none d-xl-flex">
        
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        
      </li>
      <li class="nav-item dropdown">
        
      </li>
      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="profile-text d-none d-md-inline-flex">Faris Danish</span>
          <img class="img-xs rounded-circle" src="{{ url('assets/images/faces/face8.jpg') }}" alt="Profile image"> </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <a class="dropdown-item p-0">
            <div class="d-flex border-bottom w-100 justify-content-center">
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
          <a class="dropdown-item mt-2"> Edit Profile </a>
          <a class="dropdown-item"> Change Password </a>
          <a class="dropdown-item"> Check Inbox </a>
          <a class="dropdown-item"> Sign Out </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu icon-menu"></span>
    </button>
  </div>
</nav>