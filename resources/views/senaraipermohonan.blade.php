@extends('layout.master')

@section('title','eJKDB - Borang Permohonan')

@push('plugin-styles')
{{-- <link rel="stylesheet" href="{{ asset('/assets/plugins/plugin.css') }}"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/2.0.6/css/dataTables.bootstrap5.css" rel="stylesheet">
@endpush

@section('content')
<div class="container applicationFormHeading">
<h1>Senarai Permohonan</h1>
</div>
<div class="container">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
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
                <div class="card">
                    <div class="card-header">
                        <h4>
                            <a href="" class="btn btn-primary float-end">Tambah Permohonan</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="permohonan-list" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>JKDB</th>
                                        <th>Jawatan Dipohon</th>
                                        <th>Sokongan</th>
                                        <th>Status Diterima</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pemohon as $key)
                                    <tr>
                                        <td>{{$key->id}}</td>
                                        <td>{{$key->nama}}</td>
                                        <td>{{$key->id_jkdb}}</td>
                                        <td>{{$key->kodjwtnjkdb}}</td>
                                        <td>{{$key->sokong}}</td>
                                        <td>{{$key->terima}}</td>
                                        <td>
                                            {{-- <button id="viewPemohonBtn" class="btn btn-outline-primary">View</button> --}}
                                            <form action="/sokong_permohonan/{{$key->id}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <button>Sokong</button>
                                            </form>
                                            <form action="/terima_permohonan/{{$key->id}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <button>Terima</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('plugin-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.6/js/dataTables.bootstrap5.js"></script>
<script src="{{ asset('/assets/plugins/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
@endpush

@push('custom-scripts')
<script src="{{ asset('/assets/js/dashboard.js') }}"></script>
<script src="{{ asset('/js/senarai.js') }} "></script>
<script type="text/javascript">
    document.getElementById("viewPemohonBtn").onclick = function () {
        location.href = "/";
    };
</script>
@endpush