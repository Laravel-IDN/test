@extends('admin.layouts.app_main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <h3 class="card-header text-center ">
                    Detail Kunjungan
                </h3>
                <div class="card-body">
                    <form>
                        <div class="text-right">
                            <h6>Kode Booking: #PD12121</h6>
                            <h6>Status Kunjungan: <label class="badge badge-success">Pending</label></h6>
                        </div>

                        <hr class="">
                        <h5>Waktu Kunjungan</h5>
                        <div class="row">
                            <div class="col">
                                <label>Kategori</label>
                                <select class="form-control" disabled>
                                    <option>- Select Option -</option>
                                    <option class="dewasa" selected>Dewasa</option>
                                    <option class="anak">Anak - Anak</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Hari</label>
                                <select class="form-control" disabled>
                                    <option>- Select Option -</option>
                                    <option class="senin" selected>Senin</option>
                                    <option class="rabu">Rabu</option>
                                    <option class="jumat">Jumat</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Waktu</label>
                                <select class="form-control" disabled>
                                    <option>- Select Option -</option>
                                    <option class="dewasa" selected>09:30 - 10:15</option>
                                    <option class="anak">10:15 - 11:00</option>
                                    <option class="anak">14:15 - 15:00</option>
                                    <option class="anak">16:00 - 17:00</option>
                                </select>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="text" class="form-control" value="23-12-2020" disabled>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Data Pengunjung</h5>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label>NIK KTP</label>
                                <input type="number" class="form-control" placeholder="NIK KTP" value="191024908970002" disabled>
                            </div>
                            <div class="col">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" value="Tri Retno Prayudati" disabled>
                            </div>
                            <div class="col">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" disabled>
                                    <option>- Select Option -</option>
                                    <option>Laki - Laki</option>
                                    <option selected>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" placeholder="tempat lahir" value="Jakarta" disabled>
                            </div>
                            <div class="col">
                                <label>Tanggal Lahir</label>
                                <input type="text" class="form-control" placeholder="tanggal lahir" value="01-09-1890" disabled>
                            </div>
                            <div class="col">
                                <label>Agama</label>
                                <select class="form-control" disabled>
                                    <option>- Select Option -</option>
                                    <option selected>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Buddha</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label>Alamat Lengkap</label>
                                <input type="text" class="form-control" placeholder="alamat" value="jl. sandang no 72" disabled>
                            </div>
                            <div class="col">
                                <label>No Telp</label>
                                <input type="text" class="form-control" placeholder="no telp" value="081299018777" disabled>
                            </div>
                            <div class="col">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="email" value="tri.retno@gmail.com" disabled>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label>Hubungan dengan WBP</label>
                                <select class="form-control" disabled>
                                    <option>- Select Option -</option>
                                    <option selected>Keluarga Inti</option>
                                    <option>Teman / Kerabat</option>
                                    <option>Pengacara</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                            <div class="col-md-4 text-center">
                                <h5 class="">Foto
                                    <img src="{{ asset('images/icon_user2.jpeg') }}"  alt="..." class="img-" style="height: 100px">
                                </h5>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-info mt-4 float-right">Ubah Data</button>
                            </div>
                        </div>
                        <hr>
                        <h5>Data WBP
                            <button type="button" id="addBarangBawaan" class="btn btn-success float-right"><i
                                    class="fa fa-plus"></i></button>
                        </h5>
                        <small class="text-danger">* Maksimal 2 WBP</small>

                        <hr>
                        <div class="form-group row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/icon_user2.jpeg') }}" alt="..." class="img-thumbnail img-fluid">
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Nama: Dalima Iriana</label>
                                </div>
                                <div class="form-group">
                                    <label>Status: <label class="badge badge-success">Available</label></label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Data Pengikut
                            <button type="button" id="addBarangBawaan" class="btn btn-success float-right"><i
                                    class="fa fa-plus"></i></button>
                        </h5>
                        <small class="text-danger">* Maksimal 4 Pengikut</small>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label>NIK KTP</label>
                                <input type="number" class="form-control" placeholder="NIK KTP" value="1008494328780865" disabled>
                            </div>
                            <div class="col">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" value="Ronny Wijaya" disabled>
                            </div>
                            <div class="col">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" disabled>
                                    <option>- Select Option -</option>
                                    <option>Laki - Laki</option>
                                    <option selected>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" placeholder="tempat lahir" value="Jakarta" disabled>
                            </div>
                            <div class="col">
                                <label>Tanggal Lahir</label>
                                <input type="text" class="form-control" placeholder="tanggal lahir" value="01-09-1890" disabled>
                            </div>
                            <div class="col">
                                <label>Agama</label>
                                <select class="form-control" disabled>
                                    <option>- Select Option -</option>
                                    <option selected>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Buddha</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label>Alamat Lengkap</label>
                                <input type="text" class="form-control" placeholder="alamat" value="jl. sandang no 72" disabled>
                            </div>
                            <div class="col">
                                <label>No Telp</label>
                                <input type="text" class="form-control" placeholder="no telp" value="087782987618" disabled>
                            </div>
                            <div class="col">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="email" value="ronny.w@gmail.com" disabled>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label>Hubungan dengan WBP</label>
                                <select class="form-control" disabled>
                                    <option>- Select Option -</option>
                                    <option selected>Keluarga Inti</option>
                                    <option>Teman / Kerabat</option>
                                    <option>Pengacara</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <h5 class="">Foto
                                    <img src="{{ asset('images/icon_user2.jpeg') }}"  alt="..." class="img-" style="height: 100px">
                                </h5>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-info mt-4 float-right">Ubah Data</button>
                            </div>
                        </div>

                        <hr>
                        <h5>Barang Bawaan
                            <button type="button" id="addBarangBawaan" class="btn btn-success float-right"><i
                                    class="fa fa-plus"></i></button>
                        </h5>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label>Jenis Barang</label>
                                <select class="form-control" disabled>
                                    <option>- Select Option -</option>
                                    <option selected>Makanan</option>
                                    <option>Uang</option>
                                    <option>Pakaian</option>
                                    <option>Obat - Obatan</option>
                                    <option>Keperluan Lain</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" placeholder="nama barang" value="Nasi Padang" disabled>
                            </div>
                            <div class="col">
                                <label>Total</label>
                                <input type="number" class="form-control" placeholder="total" value="1" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Jenis Barang</label>
                                <select class="form-control" disabled>
                                    <option>- Select Option -</option>
                                    <option>Makanan</option>
                                    <option selected>Uang</option>
                                    <option>Pakaian</option>
                                    <option>Obat - Obatan</option>
                                    <option>Keperluan Lain</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" placeholder="nama barang" value="Uang" disabled>
                            </div>
                            <div class="col">
                                <label>Total</label>
                                <input type="number" class="form-control" placeholder="total" value="500.000" disabled>
                            </div>
                        </div>

                        <hr>
                        <div class="form-group text-center">
                            <button class="btn btn-lg btn-success">Checkin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
