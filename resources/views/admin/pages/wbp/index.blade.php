@extends('admin.layouts.app_main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <h4 class="card-header">Daftar WBP</h4>
                <div class="card-body">
                    <a href="{{ route('wbp.create') }}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Tambah</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode WBP</th>
                                <th>Nama</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Perkara</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{ $loop->index + $list->firstItem() }}</td>
                                    <td>{{ ''  }}</td>
                                    <td>{{ $item->nama  }}</td>
                                    <td>{{ $item->tempat_lahir.', '.$item->tanggal_lahir  }}</td>
                                    <td>{{ $item->alamat  }}</td>
                                    <td>{{ $item->perkara  }}</td>
                                    <td>{{ $item->status  }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
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
