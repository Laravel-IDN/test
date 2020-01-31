@extends('admin.layouts.app_main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <h4 class="card-header">Daftar Meja</h4>
                <div class="card-body">
                    <a href="{{ route('meja.create') }}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Tambah</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Meja</th>
                            </tr>
                        </thead>
                        <tbody>
                        @for($i=0; $i<20; $i++)
                           <tr>
                               <td>{{ $i+1 }}</td>
                               <td>{{ 'Meja'.($i+1) }}</td>
                           </tr>
                        </tbody>
                        @endfor
                    </table>

                    {{ $list->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
