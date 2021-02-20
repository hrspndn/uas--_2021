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
            <a href="{{url('admin/add/pelanggan')}}" class="btn btn-warning fa fa-plus mb-2"></a>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort">No</th>
                            <th scope="col" class="sort">Nama Pelanggan</th>
                            <th scope="col" class="sort">Nomor Telepon</th>
                            <th scope="col" class="sort">Status</th>
                            <th scope="col" class="sort">Action</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach($data as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->nama_pelanggan}}</td>
                            <td>{{$row->no_telp}}</td>
                            <td>{{$row->status}}</td>
                            <td>
                                <a href="" class="fa fa-edit btn btn-warning"></a>
                                <a href="" class="fa fa-trash-alt btn btn-danger"></a>
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