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
                            <h6>Status: <label class="badge badge-success">Pending</label></h6>
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
                        <h5>Data WBP</h5>
                        <hr>
                        <div class="form-group">
                            <label>Cari WBP</label>
                            <select class="form-control" disabled>
                                <option>- Select Option -</option>
                                <option>1001 - Ego</option>
                                <option selected>1002 - Rini</option>
                                <option disabled>1002 - Tini </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status: <label class="badge badge-success">Available</label></label>
                        </div>
                        <div class="form-group">
                            <label>Hubungan dengan WBP</label>
                            <select class="form-control" disabled>
                                <option>- Select Option -</option>
                                <option selected>Keluarga Inti</option>
                                <option>Teman / Kerabat</option>
                                <option>Pengacara</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <hr>
                        <h5>Data Pengikut</h5>
                        <small class="text-danger">* Maksimal 4 Pengikut</small>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <label>NIK KTP</label>
                                <input type="number" class="form-control" placeholder="NIK KTP" disabled>
                            </div>
                            <div class="col">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" disabled>
                            </div>
                            <div class="col">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" disabled>
                                    <option>- Select Option -</option>
                                    <option selected>Laki - Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label>Tempat Lahir</label>
                                <input type="number" class="form-control" placeholder="tempat lahir" disabled>
                            </div>
                            <div class="col">
                                <label>Tanggal Lahir</label>
                                <input type="number" class="form-control" placeholder="tanggal lahir" disabled>
                            </div>
                            <div class="col">
                                <label>Agama</label>
                                <input type="number" class="form-control" placeholder="agama" disabled>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label>Alamat Lengkap</label>
                                <input type="number" class="form-control" placeholder="alamat" disabled>
                            </div>
                            <div class="col">
                                <label>No Telp</label>
                                <input type="number" class="form-control" placeholder="no telp" disabled>
                            </div>
                            <div class="col">
                                <label>Email</label>
                                <input type="number" class="form-control" placeholder="email" disabled>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label>Foto</label>
                                <img src="{{ asset('images/icon_user.png') }}" alt="..." class="img-thumbnail">
                            </div>
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
                        </div>

                        <hr>
                        <h5>Barang Bawaan</h5>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
