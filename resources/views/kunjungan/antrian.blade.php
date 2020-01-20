@extends('admin.layouts.app_main')

@section('content')
<div class="container">
    <div class="card">
        <h3 class="card-header text-center ">
            Daftar Antrian
        </h3>
        <div class="card-body">
            <div class="text-right">
                <h6>Waktu: Shift 1 (09:30 - 10:15)</h6>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pengunjung</th>
                        <th>ID Pendaftaran</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Atiqah Hasiholan</td>
                        <td>#PD1002</td>
                        <td>
                            <h6><span class="badge badge-danger">Pending</span></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bagus</td>
                        <td>#PD1105</td>
                        <td>
                            <h6><span class="badge badge-success">Selesai</span></h6>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
