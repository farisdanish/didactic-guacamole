<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akaun - eJKDB</title>
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
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('/favicon.ico') }}" style="width: 10%;" class="card-img-top mb-3 float-right" alt="Login Image">
                        <h4>Daftarkan Diri Anda</h4>
                        <p>Sila lengkapkan borang pendaftaran dibawah.</p>
                    </div>
                    <div class="card-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
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
                        <form action="{{ route('register') }}" id="daftarAkaun" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Emel</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="userType" class="form-label">Jabatan/Jawatan:</label>
                                <select id="userType" name="userType" class="form-select" required>
                                    <option value="" disabled selected>Sila Pilih Jabatan/Jawatan Anda</option>
                                    <option value="PBT">PBT</option>
                                    <option value="Mayor/Presiden/Pengerusi">Mayor/Presiden/Pengerusi</option>
                                    <option value="KKTP">KKTP</option>
                                    <option value="SUT">SUT</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Laluan</label>
                                <input type="password" name="password" class="form-control" id="password" onkeyup='checkMatch();' required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Sahkan Kata Laluan</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" onkeyup='checkMatch();' required>
                            </div>
                            <div class="mb-3">
                                <span id="length-message" style="color: red;"></span>
                            </div>
                            <div class="mb-3">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        Daftar
                                    </button>
                                    <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('login') }}'">
                                        Go Back
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
<script>
    var checkMatch = function() {
        var password = document.getElementById('password');
        var confirmPassword = document.getElementById('password_confirmation');
        var lengthMessage = document.getElementById('length-message');

        if (password.value.length < 8) {
            lengthMessage.textContent = 'Kata laluan mesti mengandungi sekurang-kurangnya 8 karakter';
            password.style.borderColor = 'red';
        } else {
            lengthMessage.textContent = '';
            password.style.borderColor = '';
        }

        if (password.value === confirmPassword.value && password.value.length >= 8) {
            password.style.borderColor = 'green';
            confirmPassword.style.borderColor = 'green';
        } else if (password.value.length >= 8){
            password.style.borderColor = 'red';
            confirmPassword.style.borderColor = 'red';
        }
    }

    // Function to handle form submission and show alert if passwords don't match
    var checkForm = function(event) {
        var password = document.getElementById('password');
        var confirmPassword = document.getElementById('password_confirmation');

        if (password.value.length < 8) {
            alert('Kata laluan mesti mengandungi sekurang-kurangnya 8 aksara');
            event.preventDefault(); // Prevent form submission
        } else if (password.value !== confirmPassword.value) {
            alert('Kata laluan tidak sepadan');
            event.preventDefault(); // Prevent form submission
        }
    }

    // Attach the checkForm function to the form's submit event
    document.getElementById('daftarAkaun').addEventListener('submit', checkForm);
</script>
</body>
</html>