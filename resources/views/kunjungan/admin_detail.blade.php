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

                        <hr>
                        <h5>Data Pengunjung & Pengikut</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/icon_user.png') }}" alt="..." class="img-thumbnail rounded">
{{--                                <dl class="row">--}}
{{--                                    <dt class="col-sm-3">Description lists</dt>--}}
{{--                                    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>--}}
{{--                                </dl>--}}

                            </div>
                            <div class="col-md-2 text-center">
                                <small class="font-weight-bold">Pengikut 1</small>
                                <img src="{{ asset('images/icon_user.png') }}" alt="..." class="img-thumbnail rounded">
                            </div>
                            <div class="col-md-2 text-center">
                                <small class="font-weight-bold">Pengikut 2</small>
                                <img src="{{ asset('images/icon_user.png') }}" alt="..." class="img-thumbnail rounded">
                            </div>
                            <div class="col-md-2 text-center">
                                <small class="font-weight-bold">Pengikut 3</small>
                                <img src="{{ asset('images/icon_user.png') }}" alt="..." class="img-thumbnail rounded">
                            </div>
                            <div class="col-md-2 text-center">
                                <small class="font-weight-bold">Pengikut 4</small>
                                <img src="{{ asset('images/icon_user.png') }}" alt="..." class="img-thumbnail rounded">
                            </div>
                        </div>

                        <hr>
                        <h5>Data WBP</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/icon_user.png') }}" alt="..." class="img-thumbnail rounded">
                                <label>Nama: Test</label>
                                <label>NIK: 123913201390132930</label>
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('images/icon_user.png') }}" alt="..." class="img-thumbnail rounded">
                                <label>Nama: Test</label>
                                <label>NIK: 123913201390132930</label>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        Barang Bawaan
                                    </div>
                                    <div class="card-body" style="height: 100%">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kategori</th>
                                                    <th>Nama</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Makanan</td>
                                                    <td>Nasi Padang</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Uang</td>
                                                    <td>Uang</td>
                                                    <td>500.000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
