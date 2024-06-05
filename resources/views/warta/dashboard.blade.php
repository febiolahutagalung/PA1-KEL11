@extends('layout.admin')
@section('content')
<style>
    .small-box {
        color: white;
        padding: 20px;
        border-radius: 5px;
        position: relative;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }

    .small-box:hover {
        transform: scale(1.05);
    }

    .small-box .icon {
        font-size: 60px;
        top: -10px;
        right: 10px;
        opacity: 0.4;
        position: absolute;
    }

    .small-box-footer {
        color: white;
        text-decoration: none;
        display: block;
        margin-top: 10px;
    }

    .dashboard-row {
        margin-top: 20px;
    }

    .small-box-link {
        color: inherit;
        text-decoration: none;
    }

    .inner p {
        font-size: 18px;
        margin: 0;
    }
</style>
<div class="container">
    <h1>Dashboard</h1>
    <hr>
</div>

<div class="row dashboard-row">
    <div class="col-lg-4 col-md-6 col-12">
        <!-- small box -->
        <a href="/admin/warta" class="small-box-link">
            <div class="small-box" style="background-color: #FF5733;">
                <div class="inner">
                    <p>Warta Jemaat</p>
                </div>
                <div class="icon">
                    <i class="ion ion-clipboard"></i>
                </div>
                <div class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></div>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
        <!-- small box -->
        <a href="/admin/pengurus" class="small-box-link">
            <div class="small-box" style="background-color: #FFB533;">
                <div class="inner">
                    <p>Pengurus</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <div class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></div>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
        <!-- small box -->
        <a href="/admin/faq" class="small-box-link">
            <div class="small-box" style="background-color: #33C4FF;">
                <div class="inner">
                    <p>Faq</p>
                </div>
                <div class="icon">
                    <i class="ion ion-help"></i>
                </div>
                <div class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></div>
            </div>
        </a>
    </div>
</div>

<div class="row dashboard-row">
    <div class="col-lg-3 col-md-6 col-12">
        <!-- small box -->
        <a href="/admin/datajemaat" class="small-box-link">
            <div class="small-box" style="background-color: #5CFF33;">
                <div class="inner">
                    <p>Data Jemaat</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <div class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <!-- small box -->
        <a href="/admin/galeri" class="small-box-link">
            <div class="small-box" style="background-color: #33A1FF;">
                <div class="inner">
                    <p>Galeri</p>
                </div>
                <div class="icon">
                    <i class="ion ion-image"></i>
                </div>
                <div class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <!-- small box -->
        <a href="/admin/jadwalibadah" class="small-box-link">
            <div class="small-box" style="background-color: #AA33FF;">
                <div class="inner">
                    <p>Jadwal Ibadah</p>
                </div>
                <div class="icon">
                    <i class="ion ion-folder"></i>
                </div>
                <div class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <!-- small box -->
        <a href="/admin/donasi" class="small-box-link">
            <div class="small-box" style="background-color: #FF3333;">
                <div class="inner">
                    <p>Donasi</p>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
                <div class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></div>
            </div>
        </a>
    </div>
</div>

@endsection