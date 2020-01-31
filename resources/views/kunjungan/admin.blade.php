@extends('admin.layouts.app_main')

@section('content')
<div class="container">
    <div class="card">
        <h3 class="card-header text-center ">
            Daftar Kunjungan
        </h3>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="w-25 mb-4 ">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="ID / Nama / Tanggal" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Cari</button>
                    </div>
                </div>

            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pengunjung</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Waktu Kunjungan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ratna Sarumpaet</td>
                        <td>01-05-2019</td>
                        <td>09:30-10:15</td>
                        <td>
                            <h6><span class="badge badge-danger">Pending</span></h6>
                        </td>
                        <td>
                            <a href="{{ route('kunjungan.admin.detail', 1) }}" class="btn btn-sm btn-success">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tri Retno Prayudati</td>
                        <td>23-06-2019 </td>
                        <td>09:30-10:15</td>
                        <td>
                            <h6><span class="badge badge-success">Selesai</span></h6>
                        </td>
                        <td>
                            <a href="{{ route('kunjungan.admin.detail', 1) }}" class="btn btn-sm btn-success">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
