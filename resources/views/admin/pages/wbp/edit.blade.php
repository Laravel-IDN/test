@extends('admin.layouts.app_main')

@section('additional_style')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <h4 class="card-header">Edit WBP - #{{ $data->kode_wbp }}</h4>
                <div class="card-body">
                    <form action="{{ route('wbp.edit', $data->id) }}" method="POST">
                        @csrf
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama" placeholder="nama" value="{{ $data->nama }}">
                            </div>

                            <label class="col-sm-2 col-form-label">Perkara</label>
                            <div class="col-sm-4">
                                <select class="form-control single-select" name="perkara">
                                    <option value="">Pilih</option>
                                    <option value="Pembunuhan" {{ $data->perkara=='Pembunuhan' ?: 'selected' }}>Pembunuhan</option>
                                    <option value="Pencurian" {{ $data->perkara=='Pencurian' ?: 'selected' }}>Pencurian</option>
                                    <option value="Narkoba" {{ $data->perkara=='Narkoba' ?: 'selected' }}>Narkoba</option>
                                    <option value="Korupsi" {{ $data->perkara=='Korupsi' ?: 'selected' }}>Korupsi</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                            <div class="form-group col-sm-2">
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat lahir" value="{{ $data->tempat_lahir }}">
                            </div>
                            <div class="form-group col-sm-2">
                                <input type="text" class="form-control" id="datepicker" name="tanggal_lahir" placeholder="yyyy-mm-dd" value="{{ $data->tanggal_lahir }}" readonly>
                            </div>
                            <label class="col-sm-2 col-form-label">Jenis Kejahatan</label>
                            <div class="col-sm-4">
                                <select class="form-control single-select" name="jenis_kejahatan">
                                    <option value="">Pilih</option>
                                    <option value="PidSus" {{ $data->jenis_kejahatan=='PidSus' ? 'selected' : '' }}>PidSus (Pidana Khusus)</option>
                                    <option value="PiDum" {{ $data->jenis_kejahatan=='PiDum' ? 'selected' : '' }}>PiDum (Pidana Umum)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Agama</label>
                            <div class="form-group col-sm-4">
                                <select class="form-control single-select" name="agama">
                                    <option value="">Pilih</option>
                                    <option value="Islam" {{ $data->agama=='Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ $data->agama=='Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Katolik" {{ $data->agama=='Katolik' ? 'selected' : '' }}>Katolik</option>
                                    <option value="Hindu" {{ $data->agama=='Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Buddha" {{ $data->agama=='Buddha' ? 'selected' : '' }}>Buddha</option>
                                    <option value="Koghucu" {{ $data->agama=='Koghucu' ? 'selected' : '' }}>Koghucu</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">Tanggal Berperkara</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control datepicker" name="tgl_berperkara" placeholder="yyyy-mm-dd" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Foto</label>
                            <div class="form-group col-sm-4">
                                <img src="{{ storage_path($data->foto) }}">
                                <input type="file" class="form-control" name="foto">
                            </div>
                            <label class="col-sm-2 col-form-label">Vonis</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control datepicker" name="vonis" value="{{ $data->vonis }}">
                            </div>
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
