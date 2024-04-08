@extends('layout.master-mini')
@section('content')

<div class="content-wrapper auth p-0 theme-two">
  <div class="row d-flex align-items-stretch">
    <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
      <div class="slide-content" style="background-image: url({{ url('assets/images/auth/login_2.jpg') }}); background-size: cover;"> </div>
    </div>
    <div class="col-12 col-md-8 h-100 bg-white">
      <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
        <div class="nav-get-started">
          <p>Don't have an account?</p>
          <a class="btn get-started-btn" href="{{ url('/user-pages/register-2') }}">GET STARTED</a>
        </div>
        <form action="#">
          <h3 class="mr-auto">Hello! let's get started</h3>
          <p class="mb-5 mr-auto">Enter your details below.</p>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="mdi mdi-account-outline"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="mdi mdi-lock-outline"></i>
                </span>
              </div>
              <input type="password" class="form-control" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary submit-btn">SIGN IN</button>
          </div>
          <div class="wrapper mt-5 text-gray">
            <p class="footer-text">Copyright © 2018 Bootstrapdash. All rights reserved.</p>
            <ul class="auth-footer text-gray">
              <li>
                <a href="#">Terms & Conditions</a>
              </li>
              <li>
                <a href="#">Cookie Policy</a>
              </li>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection