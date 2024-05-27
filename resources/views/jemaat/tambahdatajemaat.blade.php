@extends('layout.admin')

@section('content')
<div class="container">
    <h1 class="my-4">Tambah Data Jemaat</h1>
    <form action="/admin/tambahdatajemaat" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan nama lengkap">
            @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tanggallahir') is-invalid @enderror" id="tanggallahir" name="tanggallahir">
            @error('tanggallahir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-control @error('jeniskelamin') is-invalid @enderror" id="jeniskelamin" name="jeniskelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jeniskelamin')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan alamat">
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sektor" class="form-label">Sektor</label>
            <input type="text" class="form-control @error('sektor') is-invalid @enderror" id="sektor" name="sektor" placeholder="Masukkan sektor">
            @error('sektor')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="statusbabtis" class="form-label">Status Babtis</label>
            <select class="form-control @error('statusbabtis') is-invalid @enderror" id="statusbabtis" name="statusbabtis">
                <option value="Sudah babtis">Sudah Babtis</option>
                <option value="Belum babtis">Belum Babtis</option>
            </select>
            @error('statusbabtis')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
