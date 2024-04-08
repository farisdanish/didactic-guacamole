<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Richard V.Welsh</p>
            <div class="dropdown" data-display="static">
              <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <small class="designation text-muted">Manager</small>
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
    <li class="nav-item {{ active_class(['/']) }}">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['basic-ui/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">Basic UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['basic-ui/*']) }}" id="basic-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['basic-ui/accordions']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/accordions') }}">Accordions</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/buttons']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/buttons') }}">Buttons</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/badges']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/badges') }}">Badges</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/breadcrumbs']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/breadcrumbs') }}">Breadcrumbs</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}">Dropdowns</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/modals']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/modals') }}">Modals</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/progress-bar']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/progress-bar') }}">Progress Bar</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/pagination']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/pagination') }}">Pagination</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/tabs']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/tabs') }}">Tabs</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/typography']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/typography') }}">Typography</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/tooltips']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/tooltips') }}">Tooltips</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['advanced-ui/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#advanced-ui" aria-expanded="{{ is_active_route(['advanced-ui/*']) }}" aria-controls="advanced-ui">
        <i class="menu-icon mdi mdi-cards-variant"></i>
        <span class="menu-title">Advanced UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['advanced-ui/*']) }}" id="advanced-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['advanced-ui/dragula']) }}">
            <a class="nav-link" href="{{ url('/advanced-ui/dragula') }}">Dragula</a>
          </li>
          <li class="nav-item {{ active_class(['advanced-ui/clipboard']) }}">
            <a class="nav-link" href="{{ url('/advanced-ui/clipboard') }}">Clipboard</a>
          </li>
          <li class="nav-item {{ active_class(['advanced-ui/context-menu']) }}">
            <a class="nav-link" href="{{ url('/advanced-ui/context-menu') }}">Context Menu</a>
          </li>
          <li class="nav-item {{ active_class(['advanced-ui/popups']) }}">
            <a class="nav-link" href="{{ url('/advanced-ui/popups') }}">Popups</a>
          </li>
          <li class="nav-item {{ active_class(['advanced-ui/sliders']) }}">
            <a class="nav-link" href="{{ url('/advanced-ui/sliders') }}">Sliders</a>
          </li>
          <li class="nav-item {{ active_class(['advanced-ui/carousel']) }}">
            <a class="nav-link" href="{{ url('/advanced-ui/carousel') }}">Carousel</a>
          </li>
          <li class="nav-item {{ active_class(['advanced-ui/loaders']) }}">
            <a class="nav-link" href="{{ url('/advanced-ui/loaders') }}">Loaders</a>
          </li>
          <li class="nav-item {{ active_class(['advanced-ui/tree-view']) }}">
            <a class="nav-link" href="{{ url('/advanced-ui/tree-view') }}">Tree View</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['forms/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#forms" aria-expanded="{{ is_active_route(['forms/*']) }}" aria-controls="forms">
        <i class="menu-icon mdi mdi-format-list-bulleted"></i>
        <span class="menu-title">Forms</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['forms/*']) }}" id="forms">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['forms/basic-elements']) }}">
            <a class="nav-link" href="{{ url('/forms/basic-elements') }}">Basic Elements</a>
          </li>
          <li class="nav-item {{ active_class(['forms/advanced-elements']) }}">
            <a class="nav-link" href="{{ url('/forms/advanced-elements') }}">Advanced Elements</a>
          </li>
          <li class="nav-item {{ active_class(['forms/form-validation']) }}">
            <a class="nav-link" href="{{ url('/forms/form-validation') }}">Validation</a>
          </li>
          <li class="nav-item {{ active_class(['forms/step-wizard']) }}">
            <a class="nav-link" href="{{ url('/forms/step-wizard') }}">Step Wizard</a>
          </li>
          <li class="nav-item {{ active_class(['forms/wizard']) }}">
            <a class="nav-link" href="{{ url('/forms/wizard') }}">Wizard</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['editors/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="{{ is_active_route(['editors/*']) }}" aria-controls="editors">
        <i class="menu-icon mdi mdi-code-tags"></i>
        <span class="menu-title">Editors</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['editors/*']) }}" id="editors">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['editors/text-editor']) }}">
            <a class="nav-link" href="{{ url('/editors/text-editor') }}">Text Editor</a>
          </li>
          <li class="nav-item {{ active_class(['editors/code-editor']) }}">
            <a class="nav-link" href="{{ url('/editors/code-editor') }}">Code Editor</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['charts/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="{{ is_active_route(['charts/*']) }}" aria-controls="charts">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">Charts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['charts/*']) }}" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['charts/chartjs']) }}">
            <a class="nav-link" href="{{ url('/charts/chartjs') }}">Chart Js</a>
          </li>
          <li class="nav-item {{ active_class(['charts/morris']) }}">
            <a class="nav-link" href="{{ url('/charts/morris') }}">Morris</a>
          </li>
          <li class="nav-item {{ active_class(['charts/flot']) }}">
            <a class="nav-link" href="{{ url('/charts/flot') }}">Flot</a>
          </li>
          <li class="nav-item {{ active_class(['charts/google-charts']) }}">
            <a class="nav-link" href="{{ url('/charts/google-charts') }}">Google Charts</a>
          </li>
          <li class="nav-item {{ active_class(['charts/sparklinejs']) }}">
            <a class="nav-link" href="{{ url('/charts/sparklinejs') }}">Sparkline Js</a>
          </li>
          <li class="nav-item {{ active_class(['charts/c3-charts']) }}">
            <a class="nav-link" href="{{ url('/charts/c3-charts') }}">C3 Charts</a>
          </li>
          <li class="nav-item {{ active_class(['charts/chartist']) }}">
            <a class="nav-link" href="{{ url('/charts/chartist') }}">Chartist</a>
          </li>
          <li class="nav-item {{ active_class(['charts/justgage']) }}">
            <a class="nav-link" href="{{ url('/charts/justgage') }}">JustGage</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['tables/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="{{ is_active_route(['tables/*']) }}" aria-controls="tables">
        <i class="menu-icon mdi mdi-table-large"></i>
        <span class="menu-title">Tables</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['tables/*']) }}" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['tables/basic-table']) }}">
            <a class="nav-link" href="{{ url('/tables/basic-table') }}">Basic Table</a>
          </li>
          <li class="nav-item {{ active_class(['tables/data-table']) }}">
            <a class="nav-link" href="{{ url('/tables/data-table') }}">Data Table</a>
          </li>
          <li class="nav-item {{ active_class(['tables/js-grid']) }}">
            <a class="nav-link" href="{{ url('/tables/js-grid') }}">Js-grid</a>
          </li>
          <li class="nav-item {{ active_class(['tables/sortable-table']) }}">
            <a class="nav-link" href="{{ url('/tables/sortable-table') }}">Sortable Table</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['notifications']) }}">
      <a class="nav-link" href="{{ url('notifications') }}">
        <i class="menu-icon mdi mdi-bell-outline"></i>
        <span class="menu-title">Notifications</span>
      </a>
    </li>
        <li class="nav-item {{ active_class(['icons/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="{{ is_active_route(['icons/*']) }}" aria-controls="icons">
        <i class="menu-icon mdi mdi-emoticon-happy-outline"></i>
        <span class="menu-title">Icons</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['icons/*']) }}" id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['icons/material']) }}">
            <a class="nav-link" href="{{ url('/icons/material') }}">Material</a>
          </li>
          <li class="nav-item {{ active_class(['icons/flag-icons']) }}">
            <a class="nav-link" href="{{ url('/icons/flag-icons') }}">Flag Icons</a>
          </li>
          <li class="nav-item {{ active_class(['icons/font-awesome']) }}">
            <a class="nav-link" href="{{ url('/icons/font-awesome') }}">Font Awesome</a>
          </li>
          <li class="nav-item {{ active_class(['icons/simple-line-icons']) }}">
            <a class="nav-link" href="{{ url('/icons/simple-line-icons') }}">Simple Line Icons</a>
          </li>
          <li class="nav-item {{ active_class(['icons/themify']) }}">
            <a class="nav-link" href="{{ url('/icons/themify') }}">Themify</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['maps/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="{{ is_active_route(['maps/*']) }}" aria-controls="maps">
        <i class="menu-icon mdi mdi-map-marker-outline"></i>
        <span class="menu-title">Maps</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['maps/*']) }}" id="maps">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['maps/vector-map']) }}">
            <a class="nav-link" href="{{ url('/maps/vector-map') }}">Vector Map</a>
          </li>
          <li class="nav-item {{ active_class(['maps/mapael']) }}">
            <a class="nav-link" href="{{ url('/maps/mapael') }}">Mapael</a>
          </li>
          <li class="nav-item {{ active_class(['maps/google-maps']) }}">
            <a class="nav-link" href="{{ url('/maps/google-maps') }}">Google Maps</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['user-pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['user-pages/*']) }}" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['user-pages/login']) }}">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/login-2']) }}">
            <a class="nav-link" href="{{ url('/user-pages/login-2') }}">Login 2</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/multi-step-login']) }}">
            <a class="nav-link" href="{{ url('/user-pages/multi-step-login') }}">Multi Step Logins</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/register']) }}">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/register-2']) }}">
            <a class="nav-link" href="{{ url('/user-pages/register-2') }}">Register 2</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/lock-screen']) }}">
            <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['error-pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#error-pages" aria-expanded="{{ is_active_route(['error-pages/*']) }}" aria-controls="error-pages">
        <i class="menu-icon mdi mdi-information-outline"></i>
        <span class="menu-title">Error Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['error-pages/*']) }}" id="error-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['error-pages/error-404']) }}">
            <a class="nav-link" href="{{ url('/error-pages/error-404') }}">404</a>
          </li>
          <li class="nav-item {{ active_class(['error-pages/error-500']) }}">
            <a class="nav-link" href="{{ url('/error-pages/error-500') }}">500</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['general-pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="{{ is_active_route(['general-pages/*']) }}" aria-controls="general-pages">
        <i class="menu-icon mdi mdi-bookmark-outline"></i>
        <span class="menu-title">General Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['general-pages/*']) }}" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['general-pages/blank-page']) }}">
            <a class="nav-link" href="{{ url('/general-pages/blank-page') }}">Blank Page</a>
          </li>
          <li class="nav-item {{ active_class(['general-pages/landing-page']) }}">
            <a class="nav-link" href="{{ url('/general-pages/landing-page') }}">Landing Page</a>
          </li>
          <li class="nav-item {{ active_class(['general-pages/profile']) }}">
            <a class="nav-link" href="{{ url('/general-pages/profile') }}">Profile</a>
          </li>
          <li class="nav-item {{ active_class(['general-pages/email-templates']) }}">
            <a class="nav-link" href="{{ url('/general-pages/email-templates') }}">Email Templates</a>
          </li>
          <li class="nav-item {{ active_class(['general-pages/faq']) }}">
            <a class="nav-link" href="{{ url('/general-pages/faq') }}">FAQ</a>
          </li>
          <li class="nav-item {{ active_class(['general-pages/faq-2']) }}">
            <a class="nav-link" href="{{ url('/general-pages/faq-2') }}">FAQ 2</a>
          </li>
          <li class="nav-item {{ active_class(['general-pages/news-grid']) }}">
            <a class="nav-link" href="{{ url('/general-pages/news-grid') }}">News Grid</a>
          </li>
          <li class="nav-item {{ active_class(['general-pages/timeline']) }}">
            <a class="nav-link" href="{{ url('/general-pages/timeline') }}">Timeline</a>
          </li>
          <li class="nav-item {{ active_class(['general-pages/search-results']) }}">
            <a class="nav-link" href="{{ url('/general-pages/search-results') }}">Search Results</a>
          </li>
          <li class="nav-item {{ active_class(['general-pages/portfolio']) }}">
            <a class="nav-link" href="{{ url('/general-pages/portfolio') }}">Portfolio</a>
          </li>
          <li class="nav-item {{ active_class(['general-pages/user-listing']) }}">
            <a class="nav-link" href="{{ url('/general-pages/user-listing') }}">User Listing</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['ecommerce/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#ecommerce" aria-expanded="{{ is_active_route(['ecommerce/*']) }}" aria-controls="ecommerce">
        <i class="menu-icon mdi mdi-cart-outline"></i>
        <span class="menu-title">Ecommerce</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['ecommerce/*']) }}" id="ecommerce">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['ecommerce/invoice']) }}">
            <a class="nav-link" href="{{ url('/ecommerce/invoice') }}">Invoice</a>
          </li>
          <li class="nav-item {{ active_class(['ecommerce/invoice-2']) }}">
            <a class="nav-link" href="{{ url('/ecommerce/invoice-2') }}">Invoice 2</a>
          </li>
          <li class="nav-item {{ active_class(['ecommerce/pricing']) }}">
            <a class="nav-link" href="{{ url('/ecommerce/pricing') }}">Pricing</a>
          </li>
          <li class="nav-item {{ active_class(['ecommerce/product-catalogue']) }}">
            <a class="nav-link" href="{{ url('/ecommerce/product-catalogue') }}">Product Catalogue</a>
          </li>
          <li class="nav-item {{ active_class(['ecommerce/project-list']) }}">
            <a class="nav-link" href="{{ url('/ecommerce/project-list') }}">Project List</a>
          </li>
          <li class="nav-item {{ active_class(['ecommerce/orders']) }}">
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