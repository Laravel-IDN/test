@extends('admin.layouts.app_main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <h4 class="card-header">Daftar Petugas</h4>
                <div class="card-body">
                    <a href="{{ route('petugas.create') }}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Tambah</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Kode</th>
                                <th>Nama Petugas</th>
                                <th>Pangkat</th>
                                <th>Golongan</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->index + $list->firstItem() }}</td>
                                    <td>{{ ''  }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->pangkat  }}</td>
                                    <td>{{ $item->golongan  }}</td>
                                    <td class="text-center">
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
