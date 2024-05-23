@extends('layout.master')

@section('title','eJKDB - Borang Permohonan')

@push('plugin-styles')
{{-- <link rel="stylesheet" href="{{ asset('/assets/plugins/plugin.css') }}"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Register</h1>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid">
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('plugin-scripts')
<script src="{{ asset('/assets/plugins/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
@endpush

@push('custom-scripts')
<script src="{{ asset('/assets/js/dashboard.js') }}"></script>
@endpush