@extends('layouts.layout')

@section('title','eJKDB - Borang Permohonan')

@section('main-content')
<div class="container">
    <h1 class="applicationFormHeading">Borang Permohonan</h1>
</div>
<div class="container borang">
    <form id="borang_ejkdb" action="" method="post">
        @csrf
    </form>
</div>

@endsection

@section('scripts')
@endsection