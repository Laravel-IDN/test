@extends('admin.layouts.app_main')

@section('additional_style')

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <h4 class="card-header">Tambah Petugas</h4>
                <div class="card-body">
                    <form action="{{ route('petugas.create') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName4">Nama</label>
                                <input type="text" name="nama" class="form-control" id="inputName4" placeholder="nama" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPangkat4">Pangkat</label>
                                <input type="text" name="pangkat" class="form-control" id="inputPangkat4" placeholder="pangkat" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">NIK KTP</label>
                                <input type="text" name="NIK" class="form-control" id="inputEmail4" placeholder="nik ktp" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">NIP Petugas</label>
                                <input type="text" name="NIP" class="form-control" id="inputPassword4" placeholder="nip" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">No Telp</label>
                                <input type="text" name="no_telp" class="form-control" id="inputEmail4" placeholder="no telp" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Golongan</label>
                                <input type="text" name="golongan" class="form-control" id="inputPassword4" placeholder="pangkat" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" name="email" class="form-control" id="inputPassword4" placeholder="email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Alamat</label>
                                <textarea name="alamat" class="form-control" required></textarea>
                            </div>
                        </div>

                        <hr>

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
