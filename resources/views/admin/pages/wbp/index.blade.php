@extends('admin.layouts.app_main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4 class="card-header">Daftar WBP</h4>
                <div class="card-body">
                    <a href="{{ route('wbp.create') }}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Tambah</a>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode WBP</th>
                                <th>Nama</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Perkara</th>
                                <th>Jenis Kejahatan</th>
                                <th>Tanggal Berperkara</th>
                                <th>Vonis</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{ $loop->index + $list->firstItem() }}</td>
                                    <td>{{ $item->kode_wbp  }}</td>
                                    <td>{{ $item->nama  }}</td>
                                    <td>{{ $item->tempat_lahir.', '.\Carbon\Carbon::createFromDate($item->tanggal_lahir)->format('d-m-Y')  }}</td>
                                    <td>{{ $item->agama  }}</td>
                                    <td>{{ $item->perkara  }}</td>
                                    <td>{{ $item->jenis_kejahatan  }}</td>
                                    <td>{{ \Carbon\Carbon::createFromDate($item->tgl_berperkara)->format('d-m-Y')   }}</td>
                                    <td>{{ $item->vonis  }}</td>
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
