@extends('admin.layouts.app_main')

@section('additional_style')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <h4 class="card-header">Tambah Status WBP</h4>
                <div class="card-body">
                    <form action="{{ route('wbp.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Cari WBP</label>
                            <select class="form-control select2" id="chooseWBP">
                                <option value="">- Select Option -</option>
                                @foreach($wbp as $item)
                                    <option
                                        value="{{ $item->id }}">{{ $item->kode_wbp .' - '.$item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input class="form-control" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input class="form-control datepicker" placeholder="Tanggal Mulai">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Berakhir</label>
                            <input class="form-control datepicker" placeholder="Tanggal Berakhir">
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-sm float-right"><i class="fa fa-save"></i>&nbsp;Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
