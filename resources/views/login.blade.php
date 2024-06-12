<!DOCTYPE html>
<html>
<head>
    <title>LOGIN - eJKDB</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon"/>

    <!-- plugin css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/@mdi/font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!-- end plugin css -->

    @stack('plugin-styles')

    <!-- common css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- end common css -->

    @stack('style')
</head>
<body data-base-url="{{url('/login')}}" class="sidebar-dark">
    <br/>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('/favicon.ico') }}" style="width: 10%;" class="card-img-top mb-3 float-right" alt="Login Image">
                        <br/>{{ __('Daftar Masuk eJKDB') }}
                        <p>Sila daftar masuk untuk memulakan sesi.</p>
                    </div>
    
                    <div class="card-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-mel') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Kata Laluan') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            {{-- <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Ingat Butiran Saya') }}
                                        </label>
                                    </div>
                                </div>
                            </div> --}}
    
                            <div class="form-group row mb-4">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Daftar Masuk') }}
                                    </button>
    
                                    <a class="btn btn-link" href="{{-- route('password.request') --}}">
                                        {{ __('Lupa Kata Laluan') }}
                                    </a>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <div class="col-md-8 offset-md-4">
                                    <button type="button" class="btn btn-secondary" onclick="document.location.href='/register';">
                                        {{ __('Jika tiada akaun sila daftarkan diri') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<!-- base js -->
<script rel="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script rel="text/javascript" src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- end base js -->

<!-- plugin js -->
@stack('plugin-scripts')
<!-- end plugin js -->

<!-- common js -->
<script rel="text/javascript" src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script rel="text/javascript" src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script rel="text/javascript" src="{{ asset('assets/js/misc.js') }}"></script>
<script rel="text/javascript" src="{{ asset('assets/js/settings.js') }}"></script>
<script rel="text/javascript" src="{{ asset('assets/js/todolist.js') }}"></script>
<!-- end common js -->

@stack('custom-scripts')
</body>
</html>