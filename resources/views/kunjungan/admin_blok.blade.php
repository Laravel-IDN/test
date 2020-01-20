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
                </tbody>
            </table>
            {{ $list->links() }}
        </div>
    </div>
</div>
@endsection
