@extends('layouts.layout')

@section('title','eJKDB - Borang Permohonan')

@section('main-content')
<div class="container applicationFormHeading">
    <h1>Semakan Borang Permohonan</h1>
</div>
<div class="container-fluid borang_ejkdb">
    <form id="borang_ejkdb" action="/hantar" method="post">
        @csrf
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN A : MAKLUMAT PERUMAHAN</b></h5></div>
            <div class="container justify-content-center mb-3 mt-3 grid_table">
                <div><b>Nama JKDB</b>&nbsp;</div><div class="mb-3">&ensp;Taman Semarak</div>
                <div><b>Negeri</b>&nbsp;</div><div class="mb-3">&ensp;Sabah</div>
                <div><b>Daerah</b>&nbsp;</div><div class="mb-3">&ensp;Kota Belud</div>
                <div><b>Parlimen</b>&nbsp;</div><div class="mb-3">&ensp;P169 Kota Belud</div>
                <div><b>DUN</b>&nbsp;</div><div class="mb-3">&ensp;N11 Kadamaian</div>
                <div><b>Jawatan</b>&nbsp;</div><div class="mb-3">&ensp;Naib Pengerusi</div>
            </div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN B : MAKLUMAT PEMOHON</b></h5></div>
            <div class="container mb-3 mt-3 grid_table">
                <div><b>Nama Penuh</b>&nbsp;</div><div class="mb-3">&ensp;MUHD FARIS DANISH BIN ANTONI</div>
                <div><b>No. KP</b>&nbsp;</div><div class="mb-3">&ensp;99120312****</div>
                <div><b>Tarikh Lahir</b>&nbsp;</div><div class="mb-3">&ensp;03/12/1999 (25 Tahun)</div>
                <div><b>Bangsa</b>&nbsp;</div><div class="mb-3">&ensp;Dusun</div>
                <div><b>Alamat Mastautin</b>&nbsp;</div>
                <div class="mb-3">
                    &ensp;Kampung Tengkurus, Jalan Kem Paradise, 89150 Kota Belud, Sabah.
                </div>
                <div><b>No.Telefon</b>&nbsp;</div><div class="mb-3">&ensp;010-5819347</div>
                <div><b>Email</b>&nbsp;</div><div class="mb-3">&ensp;farisdanish.antoni@gmail.com</div>
                <div><b>Nama & No. Akaun Bank</b>&nbsp;</div><div class="mb-3">&ensp;BANK ISLAM BERHAD (10052021961011)</div>
                <div><b>Lampiran Bank</b>&nbsp;</div>
                <div class="mb-3">
                    &ensp;<a href="{{url('/storage/files/Penyata-Bank.pdf')}}">Penyata-Bank.pdf</a>
                </div>
                <div><b>Parti Komponen Kerajaan yang diwakili</b>&nbsp;</div><div class="mb-3">&ensp;XXXXXXXXXXX</div>
            </div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN C : MAKLUMAT PEKERJAAN</b></h5></div>
            <div class="container mt-3">
                <div class="container dashed-line-table-selector justify-content-center mt-3 mb-3">
                    <table style="margin: 0 auto;">
                        <tr>
                            <td width="10%">
                                <input type="radio" id="pekerjaan" class="input-box" name="pekerjaan" value="Penjawat Awam" checked>
                                <label for="penjawatAwam"><h6>Penjawat Awam (<a href="{{url('/storage/files/pengesahan pekerjaan.pdf')}}">Pengesahan.pdf</a>)</h6></label>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%">
                                <input type="radio" id="pekerjaan" class="input-box" name="pekerjaan" value="Penjawat Swasta" disabled>
                                <label for="penjawatAwam"><h6>Penjawat Swasta</h6></label>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%">
                                <input type="radio" id="pekerjaan" class="input-box" name="pekerjaan" value="Bekerja Sendiri" disabled>
                                <label for="penjawatAwam"><h6>Bekerja Sendiri</h6></label>
                            </td>
                        </tr>
                        <tr>
                            <td width="10%">
                                <input type="radio" id="pekerjaan" class="input-box" name="pekerjaan" value="Suri Rumah/Tidak Bekerja/Pesara" disabled>
                                <label for="penjawatAwam"><h6>Suri Rumah/ Tidak Bekerja / Pesara</h6></label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN D : MAKLUMAT PENDIDIKAN</b></h5></div>
            <div class="container row justify-content-center">
                <table class="table mt-3 mb-3" id="tablependidikan">
                    <tr>
                        <th>#</th>
                        <th>TAHAP PENDIDIKAN TERTINGGI</th>
                        <th>LAMPIRAN</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>SPM ATAU SETARAF</td>
                        <td>
                            {{-- <input type="file" class="form-control" id="sijilspmsetaraf" name="sijilspmsetaraf"> --}}
                            <a href="{{url('/storage/files/sijilspm.pdf')}}">sijilspm.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>DIPLOMA</td>
                        <td>
                            {{-- <input type="file" class="form-control" id="sijildiploma" name="sijildiploma"> --}}
                            <a href="{{url('/storage/files/sijildiploma.pdf')}}">sijildiploma.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>IIJAZAH</td>
                        <td>
                            {{-- <input type="file" class="form-control" id="sijilijazah" name="sijilijazah"> --}}
                            <a href="{{url('/storage/files/sijilijazah.pdf')}}">sijilijazah.pdf</a>
                        </td>
                    </tr>
                    {{-- <tr>
                        <td>4</td>
                        <td>LAIN-LAIN</td>
                        <td>
                            <input type="file" class="form-control" id="lain2sijil" name="lain2sijil">
                        </td>
                    </tr> --}}
                </table>
            </div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN E : MAKLUMAT KESIHATAN</b></h5></div>
            <div class="container row justify-content-center mt-3 mb-3">
                <div class="row text-center">
                    <h6>Saya {{--something here for menghidapi/tidak menghidapi--}} masalah kesihatan yang serius seperti berikut:</h6>
                </div>
                <div class="form-group row mb-3">
                    <label for="penyakit1" class="col-sm-2 col-form-label">Penyakit(i):</label>
                    <div class="col-sm-10">
                        {{-- <input type="text" class="form-control" id="penyakit1" name="penyakit1" placeholder="Nyatakan"> --}}
                        
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="penyakit2" class="col-sm-2 col-form-label">Penyakit(ii):</label>
                    <div class="col-sm-10">
                        {{-- <input type="text" class="form-control" id="penyakit2" name="penyakit2" placeholder="Nyatakan"> --}}
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="penyakit3" class="col-sm-2 col-form-label">Penyakit(iii):</label>
                    <div class="col-sm-10">
                        {{-- <input type="text" class="form-control" id="penyakit3" name="penyakit3" placeholder="Nyatakan"> --}}
                    </div>
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
                            <td width="10%" style="text-align:center"><input type="radio" id="akuanmuflis" class="input-box" name="akuanmuflis" value="Yes" disabled></td>
                            <td width="10%" style="text-align:center"><input type="radio" id="akuanmuflis" class="input-box" name="akuanmuflis" value="No" checked></td>
                        </tr>
                        <tr>
                            <td><h6>ii.SAYA PERNAH MEMPUNYAI REKOD JENAYAH</h6></td>
                            <td style="text-align:center"><input type="radio" id="akuanjenayah" class="input-box" name="akuanjenayah" value="Yes" disabled></td>
                            <td style="text-align:center"><input type="radio" id="akuanjenayah" class="input-box" name="akuanjenayah" value="No" checked></td>
                        </tr>
                        <tr>
                            <td><h6>iii.SAYA PERNAH TERLIBAT DENGAN PENYALAHGUNAAN DADAH</h6></td>
                            <td style="text-align:center"><input type="radio" id="akuandadah" class="input-box" name="akuandadah" value="Yes" disabled></td>
                            <td style="text-align:center"><input type="radio" id="akuandadah" class="input-box" name="akuandadah" value="No" checked></td>
                        </tr>
                        <tr>
                            <td><h6>iv.SAYA SIHAT MENTAL DAN FIZIKAL UNTUK MELAKSANAKAN TUGAS YANG AKAN DIBERIKAN</h6></td>
                            <td style="text-align:center"><input type="radio" id="akuankesihatan" class="input-box" name="akuankesihatan" value="Yes" checked></td>
                            <td style="text-align:center"><input type="radio" id="akuankesihatan" class="input-box" name="akuankesihatan" value="No" disabled></td>
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
                        <td>1</td>
                        <td>GAMBAR PASSPORT</td>
                        <td>
                            {{-- <input type="file" class="form-control" id="gambarpassportfile" name="gambarpassportfile"> --}}
                            <a href="{{url('/storage/files/gambarpassport.pdf')}}">passport.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>SALINAN KAD PENGENALAN</td>
                        <td>
                            {{-- <input type="file" class="form-control" id="kadICSalinan" name="kadICSalinan"> --}}
                            <a href="{{url('/storage/files/noKP.pdf')}}">noKP.pdf</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN G : PENGESAHAN</b></h5></div>
            {{-- <div class="applicationFormHeading text-center"><h4>SAYA MENYOKONG CALON INI.</h4></div> --}}
            <div class="applicationFormHeading text-center"><h4>SAYA TIDAK MENYOKONG CALON INI.</h4></div>
            <div class="container justify-content-center mb-3 mt-3 grid_table">
                <div><b>Nama</b>&nbsp;</div><div class="mb-3">&ensp;Ahmad bin Ali</div>
                <div><b>Jawatan</b>&nbsp;</div><div class="mb-3">&ensp;Mayor Bandaraya Kota Kinabalu</div>
                <div><b>Tarikh</b>&nbsp;</div><div class="mb-3">&ensp;01/04/2024</div>
            </div>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
            <button type="button" class="btn btn-success" id="disemakBtn" onclick="">Disemak</button>
            <button type="button" class="btn btn-danger" id="dikembaliBtn" onclick="">Dikembalikan</button>
            </div>
        </div>
    </form>
</div>

@endsection

@section('scripts')
@endsection