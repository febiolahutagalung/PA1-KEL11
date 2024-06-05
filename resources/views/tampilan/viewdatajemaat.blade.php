@extends('layout.user')

@section('container')
<style>
    body {
        padding-top: 80px;
        /* Adjust this value based on the height of your navbar */
    }

    .container {
        margin-top: 100px;
        /* Ensure enough space to avoid overlapping with the navbar */
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .family-header {
        margin-bottom: 20px;
        text-align: center;
    }

    .family-details {
        margin-bottom: 20px;
    }

    .family-table {
        width: 100%;
        border-collapse: collapse;
    }

    .family-table th,
    .family-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .family-table th {
        background-color: #f2f2f2;
    }

    .back-button {
        display: block;
        width: 100%;
        max-width: 200px;
        margin: 20px auto;
        padding: 10px;
        text-align: center;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .back-button:hover {
        background-color: #0056b3;
    }
</style>

<div class="container">
    <div class="family-header">
        <h1>Data Keluarga</h1>
        <h2>{{ $jemaat->namakeluarga }}</h2>
    </div>

    <div class="family-details">
        <table class="family-table">
            <tr>
                <th>Nama Ayah</th>
                <td>{{ $keluarga->first()->namaayah }}</td>
            </tr>
            <tr>
                <th>Nama Ibu</th>
                <td>{{ $keluarga->first()->namaibu }}</td>
            </tr>
            <tr>
                <th>Nama Anak</th>
                <td>
                    <ul>
                        @foreach($keluarga as $item)
                        <li>{{ $item->namaanak }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        </table>
    </div>

    <a href="{{ url('/datajemaat') }}" class="back-button">Back</a>
</div>
@endsection