@extends('layout.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-6 col-md-6">

        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="card-title text-uppercase text-muted mb-0">Daftar Transaksi</p>
                            <span class="font-weight-bold mb-0"></span>
                        </div>
                        <div class="col-auto">
                            <div class="ni ni-circle-08 bg-gradient-red text-white rounded-circle shadow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body btn" href="">
                    <div class="row">
                        <div class="col">
                            <p class="card-title text-uppercase text-muted mb-0">Daftar Pelanggan</p>
                            <span class="font-weight-bold mb-0"></span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card card-stats btn" href="">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="card-title text-uppercase text-muted mb-0">Daftar Barang</p>

                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body btn" href="">
                    <div class="row">
                        <div class="col">
                            <p class="card-title text-uppercase text-muted mb-0">Daftar Transaksi</p>
                            <span class="font-weight-bold mb-0"></span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="ni ni-money-coins"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection