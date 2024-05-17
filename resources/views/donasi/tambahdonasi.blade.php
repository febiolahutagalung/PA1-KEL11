@extends('layout.admin')

@section('content')

<div class="container">
    <h1 class="my-4">Tambah Data Donasi</h1>
    <form action="/admin/tambahdonasi" method="POST">
        @csrf
        <div class="mb-3">
            <label for="namapemberi" class="form-label">Nama Pemberi</label>
            <input type="text" class="form-control" id="namapemberi" name="namapemberi">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Donasi</label>
            <select class="form-control" id="jenis" name="jenis">
                <option value="pembangunan">Pembangunan</option>
                <option value="danapensiun">Dana Pensiun</option>
                <option value="pedulimasyarakat">Peduli Masyarakat</option>
                <option value="lansia">Lansia</option>
                <option value="sekolahminggu">Sekolah Minggu</option>
                <option value="remajanaposo">Remaja/Naposobulung</option>
                <option value="lainnya">Lainnya</option>
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
