@extends('layout.master')

@push('plugin-styles')
  {!! Html::style('/assets/plugins/owl-carousel-2/assets/owl.carousel.min.css') !!}
  {!! Html::style('/assets/plugins/owl-carousel-2/assets/owl.theme.default.min.css') !!}
@endpush

@section('content')
<div class="row">
  <div class="col-lg-7 col-md-8 mx-auto">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex align-items-center justify-content-between font-weight-bold">
          <img src="{{ url('assets/images/logo.svg') }}" class="w-25" alt="logo">
          <p class="mb-0 mt-4 mt-sm-0"><a href="#">Create</a> user account in just three easy steps</p>
        </div>
        <div class="st-wizard-wrapper">
          <div class="st-wizard-steps">
            <a class="wizard-step done" href="#one">
              <p class="step-number">1</p>
              <p class="step-details">Basic<br>account credentials</p>
            </a>
            <a class="wizard-step" href="#two">
              <p class="step-number">2</p>
              <p class="step-details">Personal<br>Information</p>
            </a>
            <a class="wizard-step" href="#three">
              <p class="step-number">3</p>
              <p class="step-details">Overview<br>Information </p>
            </a>
          </div>
          <div id="st-wizard-wrapper" class="owl-carousel wizard-slides mt-5">
            <div class="wizard-slide" data-hash="one">
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label text-muted mt-2">Email*</label>
                </div>
                <div class="form-group col-md-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label text-muted mt-2">Username*</label>
                </div>
                <div class="form-group col-md-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label text-muted mt-2">Password*</label>
                </div>
                <div class="form-group col-md-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="wizard-slide" data-hash="two">
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label text-muted mt-2">Full Name*</label>
                </div>
                <div class="form-group col-md-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label text-muted mt-2">Gender*</label>
                </div>
                <div class="form-group col-md-8">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label text-muted mt-2">Location*</label>
                </div>
                <div class="form-group col-md-8">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="wizard-slide" data-hash="three">
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label text-muted mb-0">Email*</label>
                </div>
                <div class="form-group col-md-8">
                  <p class="font-weight-bold mb-0">lowe.stacy@stiedemann.info</p>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label text-muted mt-0 mb-0">Username*</label>
                </div>
                <div class="form-group col-md-8">
                  <p class="font-weight-bold mb-0">Derrick Turner</p>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label text-muted mt-0 mb-0">Password*</label>
                </div>
                <div class="form-group col-md-8">
                  <p class="font-weight-bold mb-0">****** ****</p>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label text-muted mt-0 mb-0">Full Name*</label>
                </div>
                <div class="form-group col-md-8">
                  <p class="font-weight-bold mb-0">Derrick Turner alex</p>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label text-muted mt-0 mb-0">Male*</label>
                </div>
                <div class="form-group col-md-8">
                  <p class="font-weight-bold mb-0">Male</p>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4">
                  <label class="label text-muted mt-0 mb-0">Location*</label>
                </div>
                <div class="form-group col-md-8">
                  <p class="font-weight-bold mb-0">New Caledonia</p>
                </div>
              </div>
            </div>
          </div>
          <div class="wizard-footer">
            <div class="form-check terms-checkbox">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input">I have read & agreed to the terms of service & policy<i class="input-helper"></i></label>
            </div>
            <p class="required-text">* field are required to be filled</p>
            <div class="wrapper">
              <p class="mb-0 mr-4 text-muted wizard-slide-count">STEP 1/3</p>
              <button type="button" class="btn btn-primary customNextBtn">Proceed</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/owl-carousel-2/owl.carousel.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/st-wizard.js') !!}
@endpush