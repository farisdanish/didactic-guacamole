@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Region chart</h4>
        <div class="google-chart-container">
          <div id="line-chart" class="google-charts"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bar chart</h4>
        <div class="google-chart-container d-flex align-items-center justify-content-center h-100">
          <div id="Bar-chart" class="google-charts mt-n5"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bar chart</h4>
        <div class="google-chart-container d-flex align-items-center justify-content-center h-100">
          <div id="donutchart" class="google-charts"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pie chart</h4>
        <div class="google-chart-container d-flex align-items-center justify-content-center h-100">
          <div id="piechart" class="google-charts"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
  {!! Html::script('https://www.gstatic.com/charts/loader.js') !!}
  {!! Html::script('/assets/js/google-charts.js') !!}
@endpush