@extends('layouts.guest')
@section('guest')
    <div class="container mt-5">
        <div class="text-start">
            <h1>Selamat Datang di Portal CV !</h1>
            <h2>Buat CV secara Kilat, SatSet !</h2>
            <ol>
                <li>Daftar / Registrasi</li>
                <li>Isi data diri</li>
                <li>Publish & Share !</li>
            </ol>
            <a href="{{ route('register') }}"><button class="btn btn-primary mb-3">Mulai Sekarang </button></a>
        </div>
    </div>
@endsection

