@extends('admin.layouts.app_main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <h4 class="card-header">Daftar Meja</h4>
                <div class="card-body">
                    <a href="{{ route('wbp.create') }}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Tambah</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Meja</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{ $loop->index + $list->firstItem() }}</td>
                                    <td>{{ ''  }}</td>
                                    <td>{{ $item->status  }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            @if($list->count() < 1)
                                <tr>
                                    <td colspan="4">Data Kosong</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    {{ $list->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
