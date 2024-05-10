@extends('layout.master')

@section('title','eJKDB - Borang Permohonan')

@push('plugin-styles')
{{-- <link rel="stylesheet" href="{{ asset('/assets/plugins/plugin.css') }}"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<link rel="stylesheet" href="{{ asset('/css/borang-style.css') }}">
@endpush

@section('content')
<div class="container applicationFormHeading">
<h1>Borang Permohonan</h1>
</div>
<div class="container-fluid borang_ejkdb">
<form id="borang_ejkdb" action="/create_permohonan" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center; margin-bottom:40px;">
        <span class="step">BAHAGIAN A,B,C</span>
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path style="fill: gray" d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
        <span class="step">BAHAGIAN D,E,F</span>
    </div>
    <div class="tab">
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN A : MAKLUMAT PERUMAHAN</b></h5></div>
            <div class="container row justify-content-center">
                <div class="form-group row mt-3 mb-3 w-75">
                    <input type="hidden" class="form-control" id="tahun" name="tahun" value="{{$year}}">
                    <label for="namajkdb" class="col-sm-2 col-form-label"><b>Nama JKDB:</b></label>
                    <div class="col-sm-10">
                        <select class="form-select" id="id_jkdb" name="id_jkdb" aria-label="id_jkdb" data-placeholder="Sila Pilih JKDB Anda" required>
                            <option></option>
                            @foreach ($jkdb as $key => $data)
                            <option value="{{$data->id_jkdb}}">{{$data->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-75">
                    <label for="negeri" class="col-sm-2 col-form-label"><b>Negeri :</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="negeri" name="negeri" value="Sabah" disabled>
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-75">
                    <label for="daerah" class="col-sm-2 col-form-label"><b>Daerah :</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control jkdb-info" id="daerahView" name="daerahView" value="" disabled>
                        <input type="hidden" class="form-control jkdb-info" id="daerah" name="daerah" value="">
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-75">
                    <label for="parlimen" class="col-sm-2 col-form-label"><b>Parlimen :</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control jkdb-info" id="parlimenView" name="parlimenView" value="" disabled>
                        <input type="hidden" class="form-control jkdb-info" id="parlimen" name="parlimen" value="">
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-75">
                    <label for="dun" class="col-sm-2 col-form-label"><b>DUN :</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control jkdb-info" id="dunView" name="dunView" value="" disabled>
                        <input type="hidden" class="form-control jkdb-info" id="dun" name="dun" value="">
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-75">
                    <label for="jawatan" class="col-sm-2 col-form-label"><b>Jawatan :</b></label>
                    <div class="col-sm-10">
                        <select class="form-select" id="kodjwtnjkdb" name="kodjwtnjkdb" aria-label="kodjwtnjkdb" data-placeholder="Pilih Jawatan" required>
                            <option></option>
                            @foreach ($jawatanjkdb as $key => $data)
                            <option value="{{$data->kodjawatan}}">{{$data->namajawatan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN B : MAKLUMAT PEMOHON</b></h5></div>
            <div class="form-group row mt-3 mb-3">
                <label for="namapenuh" class="col-sm-2 col-form-label"><b>Nama Penuh :</b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nomIC" class="col-sm-2 col-form-label"><b>No. KP :</b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nokp" name="nokp" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="row col-sm-9">
                    <label for="tarikhlahir" class="col-sm-3 col-form-label"><b>Tarikh Lahir :</b></label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="tarikhlahir" name="tarikhlahir" required>
                    </div>
                </div>
                <div class="row col-sm-3">
                    <label for="umur" class="col-sm-3 col-form-label"><b>Umur:</b></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="umur" name="umur" disabled>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="bangsa" class="col-sm-2 col-form-label"><b>Bangsa :</b></label>
                <div class="col-sm-10">
                    <select class="form-select" id="kaum" name="kaum" aria-label="kaum" data-placeholder="Sila Pilih Bangsa Anda" required>
                        <option></option>
                        @foreach ($kaum as $key => $data)
                        <option value="{{$data->kodkaum}}">{{$data->namakaum}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="bangsa" class="col-sm-2 col-form-label"><b>Jantina :</b></label>
                <div class="col-sm-10">
                    <select class="form-select" id="jantina" name="jantina" aria-label="bangsa" required>
                        <option disabled selected value>Pilih Jantina Anda</option>
                        <option value="L">Lelaki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label"><b>Alamat Mastautin :</b></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamat1" name="alamat1" rows="3" required></textarea>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label"><b>Sambungan Alamat :</b></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamat2" name="alamat2" rows="3" placeholder="Isi Jika Berkenaan Sahaja"></textarea>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="numPhone" class="col-sm-2 col-form-label"><b>No. Telefon :</b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="notel" name="notel" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="email" class="col-sm-2 col-form-label"><b>Email :</b></label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="namaBank" class="col-sm-2 col-form-label"><b>Nama & No Akaun Bank :</b></label>
                <div class="col-sm-10 mb-3">
                    <input type="text" class="form-control mb-1" id="namaBank" name="namaBank" placeholder="Nama Bank Anda" required>
                    <input type="text" class="form-control" id="noAkaunBank" name="noAkaunBank" placeholder="No. Akaun Bank Anda" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="lampiranBank" class="col-sm-2 col-form-label"><b>Lampiran Bank :</b></label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="lampiranBank" name="lampiranBank">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="partiKomponenKerajaan" class="col-sm-2 col-form-label"><b>Parti Komponen Kerajaan:</b></label>
                <div class="col-sm-10 mb-3">
                    <select class="form-select" id="partiKomponenKerajaan" name="partiKomponenKerajaan" aria-label="partiKomponenKerajaan" data-placeholder="Sila Pilih Parti Komponen Kerajaan yang diwakili anda" required>
                        <option></option>
                        @foreach ($parti as $key => $data)
                        <option value="{{$data->kodparti}}">{{$data->namaparti}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN C : MAKLUMAT PEKERJAAN</b></h5></div>
            <div class="container mt-3">
                <h5><b>Sila tanda mana yang berkenaan:</b></h5>
                <div class="container dashed-line-table-selector justify-content-center mt-3 mb-3">
                    <table class="radioInputBox" style="margin: 0 auto;">
                        @foreach ($penjawat as $key => $data)
                        <tr>
                            <td width="10%">
                                <input type="radio" id="pekerjaan" class="input-box" name="pekerjaan" value="{{$data->kodpenjawat}}" required>
                                <label for="pekerjaan"><h6>{{$data->namapenjawat}}</h6></label>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <p><center><b>*Bagi Penjawat Awam, Lampiran Kebenaran Ketua Jabatan Adalah Diwajibkan</b></center></p>
                <div class="form-group row mb-3">
                    <label for="lampiranKebenaran" class="col-sm-2 col-form-label"><b>Lampiran:</b></label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="lampiranKebenaran" name="lampiranKebenaran">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab">
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN D : MAKLUMAT PENDIDIKAN</b></h5></div>
            <div class="container row justify-content-center">
                <div class="form-group row mt-3 mb-3 w-100">
                    <label for="pendidikan" class="col-sm-2 col-form-label"><b>Tahap Pendidikan Tertinggi:</b></label>
                    <div class="col-sm-10">
                        <select class="form-select" id="pendidikan" name="pendidikan" aria-label="pendidikan" data-placeholder="Sila Pilih Tahap Pendidikan Tertinggi Anda" required>
                            <option></option>
                            @foreach ($pendidikan as $key => $data)
                            <option value="{{$data->kodpendidik}}">{{$data->namapendidik}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3 mb-3 w-100" id="hidePendidikLainInput" style="display:none;">
                    <label for="pendidiklain" class="col-sm-2 col-form-label"><b>Lain-lain:</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control jkdb-info" id="pendidiklain" name="pendidiklain" value="" placeholder="Tuliskan tahap pendidikan anda">
                    </div>
                </div>
                <div class="form-group row mt-3 mb-3 w-75">
                    <label for="sijilpendidikantertinggi"><b>*Sila muatnaik sijil untuk tahap pendidikan tertinggi anda</b></label>
                    <input type="file" class="form-control" id="sijilpendidikan" name="sijilpendidikan">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN E : MAKLUMAT KESIHATAN</b></h5></div>
            <div class="container row justify-content-center mt-3 mb-3">
                <div class="row text-center">
                    <h6>Saya 
                        <label class="radio-inline">
                            <input type="radio" name="penyakitstatus" value="yes" checked required> menghidapi/
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="penyakitstatus" value="no"> tidak menghidapi
                        </label>
                    masalah kesihatan yang serius seperti berikut</h6>
                </div>
                <div class="form-group row mb-3">
                    <label for="penyakit1" class="col-sm-2 col-form-label"><b>Penyakit(i):</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penyakit1" name="penyakit1" placeholder="Nyatakan">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="penyakit2" class="col-sm-2 col-form-label"><b>Penyakit(ii):</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penyakit2" name="penyakit2" placeholder="Nyatakan">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="penyakit3" class="col-sm-2 col-form-label"><b>Penyakit(iii):</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penyakit3" name="penyakit3" placeholder="Nyatakan">
                    </div>
                </div>
                <div class="text-center">
                    <h6>Nota: (i) - (iii) tidak perlu diiisi sekiranya tidak meghadapi masalah kesihatan yang serius.</h6>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN F : PENGAKUAN</b></h5></div>
            <div class="container mt-3">
                <div class="text-center"><h6>Dengan ini saya mengakui bahawa semasa permohonan jawatan ini dibuat:</h6></div>
                <div class="container dashed-line-table-selector justify-content-center mt-3 mb-3">
                    <table style="margin: 0 auto;">
                        <tr>
                            <th style="text-align:center">KETERANGAN</th>
                            <th style="text-align:center">YA</th>
                            <th style="text-align:center">TIDAK</th>
                        </tr>
                        <tr>
                            <td><h6>i.SAYA TELAH DIISYTIHARKAN MUFLIS</h6></td>
                            <td width="10%" style="text-align:center"><input type="radio" id="muflis" class="input-box" name="muflis" value="Yes" required></td>
                            <td width="10%" style="text-align:center"><input type="radio" id="muflis" class="input-box" name="muflis" value="No"></td>
                        </tr>
                        <tr>
                            <td><h6>ii.SAYA PERNAH MEMPUNYAI REKOD JENAYAH</h6></td>
                            <td style="text-align:center"><input type="radio" id="jenayah" class="input-box" name="jenayah" value="Yes" required></td>
                            <td style="text-align:center"><input type="radio" id="jenayah" class="input-box" name="jenayah" value="No"></td>
                        </tr>
                        <tr>
                            <td><h6>iii.SAYA PERNAH TERLIBAT DENGAN PENYALAHGUNAAN DADAH</h6></td>
                            <td style="text-align:center"><input type="radio" id="dadah" class="input-box" name="dadah" value="Yes" required></td>
                            <td style="text-align:center"><input type="radio" id="dadah" class="input-box" name="dadah" value="No"></td>
                        </tr>
                        <tr>
                            <td><h6>iv.SAYA SIHAT MENTAL DAN FIZIKAL UNTUK MELAKSANAKAN TUGAS YANG AKAN DIBERIKAN</h6></td>
                            <td style="text-align:center"><input type="radio" id="kesihatan" class="input-box" name="kesihatan" value="Yes" required></td>
                            <td style="text-align:center"><input type="radio" id="kesihatan" class="input-box" name="kesihatan" value="No"></td>
                        </tr>
                    </table>
                </div>
                <h6><center>Semua keterangan saya di bahagian A-F adalah benar. Bersama-sama ini juga disertakan salinan Dokumen berikut:</center></h6>
                <table class="table mt-3 mb-3" id="tablependidikan">
                    <tr>
                        <th>#</th>
                        <th>DOKUMEN</th>
                        <th>LAMPIRAN</th>
                    </tr>
                    <tr>
                        <td><b>1</b></td>
                        <td>GAMBAR PASSPORT</td>
                        <td><input type="file" class="form-control" id="gambarpassportfile" name="gambarpassportfile"></td>
                    </tr>
                    <tr>
                        <td><b>2</b></td>
                        <td>SALINAN KAD PENGENALAN</td>
                        <td><input type="file" class="form-control" id="kadICSalinan" name="kadICSalinan"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div style="overflow:auto;">
        <div style="float:right;">
        <button type="button" class="btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)">Kembali</button>
        <button type="button" class="btn btn-secondary" id="nextBtn" onclick="nextPrev(1)">Seterusnya</button>
        <button type="submit" class="btn btn-success submit" id="submitbtn">Hantar</button>
        </div>
    </div>
</form>
</div>
@endsection

@push('plugin-scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/assets/plugins/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush

@push('custom-scripts')
<script src="{{ asset('/assets/js/dashboard.js') }}"></script>
<script src="{{ asset('/js/borang.js') }} "></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    $("#tarikhlahir").change(function(){
        var dob = $("#tarikhlahir").val();
    
        if(dob != null || dob != ""){
            $("#umur").val(getAge(dob));
        }
    });

    function getAge(birth) {
        ageMS = Date.parse(Date()) - Date.parse(birth);
        age = new Date();
        age.setTime(ageMS);
        ageYear = age.getFullYear() - 1970;

        return ageYear;
    }

    function ubahMaklumatJKDB(selectedData, Daerah, Parlimen, DUN) {
        if (selectedData) {
            // Update the input fields with the selected JKDB data
            for (var i = 0; i < Daerah.length; i++) {
                if (Daerah[i].koddaerah == selectedData.daerah) {
                    $('#daerah').val(Daerah[i].koddaerah); //actual value passed to db
                    $('#daerahView').val(Daerah[i].namadaerah); //view only field for readability
                }
            }
            for (var i = 0; i < Parlimen.length; i++) {
                if (Parlimen[i].kodparlimen == selectedData.daerah) {
                    $('#parlimen').val(Parlimen[i].kodparlimen);
                    $('#parlimenView').val(Parlimen[i].namaparlimen); //view only field for readability
                }
            }
            for (var i = 0; i < DUN.length; i++) {
                if (DUN[i].koddun == selectedData.dun) {
                    $('#dun').val(DUN[i].koddun);
                    $('#dunView').val(DUN[i].namadun); //view only field for readability
                }
            }
        } else {
            // Clear the input fields if no data is selected
            $('#daerah').val('');
            $('#parlimen').val('');
            $('#dun').val('');
        }
    }

    function getJKDBData(selectedValue) {
        // Assuming you have a JavaScript array `jkdbData` containing all JKDB data
        // You can modify this function based on how your data is structured
        var jkdbData = @json($jkdb);
        for (var i = 0; i < jkdbData.length; i++) {
            if (jkdbData[i].id_jkdb == selectedValue) {
                return jkdbData[i];
            }
        }
        return null; // Return null if no matching data found
    }

    $('#id_jkdb').on("change", function () { 
        var selectedValue = $(this).val();
        console.log(selectedValue);
        var selectedData = getJKDBData(selectedValue);
        var Daerah = @json($daerah);
        var Parlimen = @json($parlimen);
        var DUN = @json($dun);
        ubahMaklumatJKDB(selectedData, Daerah, Parlimen, DUN); 
    });

    $('#pendidikan').on("change", function() {
        var selectedValue = $(this).val();
        var inputFieldContainer = document.getElementById('hidePendidikLainInput');

        if (selectedValue === '4') {
            inputFieldContainer.style.display = 'block';
        } else {
            inputFieldContainer.style.display = 'none';
        }
    });
});
</script> 
@endpush