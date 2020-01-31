@extends('admin.layouts.app_main')

@section('additional_style')
@endsection

@section('content')
<div class="container">
    <div class="card">
        <h3 class="card-header text-center ">
            Riwayat Kunjungan
        </h3>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama WBPsw</th>
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
                            <a href="{{ route('kunjungan.detail', 1) }}" class="btn btn-sm btn-success">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Try Retno Prayudati</td>
                        <td>23-06-2019 </td>
                        <td>09:30-10:15</td>
                        <td>
                            <h6><span class="badge badge-success">Selesai</span></h6>
                        </td>
                        <td>
                            <a href="{{ route('kunjungan.detail', 1) }}" class="btn btn-sm btn-success">Detail</a>
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                                kritik dan saran
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('modal-list')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kritik dan Saran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Penilaian</label>

                    <textarea class="form-control"></textarea>
                    <label>Kritik</label>
                    <textarea class="form-control"></textarea>
                    <label>Saran</label>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional_scripts')
    <script src="{{ asset('plugins/bootstrap-star-rating/js/star-rating.js') }}" type="text/javascript"></script>

    <script>
        $('document').ready(function () {
            // initialize with defaults
            $("#rating-input").rating();
        });
    </script>
@endsection
