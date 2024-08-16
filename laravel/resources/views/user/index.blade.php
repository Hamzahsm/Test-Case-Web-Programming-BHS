@extends('layouts.auth')
@section('auth')
    <div class="container mt-5">
        <p>Hi, {{ Auth::user()->name }}</p>
        <p>Mari mulai buat CV Online pertama Anda !</p>
        <a href="{{ route('users.index') }}">
            <button class="btn btn-primary"><i class="bi bi-cloud-arrow-up"></i> Buat Sekarang</button>
        </a>
    </div>
@endsection