@extends('admin.layouts.app_main')

@section('content')
<div class="container">
    <div class="card">
        <h3 class="card-header text-center ">
            Riwayat Kunjungan
        </h3>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama WBP</th>
                        <th>Waktu Kunjungan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Coki</td>
                        <td>01-05-2019 09:30-10:15</td>
                        <td>
                            <h6><span class="badge badge-danger">Pending</span></h6>
                        </td>
                        <td>
                            <a href="{{ route('kunjungan.detail', 1) }}" class="btn btn-sm btn-success">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Coki</td>
                        <td>23-06-2019 09:30-10:15</td>
                        <td>
                            <h6><span class="badge badge-success">Selesai</span></h6>
                        </td>
                        <td>
                            <a href="{{ route('kunjungan.detail', 1) }}" class="btn btn-sm btn-success">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
