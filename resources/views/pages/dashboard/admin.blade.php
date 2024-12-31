@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Dashboard</h1>
        {{-- @dd(auth()->check()) --}}
    </div>
</div>
@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 30vh;">
        <img src="{{ asset('templates/img/tiket.png') }}" alt="L" class="img-fluid" style="max-width: 300px;">
    </div>

    <div class="text-center">
        <h2>Halo Admin, selamat datang di Online Tiket!</h2>
        <p>Anda dapat dengan mudah mengelola seluruh pemesanan, memantau transaksi, dan memastikan semua operasional berjalan lancar.</p>
    </div>
@endsection

