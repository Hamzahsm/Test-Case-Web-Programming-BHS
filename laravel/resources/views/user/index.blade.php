@extends('layouts.auth')
@section('auth')
    <div class="container mt-5">
        @if (count($data))
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Create At</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ Storage::url($item->foto_profile) }}" alt="" width="100" height="100" class="img-fluid"></td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="#"><button class="btn btn-warning">Lihat</button></a>
                            <a href="#"><button class="btn btn-primary">Edit</button></a>
                            <a href="#"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            
        @else
        <p>Hi, {{ Auth::user()->name }}</p>
        <p>Mari mulai buat CV Online pertama Anda !</p>
        <a href="{{ route('users.index') }}">
            <button class="btn btn-primary"><i class="bi bi-cloud-arrow-up"></i> Buat Sekarang</button>
        </a>
            
        @endif
    </div>
@endsection