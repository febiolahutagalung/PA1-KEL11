@extends('layout.admin')

@section('content')

<div class="container">
    <h1 class="my-4">Tambah Data Donasi</h1>
    <form action="/admin/tambahdonasi" method="POST">
        @csrf
        <div class="mb-3">
            <label for="namapemberi" class="form-label">Nama Pemberi</label>
            <input type="text" class="form-control" id="namapemberi" name="namapemberi">
             @error('namapemberi')
                    <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
            @error('tanggal')
                    <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Donasi</label>
            <select class="form-control" id="jenis" name="jenis">
                <option value="Pembangunan">Pembangunan</option>
                <option value="DanaPensiun">Dana Pensiun</option>
                <option value="PeduliMasyarakat">Peduli Masyarakat</option>
                <option value="Lansia">Lansia</option>
                <option value="SekolahMinggu">Sekolah Minggu</option>
                <option value="RemajaNaposo">Remaja/Naposobulung</option>
                <option value="Lainnya">Lainnya</option>
                <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlahdonasi" class="form-label">Jumlah Donasi</label>
            <input type="number" class="form-control" id="jumlahdonasi" name="jumlahdonasi">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
