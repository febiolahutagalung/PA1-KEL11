@extends('layout.admin')

@section('content')
<div class="container">
    <a href="{{ url('admin/tambahdatajemaat') }}" class="btn btn-success mb-3">Tambah Data Jemaat</a>
    <h1>Daftar Seluruh Jemaat</h1>
    @if($allDatajemaat->isEmpty())
        <p>Maaf, tidak ada data jemaat yang tersedia saat ini.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Keluarga</th>
                    <th>Nama Ayah</th>
                    <th>Tanggal Lahir Ayah</th>
                    <th>Alamat Ayah</th>
                    <th>Status Babtis Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Tanggal Lahir Ibu</th>
                    <th>Alamat Ibu</th>
                    <th>Status Babtis Ibu</th>
                    <th>Nama Anak</th>
                    <th>Tanggal Lahir Anak</th>
                    <th>Jenis Kelamin Anak</th>
                    <th>Alamat Anak</th>
                    <th>Status Babtis Anak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allDatajemaat as $datajemaat)
                <tr>
                    <td>{{ $datajemaat->nama_keluarga }}</td>
                    <td>{{ $datajemaat->nama_ayah }}</td>
                    <td>{{ $datajemaat->tgl_lahir_ayah }}</td>
                    <td>{{ $datajemaat->alamat_ayah }}</td>
                    <td>{{ $datajemaat->status_babtis_ayah }}</td>
                    <td>{{ $datajemaat->nama_ibu }}</td>
                    <td>{{ $datajemaat->tgl_lahir_ibu }}</td>
                    <td>{{ $datajemaat->alamat_ibu }}</td>
                    <td>{{ $datajemaat->status_babtis_ibu }}</td>
                    <td colspan="5">
                        @if($datajemaat->anak->isEmpty())
                            <p>Tidak ada data anak.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Anak</th>
                                        <th>Tanggal Lahir Anak</th>
                                        <th>Jenis Kelamin Anak</th>
                                        <th>Alamat Anak</th>
                                        <th>Status Babtis Anak</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datajemaat->anak as $anak)
                                    <tr>
                                        <td>{{ $anak->nama }}</td>
                                        <td>{{ $anak->tgl_lahir }}</td>
                                        <td>{{ $anak->jeniskelamin }}</td>
                                        <td>{{ $anak->alamat }}</td>
                                        <td>{{ $anak->status_babtis }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('/admin/editdatajemaat/'.$datajemaat->id) }}" class="btn btn-primary ml-3 mb-2">Edit</a>
                        <form action="{{ url('/admin/hapusdatajemaat/'.$datajemaat->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ml-3" onclick="return confirm('Anda yakin ingin menghapus data jemaat ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
