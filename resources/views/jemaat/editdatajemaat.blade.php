@extends('layout.admin')

@section('content')
<div class="container">
    <a href="{{url('admin/datajemaat')}}" class="btn btn-success mb-3">back</a>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ url('/admin/updatedatajemaat/'.$datajemaat->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_keluarga" class="form-label">Nama Keluarga</label>
                    <input type="text" class="form-control @error('nama_keluarga') is-invalid @enderror" id="nama_keluarga" name="nama_keluarga" placeholder="Masukkan nama keluarga">
                    @error('nama_keluarga')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_ayah" class="form-label">Nama Ayah</label>
                    <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah" placeholder="Masukkan nama ayah">
                    @error('nama_ayah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir_ayah" class="form-label">Tanggal Lahir Ayah</label>
                    <input type="date" class="form-control @error('tgl_lahir_ayah') is-invalid @enderror" id="tgl_lahir_ayah" name="tgl_lahir_ayah">
                    @error('tgl_lahir_ayah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status_babtis_ayah" class="form-label">Status Babtis Ayah</label>
                    <input type="text" class="form-control @error('status_babtis_ayah') is-invalid @enderror" id="status_babtis_ayah" name="status_babtis_ayah" placeholder="Masukkan status babtis ayah">
                    @error('status_babtis_ayah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat_ayah" class="form-label">Alamat Ayah</label>
                    <input type="text" class="form-control @error('alamat_ayah') is-invalid @enderror" id="alamat_ayah" name="alamat_ayah" placeholder="Masukkan alamat ayah">
                    @error('alamat_ayah')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <!-- Isi Form untuk Data Ibu -->
                <div class="mb-3">
                    <label for="nama_ibu" class="form-label">Nama Ibu</label>
                    <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" placeholder="Masukkan nama ibu">
                    @error('nama_ibu')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir_ibu" class="form-label">Tanggal Lahir Ibu</label>
                    <input type="date" class="form-control @error('tgl_lahir_ibu') is-invalid @enderror" id="tgl_lahir_ibu" name="tgl_lahir_ibu">
                    @error('tgl_lahir_ibu')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status_babtis_ibu" class="form-label">Status Babtis Ibu</label>
                    <input type="text" class="form-control @error('status_babtis_ibu') is-invalid @enderror" id="status_babtis_ibu" name="status_babtis_ibu" placeholder="Masukkan status babtis ibu">
                    @error('status_babtis_ibu')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat_ibu" class="form-label">Alamat Ibu</label>
                    <input type="text" class="form-control @error('alamat_ibu') is-invalid @enderror" id="alamat_ibu" name="alamat_ibu" placeholder="Masukkan alamat ibu">
                    @error('alamat_ibu')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                  
                <!-- Isi Form untuk Data Anak-anak -->
                <div id="anakContainer">
                    <div class="mb-3 anak">
                        <label for="nama_anak" class="form-label">Nama Anak</label>
                        <input type="text" class="form-control @error('nama_anak.*') is-invalid @enderror" name="nama_anak[]" placeholder="Masukkan nama anak">
                        @error('nama_anak.*')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir_anak" class="form-label">Tanggal Lahir Anak</label>
                        <input type="date" class="form-control @error('tgl_lahir_anak') is-invalid @enderror" id="tgl_lahir_anak" name="tgl_lahir_anak">
                        @error('tgl_lahir_anak')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status_babtis_anak" class="form-label">Status Babtis Anak</label>
                        <input type="text" class="form-control @error('status_babtis_anak') is-invalid @enderror" id="status_babtis_anak" name="status_babtis_anak" placeholder="Masukkan status babtis anak">
                        @error('status_babtis_anak')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat_anak" class="form-label">Alamat Anak</label>
                        <input type="text" class="form-control @error('alamat_anak') is-invalid @enderror" id="alamat_amak" name="alamat_anak" placeholder="Masukkan alamat anak">
                        @error('alamat_anak')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                </div>
                <button class="btn btn-primary update-btn" type="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
@endsection


