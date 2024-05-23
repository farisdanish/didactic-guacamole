@extends('layout.master')

@section('title','eJKDB - Borang Permohonan')

@push('plugin-styles')
{{-- <link rel="stylesheet" href="{{ asset('/assets/plugins/plugin.css') }}"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

@section('content')

@endsection

@push('plugin-scripts')
<script src="{{ asset('/assets/plugins/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
@endpush

@push('custom-scripts')
<script src="{{ asset('/assets/js/dashboard.js') }}"></script>
@endpush