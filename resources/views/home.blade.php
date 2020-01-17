@extends('admin.layouts.app_main')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <h4>Selamat Datang di Kunjungan Online Lembaga Pemasyarakatan Perempuan Kelas IIA Jakarta</h4>
                <div class="navbar-brand d-inline" href="/">
                    <img src="{{ asset('images/logo_kumham.png') }}" height="50" alt="" style="height: 150px !important;">
                    <img src="{{ asset('images/logo_lap.png') }}" height="50" style="height: 150px !important;">
                </div>
            </div>
        </div>
    </div>
@endsection
