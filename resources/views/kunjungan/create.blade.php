@extends('admin.layouts.app_main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <h3 class="card-header text-center ">
                        Pendaftaran Kunjungan
                    </h3>
                    <div class="card-body">
                        <form action="{{ route('kunjungan.create') }}" method="POST">
                            @csrf
                            <h5>Waktu Kunjungan</h5>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <label>Kategori</label>
                                    <select class="form-control">
                                        <option>- Select Option -</option>
                                        <option class="dewasa">Dewasa</option>
                                        <option class="anak">Anak - Anak</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Hari</label>
                                    <select class="form-control">
                                        <option>- Select Option -</option>
                                        <option class="senin">Senin</option>
                                        <option class="rabu">Rabu</option>
                                        <option class="jumat">Jumat</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Waktu</label>
                                    <select class="form-control">
                                        <option>- Select Option -</option>
                                        <option class="dewasa">09:30 - 10:15</option>
                                        <option class="anak">10:15 - 11:00</option>
                                        <option class="anak">14:15 - 15:00</option>
                                        <option class="anak">16:00 - 17:00</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="text" class="form-control datepicker" placeholder="yyyy-mm-dd">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Data WBP</h5>
                            <hr>
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
                                <label id="statusWBP">Status: -</label>
                            </div>
                            <div class="form-group">
                                <label>Hubungan dengan WBP</label>
                                <select class="form-control">
                                    <option>- Select Option -</option>
                                    <option value="" disabled>Keluarga Inti</option>
                                    <option>Teman / Kerabat</option>
                                    <option>Pengacara</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                            <hr>
                            <h5>Data Pengikut
                                <button type="button" id="addPengikut" class="btn btn-success float-right"><i
                                        class="fa fa-plus"></i></button>
                            </h5>
                            <small class="text-danger">* Maksimal 4 Pengikut</small>
                            <hr>
                            <div id="listPengikut">
                                <div id="pengikut">
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label>NIK KTP</label>
                                            <input type="number" class="form-control" placeholder="NIK KTP">
                                        </div>
                                        <div class="col">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="Nama">
                                        </div>
                                        <div class="col">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control">
                                                <option>- Select Option -</option>
                                                <option>Laki - Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label>Tempat Lahir</label>
                                            <input type="number" class="form-control" placeholder="tempat lahir">
                                        </div>
                                        <div class="col">
                                            <label>Tanggal Lahir</label>
                                            <input type="number" class="form-control" placeholder="tanggal lahir">
                                        </div>
                                        <div class="col">
                                            <label>Agama</label>
                                            <input type="number" class="form-control" placeholder="agama">
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label>Alamat</label>
                                            <input type="number" class="form-control" placeholder="alamat">
                                        </div>
                                        <div class="col">
                                            <label>No Telp</label>
                                            <input type="number" class="form-control" placeholder="no telp">
                                        </div>
                                        <div class="col">
                                            <label>Email</label>
                                            <input type="number" class="form-control" placeholder="email">
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <label>Foto</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="col">
                                            <label>Hubungan dengan WBP</label>
                                            <select class="form-control">
                                                <option>- Select Option -</option>
                                                <option>Keluarga Inti</option>
                                                <option>Teman / Kerabat</option>
                                                <option>Pengacara</option>
                                                <option>Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="col"></div>
                                        <div class="col-1"></div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <hr>
                            <h5>Barang Bawaan
                                <button type="button" id="addBarangBawaan" class="btn btn-success float-right"><i
                                        class="fa fa-plus"></i></button>
                            </h5>
                            <hr>
                            <div id="listBarangBawaan">
                                <div class="row mt-2" id="barangBawaan">
                                    <div class="col">
                                        <label>Jenis Barang</label>
                                        <select class="form-control">
                                            <option>- Select Option -</option>
                                            <option>Makanan</option>
                                            <option>Uang</option>
                                            <option>Pakaian</option>
                                            <option>Obat - Obatan</option>
                                            <option>Keperluan Lain</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label>Nama Barang</label>
                                        <input type="text" class="form-control" placeholder="Nama Barang">
                                    </div>
                                    <div class="col">
                                        <label>Total</label>
                                        <input type="number" class="form-control" placeholder="Nama Barang">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group text-center">
                                <button class="btn btn-lg btn-info">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional_scripts')
    <script>
        $(document).ready(function () {
            $('.select2').select2();

            $('#chooseWBP').on('change', function () {
                $('#statusWBP').html('Status: <label class="badge badge-success">Available</label>')
            });

            $('#addBarangBawaan').on('click', function () {
                var clones = $('#barangBawaan').clone();
                // set to varaible to make op clear
                $('#listBarangBawaan').append(clones);
            });

            $('#addPengikut').on('click', function () {
                var clones = $('#pengikut').clone();
                // set to varaible to make op clear
                $('#listPengikut').append(clones);
            });
        });
    </script>
@endsection
