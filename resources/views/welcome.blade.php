@extends('layouts.layout')

@section('title','eJKDB - Borang Permohonan')

@section('main-content')
<div class="container applicationFormHeading">
    <h1>Borang Permohonan</h1>
</div>
<div class="container-fluid borang_ejkdb">
    <form id="borang_ejkdb" action="" method="post">
        @csrf
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;margin-bottom:40px;">
            <span class="step">BAHAGIAN A,B,C</span>
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path style="fill: gray" d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
            <span class="step">BAHAGIAN D,E,F</span>
        </div>
        <div class="container tab">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN A : MAKLUMAT PERUMAHAN</b></h5></div>
            <div class="container row justify-content-center">
                <div class="form-group row mt-3 mb-3 w-50">
                    <label for="namajkdb" class="col-sm-2 col-form-label">Nama JKDB:</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="namajkdb" name="name" aria-label="namajkdb-selector">
                            <option disabled selected value>Pilih Nama JKDB</option>
                            <option value="1">Taman Semarak</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-50">
                    <label for="negeri" class="col-sm-2 col-form-label">Negeri:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="negeri" name="negeri">
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-50">
                    <label for="daerah" class="col-sm-2 col-form-label">Daerah:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="daerah" name="daerah">
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-50">
                    <label for="parlimen" class="col-sm-2 col-form-label">Parlimen:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="parlimen" name="parlimen">
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-50">
                    <label for="dun" class="col-sm-2 col-form-label">DUN:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dun" name="dun">
                    </div>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="form-group row mb-3 w-50">
                    <label for="jawatan" class="col-sm-2 col-form-label">Jawatan:</label>
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
                <label for="namapenuh" class="col-sm-2 col-form-label">Nama Penuh:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namapenuh" name="namapenuh">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nomIC" class="col-sm-2 col-form-label">No. KP:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nomIC" name="nomIC">
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="row col-sm-9">
                    <label for="tarikhlahir" class="col-sm-3 col-form-label">Tarikh Lahir:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tarikhlahir" name="tarikhlahir">
                    </div>
                </div>
                <div class="row col-sm-3">
                    <label for="umur" class="col-sm-2 col-form-label">Umur: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="umur" name="umur">
                    </div>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="bangsa" class="col-sm-2 col-form-label">Bangsa:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bangsa" name="bangsa">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat Mastautin:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="numPhone" class="col-sm-2 col-form-label">No. Telefon:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="numPhone" name="numPhone">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="namaBank" class="col-sm-2 col-form-label">Nama & No Akaun Bank:</label>
                <div class="col-sm-10 mb-3">
                    <input type="text" class="form-control mb-1" id="namaBank" name="namaBank">
                    <input type="text" class="form-control" id="noAkaunBank" name="noAkaunBank">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="lampiranBank" class="col-sm-2 col-form-label">Lampiran Bank:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="lampiranBank" name="lampiranBank">
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="partiKomponenKerajaan" class="col-sm-2 col-form-label">Parti Komponen Kerajaan yang diwakili:</label>
                <div class="col-sm-10 mb-3">
                    <input type="text" class="form-control mb-1" id="partiKomponenKerajaan" name="partiKomponenKerajaan">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN C : MAKLUMAT PEKERJAAN</b></h5></div>
            <div class="container">
                <h6>Sila tanda mana yang berkenaan:</h6>
            </div>
        </div>
        <div class="container tab">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN D : MAKLUMAT PENDIDIKAN</b></h5></div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN E : MAKLUMAT KESIHATAN</b></h5></div>
        </div>
        <div class="container">
            <div class="borang_ejkdb_heading"><h5><b>BAHAGIAN F : PENGAKUAN</b></h5></div>
        </div>
    </form>
</div>

@endsection

@section('scripts')
@endsection