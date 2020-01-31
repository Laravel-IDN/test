@extends('admin.layouts.app_main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header">Daftar Status WBP</h4>
                <div class="card-body">
                    <a href="{{ route('status.create') }}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Tambah</a>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode WBP</th>
                                <th>Nama WBP</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Berakhir</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{ $loop->index + $list->firstItem() }}</td>
                                    <td>{{ $item->wbp->kode_wbp  }}</td>
                                    <td>{{ $item->wbp->nama  }}</td>
                                    <td>{{ $item->end_at->isPast() ? 'Dapat di Kunjungi' : 'Tidak Dapat di Kunjungi' }}</td>
                                    <td>{{ $item->keterangan  }}</td>
                                    <td>{{ $item->start_at->format('d-m-Y')  }}</td>
                                    <td>{{ $item->end_at->format('d-m-Y')  }}</td>
                                    <td>
                                        <a href="{{ route('wbp.edit', $item->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $list->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
