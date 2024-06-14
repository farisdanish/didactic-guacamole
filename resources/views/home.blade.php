@extends('layout.master')

@section('title','Laman Utama')

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
    </div>
    <div class="container-fluid row">
        <div class="row d-flex justify-content-center">
            <center><h1>Ruang Halaman</h1></center>
            <!-- Display user details if available -->
            @auth
            @section('userName',Auth::user()->name)
            <h1>Welcome, {{ Auth::user()->name }}!</h1>
            <p>Your email: {{ Auth::user()->email }}</p>
            <p>Your user type: {{ Auth::user()->userType }}</p>
                <div class="col-sm-6">
                    <button class="btn btn-block btn-primary">Buat Permohonan</button>
                    <button class="btn btn-block btn-primary">Lihat Senarai Permohonan</button>
                    <div class="btn-block">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-block btn-danger">Log Keluar</button>
                        </form>
                    </div>
                </div>
            @else
            <h1>Welcome, Guest!</h1>
            <p>Please <a href="{{ route('login') }}">login</a> to access your details.</p>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-block btn-primary" onclick="window.location.href='{{ route('login') }}'">
                        Log Masuk
                    </button>
                    <button type="button" class="btn btn-block btn-primary" onclick="window.location.href='{{ route('register') }}'">
                        Buat Akaun
                    </button>
                </div>
            @endauth
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