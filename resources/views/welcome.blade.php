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
        <div style="text-align:center;margin-top:40px;">
            <span class="step">BAHAGIAN A,B,C</span>
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path style="fill: gray" d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
            <span class="step">BAHAGIAN D,E,F</span>
        </div>
    </form>
</div>

@endsection

@section('scripts')
@endsection