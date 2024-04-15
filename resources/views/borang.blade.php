@extends('layout.master')

@section('title','eJKDB - Borang Permohonan')

@push('plugin-styles')
{{-- <link rel="stylesheet" href="{{ asset('/assets/plugins/plugin.css') }}"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/borang-style.css') }}">
@endpush

@section('content')
<div class="container applicationFormHeading">
<h1>Borang Permohonan</h1>
</div>
<div class="container-fluid borang_ejkdb">
<form id="borang_ejkdb" action="/submitpermohonan" method="post">
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
                    <label for="namajkdb" class="col-sm-2 col-form-label"><b>Nama JKDB:</b></label>
                    <div class="col-sm-10">
                        <select class="form-select" id="namajkdb" name="name" aria-label="namajkdb-selector">
                            <option disabled selected value>Pilih Nama JKDB</option>
                            <option value="1">Taman Semarak</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-75">
                    <label for="negeri" class="col-sm-2 col-form-label"><b>Negeri :</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="negeri" name="negeri">
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-75">
                    <label for="daerah" class="col-sm-2 col-form-label"><b>Daerah :</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="daerah" name="daerah">
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-75">
                    <label for="parlimen" class="col-sm-2 col-form-label"><b>Parlimen :</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="parlimen" name="parlimen">
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-75">
                    <label for="dun" class="col-sm-2 col-form-label"><b>DUN :</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dun" name="dun">
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-75">
                    <label for="jawatan" class="col-sm-2 col-form-label"><b>Jawatan :</b></label>
                    <div class="col-sm-10">
                        <select class="form-select" id="jawatan" name="jawatan" aria-label="jawatan-selector">
                            <option disabled selected value>Pilih Jawatan</option>
                            <option value="1">Pengerusi</option>
                            <option value="2">Naib Pengerusi</option>
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
                    <input type="text" class="form-control" id="namapenuh" name="namapenuh">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nomIC" class="col-sm-2 col-form-label"><b>No. KP :</b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nomIC" name="nomIC">
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="row col-sm-9">
                    <label for="tarikhlahir" class="col-sm-3 col-form-label"><b>Tarikh Lahir :</b></label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="tarikhlahir" name="tarikhlahir">
                    </div>
                </div>
                <div class="row col-sm-3">
                    <label for="umur" class="col-sm-3 col-form-label"><b>Umur:</b></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="umur" name="umur">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="bangsa" class="col-sm-2 col-form-label"><b>Bangsa :</b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bangsa" name="bangsa">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label"><b>Alamat Mastautin :</b></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="numPhone" class="col-sm-2 col-form-label"><b>No. Telefon :</b></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="numPhone" name="numPhone">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="email" class="col-sm-2 col-form-label"><b>Email :</b></label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="namaBank" class="col-sm-2 col-form-label"><b>Nama & No Akaun Bank :</b></label>
                <div class="col-sm-10 mb-3">
                    <input type="text" class="form-control mb-1" id="namaBank" name="namaBank">
                    <input type="text" class="form-control" id="noAkaunBank" name="noAkaunBank">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="lampiranBank" class="col-sm-2 col-form-label"><b>Lampiran Bank :</b></label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="lampiranBank" name="lampiranBank">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="partiKomponenKerajaan" class="col-sm-2 col-form-label"><b>Parti Komponen Kerajaan yang diwakili :</b></label>
                <div class="col-sm-10 mb-3">
                    <input type="text" class="form-control mb-1" id="partiKomponenKerajaan" name="partiKomponenKerajaan">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN C : MAKLUMAT PEKERJAAN</b></h5></div>
            <div class="container mt-3">
                <h5><b>Sila tanda mana yang berkenaan:</b></h5>
                <div class="container dashed-line-table-selector justify-content-center mt-3 mb-3">
                    <table style="margin: 0 auto;">
                        <tr>
                            <td width="10%">
                                <input type="radio" id="pekerjaan" class="input-box" name="pekerjaan" value="Penjawat Awam">
                                <label for="pekerjaan"><h6>Penjawat Awam</h6></label>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%">
                                <input type="radio" id="pekerjaan" class="input-box" name="pekerjaan" value="Penjawat Swasta">
                                <label for="pekerjaan"><h6>Penjawat Swasta</h6></label>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%">
                                <input type="radio" id="pekerjaan" class="input-box" name="pekerjaan" value="Bekerja Sendiri">
                                <label for="pekerjaan"><h6>Bekerja Sendiri</h6></label>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%">
                                <input type="radio" id="pekerjaan" class="input-box" name="pekerjaan" value="Suri Rumah/Tidak Bekerja/Pesara">
                                <label for="pekerjaan"><h6>Suri Rumah/ Tidak Bekerja / Pesara</h6></label>
                            </td>
                        </tr>
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
                    <label for="namajkdb" class="col-sm-2 col-form-label"><b>Tahap Pendidikan Tertinggi:</b></label>
                    <div class="col-sm-10">
                        <select class="form-select" id="namajkdb" name="name" aria-label="namajkdb-selector">
                            <option disabled selected value>Pilih Tahap Pendidikan Tertinggi Anda</option>
                            <option value="1">SPM ATAU SETARAF</option>
                            <option value="2">DIPLOMA</option>
                            <option value="3">IIJAZAH</option>
                            <option value="4">LAIN-LAIN</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3 mb-3 w-75">
                    <input type="file" class="form-control" id="sijilpendidikantertinggi" name="sijilpendidikantertinggi">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN E : MAKLUMAT KESIHATAN</b></h5></div>
            <div class="container row justify-content-center mt-3 mb-3">
                <div class="row text-center">
                    <h6>Saya 
                        <label class="radio-inline">
                            <input type="radio" name="haveIllness" value="yes" checked> menghidapi/
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="haveIllness" value="no"> tidak menghidapi
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
                            <td width="10%" style="text-align:center"><input type="radio" id="akuanmuflis" class="input-box" name="akuanmuflis" value="Yes"></td>
                            <td width="10%" style="text-align:center"><input type="radio" id="akuanmuflis" class="input-box" name="akuanmuflis" value="No"></td>
                        </tr>
                        <tr>
                            <td><h6>ii.SAYA PERNAH MEMPUNYAI REKOD JENAYAH</h6></td>
                            <td style="text-align:center"><input type="radio" id="akuanjenayah" class="input-box" name="akuanjenayah" value="Yes"></td>
                            <td style="text-align:center"><input type="radio" id="akuanjenayah" class="input-box" name="akuanjenayah" value="No"></td>
                        </tr>
                        <tr>
                            <td><h6>iii.SAYA PERNAH TERLIBAT DENGAN PENYALAHGUNAAN DADAH</h6></td>
                            <td style="text-align:center"><input type="radio" id="akuandadah" class="input-box" name="akuandadah" value="Yes"></td>
                            <td style="text-align:center"><input type="radio" id="akuandadah" class="input-box" name="akuandadah" value="No"></td>
                        </tr>
                        <tr>
                            <td><h6>iv.SAYA SIHAT MENTAL DAN FIZIKAL UNTUK MELAKSANAKAN TUGAS YANG AKAN DIBERIKAN</h6></td>
                            <td style="text-align:center"><input type="radio" id="akuankesihatan" class="input-box" name="akuankesihatan" value="Yes"></td>
                            <td style="text-align:center"><input type="radio" id="akuankesihatan" class="input-box" name="akuankesihatan" value="No"></td>
                        </tr>
                    </table>
                </div>
                <h6><center>Semua keterangan saya di bahagian A-F adalah benar. Bersama-sama ini juga disertakan salinan Dokumen berikut:</center></h6>
                <table class="table mt-3 mb-3" id="tablependidikan">
                    <tr>
                        <th>#</th>
                        <th>DOKUMEN</th>
                        <th>TANDAKAN (/)</th>
                        <th>LAMPIRAN</th>
                    </tr>
                    <tr>
                        <td><b>1</b></td>
                        <td>GAMBAR PASSPORT</td>
                        <td><input type="checkbox" id="gambarpassport" name="gambarpassport" value="Yes"></td>
                        <td><input type="file" class="form-control" id="gambarpassportfile" name="gambarpassportfile"></td>
                    </tr>
                    <tr>
                        <td><b>2</b></td>
                        <td>SALINAN KAD PENGENALAN</td>
                        <td><input type="checkbox" id="kadIC" name="kadIC" value="Yes"></td>
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
        </div>
    </div>
</form>
</div>
@endsection

@push('plugin-scripts')
<script src="{{ asset('/assets/plugins/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
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
  });
</script> 
@endpush