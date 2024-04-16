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
                <small class="designation text-muted">Intern</small>
                <span class="status-indicator online"></span>
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
        <button class="btn btn-success btn-block">New Project <i class="mdi mdi-plus"></i>
        </button>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
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
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#advanced-ui" aria-expanded="" aria-controls="advanced-ui">
        <i class="menu-icon mdi mdi-cards-variant"></i>
        <span class="menu-title">Advanced UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="advanced-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="">Dragula</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Clipboard</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Context Menu</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Popups</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Sliders</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Carousel</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Loaders</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Tree View</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#forms" aria-expanded="" aria-controls="forms">
        <i class="menu-icon mdi mdi-format-list-bulleted"></i>
        <span class="menu-title">Forms</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="forms">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="">Basic Elements</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Advanced Elements</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/forms/form-validation') }}">Validation</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/forms/step-wizard') }}">Step Wizard</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/forms/wizard') }}">Wizard</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="" aria-controls="editors">
        <i class="menu-icon mdi mdi-code-tags"></i>
        <span class="menu-title">Editors</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="editors">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/editors/text-editor') }}">Text Editor</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/editors/code-editor') }}">Code Editor</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="" aria-controls="charts">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">Charts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/charts/chartjs') }}">Chart Js</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/charts/morris') }}">Morris</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/charts/flot') }}">Flot</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/charts/google-charts') }}">Google Charts</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/charts/sparklinejs') }}">Sparkline Js</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/charts/c3-charts') }}">C3 Charts</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/charts/chartist') }}">Chartist</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/charts/justgage') }}">JustGage</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="" aria-controls="tables">
        <i class="menu-icon mdi mdi-table-large"></i>
        <span class="menu-title">Tables</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="">Basic Table</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Data Table</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Js-grid</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">Sortable Table</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('notifications') }}">
        <i class="menu-icon mdi mdi-bell-outline"></i>
        <span class="menu-title">Notifications</span>
      </a>
    </li>
        <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="" aria-controls="icons">
        <i class="menu-icon mdi mdi-emoticon-happy-outline"></i>
        <span class="menu-title">Icons</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/icons/material') }}">Material</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/icons/flag-icons') }}">Flag Icons</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/icons/font-awesome') }}">Font Awesome</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/icons/simple-line-icons') }}">Simple Line Icons</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/icons/themify') }}">Themify</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="" aria-controls="maps">
        <i class="menu-icon mdi mdi-map-marker-outline"></i>
        <span class="menu-title">Maps</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="maps">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/maps/vector-map') }}">Vector Map</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/maps/mapael') }}">Mapael</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/maps/google-maps') }}">Google Maps</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/user-pages/login-2') }}">Login 2</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/user-pages/multi-step-login') }}">Multi Step Logins</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/user-pages/register-2') }}">Register 2</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#error-pages" aria-expanded="" aria-controls="error-pages">
        <i class="menu-icon mdi mdi-information-outline"></i>
        <span class="menu-title">Error Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="error-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/error-pages/error-404') }}">404</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/error-pages/error-500') }}">500</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="" aria-controls="general-pages">
        <i class="menu-icon mdi mdi-bookmark-outline"></i>
        <span class="menu-title">General Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/general-pages/blank-page') }}">Blank Page</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/general-pages/landing-page') }}">Landing Page</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/general-pages/profile') }}">Profile</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/general-pages/email-templates') }}">Email Templates</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/general-pages/faq') }}">FAQ</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/general-pages/faq-2') }}">FAQ 2</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/general-pages/news-grid') }}">News Grid</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/general-pages/timeline') }}">Timeline</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/general-pages/search-results') }}">Search Results</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/general-pages/portfolio') }}">Portfolio</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/general-pages/user-listing') }}">User Listing</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#ecommerce" aria-expanded="" aria-controls="ecommerce">
        <i class="menu-icon mdi mdi-cart-outline"></i>
        <span class="menu-title">Ecommerce</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="ecommerce">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/ecommerce/invoice') }}">Invoice</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/ecommerce/invoice-2') }}">Invoice 2</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/ecommerce/pricing') }}">Pricing</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/ecommerce/product-catalogue') }}">Product Catalogue</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/ecommerce/project-list') }}">Project List</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/ecommerce/orders') }}">Orders</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://www.bootstrapdash.com/demo/star-laravel-pro/documentation/documentation.html" target="_blank">
        <i class="menu-icon mdi mdi-file-outline"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li>
  </ul>
</nav>