@extends('layouts.auth')
@section('auth')
    <div class="container">
        <h1 class="fs-3">Buat CV</h1>
        <p class="fst-italic">Isilah Form Berikut !</p>

        <div class="container-fluid">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoopss!</strong> Aksi Gagal! <br><br>
                    <ul>
                        @foreach ($errors as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="mb-3">
                <label for="foto_profile" class="form-label">Foto Profile</label>
                <input type="file" class="form-control" id="foto_profile" name="foto_profile" value="{{ old('foto_profile') }}">
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama"  value="{{ old('nama') }}">
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" id="nama" name="role" value="{{ old('role') }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
            </div>

            <div class="mb-3">
                <label for="pendidikan" class="form-label"> Pendidikan </label>
                <textarea name="pendidikan" id="editor" cols="30" rows="10" class="form-control" value="{{ old('pendidikan') }}"></textarea>
            </div>

            <div class="mb-3">
                <label for="training" class="form-label">Training / Workshop</label>
                <textarea name="training" id="training" cols="30" rows="10" class="form-control" value="{{ old('training') }}" ></textarea>
            </div>

            <div class="mb-3">
                <label for="skill" class="form-label">Skill</label>
                <textarea name="skill" id="skill" cols="30" rows="10" class="form-control" value="{{ old('skill') }}" ></textarea>
            </div>

            <div class="mb-3">
                <label for="pengalaman_kerja" class="form-label">Pengalaman</label>
                <textarea name="pengalaman_kerja" id="pengalaman_kerja" cols="30" rows="10" class="form-control" value="{{ old('pengalaman_kerja') }}" ></textarea>
            </div>
            
            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
    </div>
@endsection