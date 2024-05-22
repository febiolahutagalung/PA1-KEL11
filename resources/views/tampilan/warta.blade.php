<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warta Jemaat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <style>
        .text-warta {
            font-weight: 700;
            color: #F7941E;
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: center;
            margin-bottom: 10px;
        }
        .text-warta:hover {
            color: #FFA343;
        }
        .card {
            background: #F1F2F2;
            border-radius: 5px;
            height: 350px; /* Adjust height as needed */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 15px;
            text-align: center;
        }
        .img-fluid {
            max-height: 150px; /* Adjust height as needed */
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .card-date {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
        }
    </style>
</head>
<body>

@extends('layout.user')

@section('container')
    <!-- Header Start -->
    <header class="bg-breadcrumb" style="background-image: url('{{ URL::asset('Template/img/bg1.png') }}');">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Warta Jemaat</h3>
            <ol class="breadcrumb justify-content-center mb-0">
            </ol>
        </div>
    </header>
    <!-- Header End -->

    <!-- Packages Start -->
    <div class="packages py-5">
        <div class="container py-5" style="padding-left: 7rem !important; padding-right: 7rem !important;">
            <div class="mx-auto text-center mb-5">
                <h5 class="section-title px-3">-</h5>
                <h1 class="mb-0">Warta Jemaat</h1>
            </div>
            <div class="row">
                @foreach ($dataWarta as $item)
                    @php
                        $formattedDate = \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y');
                    @endphp
                    <div class="col-lg-3 mt-4">
                        <div class="card">
                            <a href="{{ asset('assets/file-warta/'.$item->pdf ?? '') }}" download="{{ asset('assets/file-warta/'.$item->pdf ?? '') }}">
                                <span class="text-warta">{{ $item->judul }}</span>
                            </a>
                            <div class="card-body">
                                <a href="{{ URL::asset('Admin/photo/'.$item->photo) }}" data-lightbox="Image">
                                    <img src="{{ URL::asset('Admin/photo/'.$item->photo) }}" class="img-fluid w-100" alt="Image">
                                </a>
                            </div>
                            <div class="card-date">
                                {{ $formattedDate }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

</body>
</html>
