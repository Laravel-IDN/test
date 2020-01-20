@extends('admin.layouts.app_main')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pendaftaran</th>
                            <th>Waktu</th>
                            <th>Kritik</th>
                            <th>Saran</th>
                            <th>Bintang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $item)
                            <tr>
                                <td>{{ $loop->index + $list->firstItem() }}</td>
                                <td>{{ $item->kunjungan_id }}</td>
                                <td>{{ $item->waktu_kunjungan }}</td>
                                <td>{{ $item->kritik }}</td>
                                <td>{{ $item->saran }}</td>
                                <td>{{ $item->rating }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $list->links() }}

            </div>
        </div>
    </div>
@endsection
