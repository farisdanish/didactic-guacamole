@extends('layout.master')

@section('title','eJKDB - Borang Permohonan')

@push('plugin-styles')
{{-- <link rel="stylesheet" href="{{ asset('/assets/plugins/plugin.css') }}"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/2.0.6/css/dataTables.bootstrap5.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/senarai-style.css') }}">
@endpush

@section('content')
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
                    {{-- <div class="card-header">
                        <h4>
                            <a href="" class="btn btn-primary float-end">Tambah Permohonan</a>
                        </h4>
                    </div> --}}
                    <div class="card-body">
                        <h4 class="card-title">Senarai Permohonan</h4>
                        <div class="table-responsive">
                            <table id="permohonan-list" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>JKDB</th>
                                        <th>Jawatan Dipohon</th>
                                        <th>Status Hantar</th>
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
                                        <td>
                                            @foreach ($jkdb as $data)
                                            @if($data->id_jkdb == $key->id_jkdb)         
                                            {{$data->nama}}     
                                            @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($jwtnjkdb as $data)
                                            @if($data->kodjawatan == $key->kodjwtnjkdb)         
                                            {{$data->namajawatan}}     
                                            @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @if($key->hantar == "N")
                                            <span style="color: #ff0000">Belum Dihantar</span>
                                            @elseif($key->hantar == "Y")
                                            <span style="color: green">Telah Dihantar</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($key->hantar == "N")
                                            N/A
                                            @elseif($key->hantar == "Y")
                                                @if($key->sokong == "")
                                                <span style="color: #ff0000">Belum Disokong</span>
                                                @elseif($key->sokong != "")
                                                <span style="color: green">Disokong</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                            @if($key->hantar == "N")
                                            N/A
                                            @elseif($key->hantar == "Y")
                                                @if($key->terima == "")
                                                <span style="color: #ff0000">Belum Diterima</span>
                                                @elseif($key->terima != "")
                                                <span style="color: green">Diterima</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <button id="viewPemohonBtn" class="btn btn-outline-primary">View</button> --}}
                                            @if($key->hantar != "Y")
                                            <form class="mb-1" action="/ubah_permohonan/{{$key->id}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <button class="btn btn-outline-primary btn-block">Ubah & Hantar</button>
                                            </form>
                                            @endif
                                            <form class="mb-1" action="/sokong_permohonan/{{$key->id}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <button class="btn btn-outline-warning btn-block">Sokong</button>
                                            </form>
                                            <form action="/terima_permohonan/{{$key->id}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <button class="btn btn-outline-success btn-block">Terima</button>
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
    
</script>
@endpush