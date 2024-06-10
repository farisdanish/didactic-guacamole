@extends('layout.master')

@section('title','eJKDB - Borang Permohonan')

@push('plugin-styles')
{{-- <link rel="stylesheet" href="{{ asset('/assets/plugins/plugin.css') }}"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

@section('content')
    {{-- @auth
        <!--If user is logged in, it will display this-->

    @else

    @endauth --}}
    <div class="container">
        <div>
            @If(session()->has('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @elseif(session()->has('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif
        </div>
        <!-- Display validation errors -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h1>Ruang Halaman</h1>
    </div>
    <div class="container-fluid row">
        <div class="row d-flex justify-content-center">
            @auth
                <div class="col-sm-6">
                    <button class="btn btn-block btn-primary">Buat Permohonan</button>
                    <button class="btn btn-block btn-primary">Lihat Senarai Permohonan</button>
                    <button class="btn btn-block btn-danger">Log Keluar</button>
                </div>
            @endauth
    
            @guest
                <div class="col-sm-6">
                    <button class="btn btn-block btn-primary">Log Masuk</button>
                    <button class="btn btn-block btn-primary">Buat Akaun</button>
                </div>
            @endguest
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