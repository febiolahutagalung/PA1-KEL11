@extends('layout.admin')

@section('content')
<div class="container">
    <a href="{{ route('admin.donasi.index') }}" class="btn btn-success mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('admin.donasi.update', $donasi->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Ini jika Anda menggunakan metode PUT untuk update -->
                <div class="form-group">
                    <label for="namapemberi">Nama Pemberi</label>
                    <input name="namapemberi" type="text" class="form-control @error('namapemberi') is-invalid @enderror" id="namapemberi" placeholder="Masukkan nama pemberi" value="{{ old('namapemberi', $donasi->namapemberi) }}">
                    @error('namapemberi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Pilih tanggal donasi" value="{{ old('tanggal', $donasi->tanggal) }}">
                    @error('tanggal')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Donasi</label>
                    <select name="jenis" class="form-control @error('jenis') is-invalid @enderror" id="jenis">
                        <option value="" disabled>Pilih jenis donasi</option>
                        <option value="pembangunan" {{ old('jenis', $donasi->jenis) == 'pembangunan' ? 'selected' : '' }}>Pembangunan</option>
                        <option value="danapensiun" {{ old('jenis', $donasi->jenis) == 'danapensiun' ? 'selected' : '' }}>Dana Pensiun</option>
                        <option value="pedulimasyarakat" {{ old('jenis', $donasi->jenis) == 'pedulimasyarakat' ? 'selected' : '' }}>Peduli Masyarakat</option>
                        <option value="lansia" {{ old('jenis', $donasi->jenis) == 'lansia' ? 'selected' : '' }}>Lansia</option>
                        <option value="sekolahminggu" {{ old('jenis', $donasi->jenis) == 'sekolahminggu' ? 'selected' : '' }}>Sekolah Minggu</option>
                        <option value="remajanaposo" {{ old('jenis', $donasi->jenis) == 'remajanaposo' ? 'selected' : '' }}>Remaja/Naposo</option>
                        <option value="lainnya" {{ old('jenis', $donasi->jenis) == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                    @error('jenis')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlahdonasi">Jumlah Donasi</label>
                    <input name="jumlahdonasi" type="number" class="form-control @error('jumlahdonasi') is-invalid @enderror" id="jumlahdonasi" placeholder="Masukkan jumlah donasi" value="{{ old('jumlahdonasi', $donasi->jumlahdonasi) }}">
                    @error('jumlahdonasi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                <button class="btn btn-primary update-btn" type="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <!-- Kolom kanan kosong untuk layout yang seimbang -->
        </div>
    </div>
</div>
@endsection
