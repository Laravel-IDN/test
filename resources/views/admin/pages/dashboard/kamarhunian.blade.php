@extends('admin.layouts.app_main')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>ID WBP</th>
                        <th>Nama</th>
                        <th>Perkara</th>
                        <th>Jenis Kejahatan</th>
                        <th>Vonis</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                        <tr>
                            <td>{{ $loop->index + $list->firstItem() }}</td>
                            <td>{{ $item->kode_wbp }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->perkara }}</td>
                            <td>{{ $item->jenis_kejahatan }}</td>
                            <td>{{ $item->vonis }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $list->links() }}
            </div>
        </div>
    </div>
@endsection
