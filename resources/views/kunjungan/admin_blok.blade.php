@extends('admin.layouts.app_main')

@section('content')
<div class="container">
    <div class="card">
        <h3 class="card-header text-center ">
            Pemanggilan WBP
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
<<<<<<< HEAD
                <tr>
                    <td>1</td>
                    <td>Ratna Sarumpaet</td>
                    <td>23-06-2019 09:30-10:15</td>
                    <td>
                        <h6><span class="badge badge-success">Sudah Di Panggil</span></h6>
                    </td>
                    <td>
                        <a href="{{ route('kunjungan.detail', 1) }}" class="btn btn-sm btn-success">Paggil</a>
                    </td>
                </tr>
                    <tr>
                        <td>2</td>
                        <td>Tri Retno Prayudati</td>
                        <td>01-05-2019 09:30-10:15</td>
                        <td>
                            <h6><span class="badge badge-danger">Belum Dipanggil</span></h6>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Rani Mahreta</td>
                        <td>01-05-2019 09:30-10:15</td>
                        <td>
                            <h6><span class="badge badge-danger">Belum Dipanggil</span></h6>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Rey Utami</td>
                        <td>01-05-2019 09:30-10:15</td>
                        <td>
                            <h6><span class="badge badge-danger">Belum Dipanggil</span></h6>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Hardianti Mustika</td>
                        <td>01-05-2019 09:30-10:15</td>
                        <td>
                            <h6><span class="badge badge-danger">Belum Dipanggil</span></h6>
                        </td>
                        <td>
                        </td>
                    </tr>
=======
                    @foreach($list as $item)
                        <tr>
                            <td>{{ $loop->index + $list->firstItem() }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>23-06-2019 09:30-10:15</td>
                            <td>
                                <h6><span class="badge badge-danger">Belum di Panggil</span></h6>
                            </td>
                            <td>
{{--                                <a href="{{ route('kunjungan.detail', 1) }}" class="btn btn-sm btn-success">Paggil</a>--}}
                            </td>
                        </tr>
                    @endforeach
>>>>>>> 1b3820922a52b584c56ae89e3d764aedee6bf433
                </tbody>
            </table>
            {{ $list->links() }}
        </div>
    </div>
</div>
@endsection
