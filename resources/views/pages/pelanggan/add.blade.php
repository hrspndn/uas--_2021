@extends('layout.main')
@section('content')
<!-- Card header -->
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header border-0">
                <form method="POST" action="{{ url('admin/store/pelanggan') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                        <input name="pelanggan" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
                        <input name="telepon" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="member">Member</option>
                            <option value="nonmember"> Non Member</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endSection