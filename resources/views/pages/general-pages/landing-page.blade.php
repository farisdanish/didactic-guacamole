<!DOCTYPE html>
<html>
<head>
  <title>Star Admin Premium Laravel Admin Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  
  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

  <!-- plugin css -->
  {!! Html::style('assets/plugins/@mdi/font/css/materialdesignicons.min.css') !!}
  {!! Html::style('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}
  {!! Html::style('/assets/plugins/ti-icons/css/themify-icons.css') !!}
  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
  {!! Html::style('css/app.css') !!}
  <!-- end common css -->

  @stack('style')
</head>
<body data-base-url="{{url('/')}}">

  <div class="container-scroller landing-page" id="app">
    <div class="container-fluid top-banner">
      <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="row flex-grow">
          <div class="col-md-8 d-lg-flex flex-row mx-auto">
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ url('assets/images/logo_star_white.svg') }}" alt="logo" /> </a>
            <button class="navbar-toggler collapsed float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon ti ti-menu text-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link btn btn-link" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-link" href="#">PRICING</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link btn btn-link" href="#">CONTACT</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row top-banner-content">
          <div class="col-md-8 mx-auto">
            <div class="row">
              <div class="col-lg-7">
                <h1 class="mr-2 text-white"> All you need for creating dashboard UI and complex web interfaces. </h1>
                <h3 class="font-weight-light text-white"> Star Admin Template </h3>
                <div class="mt-5">
                  <button class="btn btn-primary btn-lg mr-2">VIEW ALL DEMO</button>
                  <button class="btn btn-danger btn-lg ml-2">BUY NOW</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid middle-section bg-white">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="m-2">
                <div class="card card-icon-top">
                  <div class="card-body">
                    <img src="{{ url('assets/images/samples/bootstrap-stack.png') }}" alt="image" class="card-icon" />
                    <h4>Bootstrap 4</h4>
                    <p class="card-text"> Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="m-2">
                <div class="card card-icon-top">
                  <div class="card-body">
                    <img src="{{ url('assets/images/samples/angular-4.png') }}" alt="image" class="card-icon" />
                    <h4>Angular 5</h4>
                    <p class="card-text"> Angular is a platform that makes it easy to build applications with the web. </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="m-2">
                <div class="card card-icon-top">
                  <div class="card-body">
                    <img src="{{ url('assets/images/samples/html5.png') }}" alt="image" class="card-icon" />
                    <h4>Static HTML</h4>
                    <p class="card-text"> This is built with Jquery and static HTML that can be integrated to any framewroks </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5 mb-5">
            <div class="col-md-8 mx-auto">
              <h3>Choose Your Demo</h3>
              <p class="font-weight-light"> This template comes with AngularJs and HTML5/jQuery version, which helps to choose the best dashboard solution to fit your project needs. </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="m-3">
                <div class="card card-item-preview">
                  <img class="card-img-top" src="{{ url('assets/images/samples/dashboard.png') }}" alt="image">
                  <div class="card-body py-3 border-top">
                    <label class="badge badge-warning">New</label>
                    <h6 class="font-weight-normal mb-0">Dashboard</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="m-3">
                <div class="card card-item-preview">
                  <img class="card-img-top" src="{{ url('assets/images/samples/widgets.png') }}" alt="image">
                  <div class="card-body py-3 border-top">
                    <h6 class="font-weight-normal mb-0">Widgets</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="m-3">
                <div class="card card-item-preview">
                  <img class="card-img-top" src="{{ url('assets/images/samples/modal.png') }}" alt="image">
                  <div class="card-body py-3 border-top">
                    <h6 class="font-weight-normal mb-0">Modals</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="m-3">
                <div class="card card-item-preview">
                  <img class="card-img-top" src="{{ url('assets/images/samples/e-commerce.png') }}" alt="image">
                  <div class="card-body py-3 border-top">
                    <h6 class="font-weight-normal mb-0">E-commerce</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="m-3">
                <div class="card card-item-preview">
                  <img class="card-img-top" src="{{ url('assets/images/samples/email.png') }}" alt="image">
                  <div class="card-body py-3 border-top">
                    <h6 class="font-weight-normal mb-0">Email</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="m-3">
                <div class="card card-item-preview">
                  <img class="card-img-top" src="{{ url('assets/images/samples/charts.png') }}" alt="image">
                  <div class="card-body py-3 border-top">
                    <label class="badge badge-success">New</label>
                    <h6 class="font-weight-normal mb-0">Charts</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="m-3">
                <div class="card card-item-preview">
                  <img class="card-img-top" src="{{ url('assets/images/samples/editors.png') }}" alt="image">
                  <div class="card-body py-3 border-top">
                    <h6 class="font-weight-normal mb-0">Code Editors</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="m-3">
                <div class="card card-item-preview">
                  <img class="card-img-top" src="{{ url('assets/images/samples/forms.png') }}" alt="image">
                  <div class="card-body py-3 border-top">
                    <label class="badge badge-primary">New</label>
                    <h6 class="font-weight-normal mb-0">Forms</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="m-3">
                <div class="card card-item-preview">
                  <img class="card-img-top" src="{{ url('assets/images/samples/popup.png') }}" alt="image">
                  <div class="card-body py-3 border-top">
                    <h6 class="font-weight-normal mb-0">Popups</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bottom-section">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h3>Top Features</h3>
          <div class="feature-list">
            <div class="row feature-list-row">
              <div class="col-lg-3 feature-list-item">
                <i class="ti-briefcase"></i>
                <h4>Lots of widgtes</h4>
                <p class="feature-description">Wide range of Widgets are available with this Package.</p>
              </div>
              <div class="col-lg-3 feature-list-item">
                <i class="ti-target"></i>
                <h4>Bootstrap 4</h4>
                <p class="feature-description">It is made with bootstrap 4 framework</p>
              </div>
              <div class="col-lg-3 feature-list-item">
                <i class="ti-mobile"></i>
                <h4>Fully Responsive</h4>
                <p class="feature-description">Fully responsive accross all devices</p>
              </div>
              <div class="col-lg-3 feature-list-item">
                <i class="ti-face-smile"></i>
                <h4>3000+ icon fonts</h4>
                <p class="feature-description">Lots of icon fonts are included in the package</p>
              </div>
            </div>
            <div class="row feature-list-row">
              <div class="col-lg-3 feature-list-item">
                <i class="ti-layout-sidebar-left"></i>
                <h4>Dark and light sidebars</h4>
                <p class="feature-description">Included Dark and Light Sidebar for getting desired look and feel.</p>
              </div>
              <div class="col-lg-3 feature-list-item">
                <i class="ti-blackboard"></i>
                <h4>Easy to customize</h4>
                <p class="feature-description">Customization will be easy as we understand your pain.</p>
              </div>
              <div class="col-lg-3 feature-list-item">
                <i class="ti-paint-bucket"></i>
                <h4>6 theme colors</h4>
                <p class="feature-description">We have included 6 pre-defined color schemes with this admin.</p>
              </div>
              <div class="col-lg-3 feature-list-item">
                <i class="ti-receipt"></i>
                <h4>Detailed documentation</h4>
                <p class="feature-description">We have made detailed documentation, for ease of use.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="container-fluid footer">
      <div class="row pb-5 text-white footer-top">
        <div class="col-md-8 mx-auto">
          <div class="row">
            <div class="col-md-3">
              <img src="{{ url('assets/images/logo_star_white.svg') }}" class="brand-logo" alt="logo" />
              <div class="d-flex flex-row footer-social-icons">
                <i class="ti-facebook bg-facebook"></i>
                <i class="ti-google bg-google"></i>
                <i class="ti-dribbble bg-dribbble"></i>
                <i class="ti-twitter-alt bg-twitter"></i>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row contact-details">
                <div class="col-12 d-flex mb-3">
                  <i class="ti-mobile mr-4"></i>
                  <h6 class="font-weight-normal">(0000) 1234 5678</h6>
                </div>
                <div class="col-12 d-flex mb-3">
                  <i class="ti-settings mr-4"></i>
                  <h6 class="font-weight-normal">support@staradmin.org</h6>
                </div>
              </div>
              <ul class="nav mt-3">
                <li class="nav-item">
                  <a class="nav-link" href="#">Demos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Support</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Documentation</a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h6>Newsletter</h6>
              <p>To get the latest news from us please subscribe your email.</p>
              <div class="mt-3">
                <input type="email" class="form-control" placeholder="Enter your email" /> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row py-4 footer-bottom">
        <div class="col-md-8 mx-auto">
          <div class="container-fluid clearfix">
            <span class="d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="#">bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- base js -->
  {!! Html::script('js/app.js') !!}
  <!-- end base js -->

  <!-- plugin js -->
  <!-- end plugin js -->

  <!-- common js -->
  {!! Html::script('assets/js/misc.js') !!}
  <!-- end common js -->

</body>
</html>