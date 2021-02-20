@extends('layout.main')
@section('content')
<!-- Card header -->
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header border-0">
                <h3 class="mb-0">Daftar Pelanggan</h3>
            </div>
            <!-- Light table -->
            <a href="{{url('/add/pelanggan')}}" class="btn btn-warning fa fa-plus mb-2"></a>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort">No</th>
                            <th scope="col" class="sort">Nama Barang</th>
                            <th scope="col" class="sort">Kategori Barang</th>
                            <th scope="col" class="sort">Satuan</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach($data as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->id_barang}}</td>
                            <td>{{$row->nama_barang}}</td>
                            <td>{{$row->kategori_id}}</td>
                            <td>{{$row->satuan_id}}</td>
                            <td>Rp,{{number_format($row->harga_barang)}}</td>
                            <td>
                                <a href="{{url('admin/edit/barang')}}/{{$row->id_barang}}" class="fa fa-edit btn btn-warning"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
                <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <i class="fas fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2 <span class="sr-only"></span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fas fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

@endSection