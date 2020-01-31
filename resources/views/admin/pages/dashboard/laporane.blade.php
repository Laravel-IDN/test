@extends('admin.layouts.app_main')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div id='printMe'>
                    <table class="table-bordered" width="100%">
                        <thead >
                        <tr>
                            <th colspan="7">
                                <div class="row" align="center">
                                    <div class="col-md-2" style="font-size:16pt;" align="right">
                                        <img src="{{ asset('images/logo_kumham.png') }}" height="50" alt="" style="height: 150px !important;">
                                    </div>
                                    <div class="col-md-10" style="font-size:16pt;margin-top:20px;">
                                        <div>KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA REPUBLIK INDONESIA</div>
                                        <div>KANTOR WILAYAH DKI JAKARTA</div>
                                        <div>LEMBAGA PEMASYARAKATAN PEREMPUAN KELAS IIA JAKARTA
                                        </div>
                                        <div style="font-size:10pt;"><i>
                                                Jalan Pondok Bambu, Kel. Pondok Bambu, Kec. Duren Sawit, Jakarta Timur, DKI Jakarta
                                            </i></div>
                                        <div style="font-size:10pt; color:blue;"><u>
                                                Telp. (021) 21385195 e-mail : lpp.jakarta@gmail.com
                                            </u></div>

                                    </div>
                                </div>

                            </th>

                        <tr>
                            <th colspan="7"><strong><h2 align="center">LAPORAN KUNJUNGAN WARGA BINAAN PEMASYARAKATAN</h2></strong>
                            </th>
                            <th colspan="7">
                                <strong><h2 align="center"></h2></strong>
                            </th>
                        </tr>
                        </thead>
                        <tbody style="font-size:12pt; ">
                        <tr align="center" colspan="10" style="background-color:#dc143c; color:white;">
                            <td style="border:3px solid black;">No</td>
                            <td style="border:3px solid black;">NIK</td>
                            <td style="border:3px solid black;">Nama Pengunjung</td>
                            <td style="border:3px solid black;">Nama WBP</td>
                            <td style="border:3px solid black;">Tanggal Kunjungan</td>
                            <td style="border:3px solid black;">Waktu Kunjungan</td>
                            <td style="border:3px solid black;">No. Meja</td>
                        </tr>
                        <tr align="center" colspan="10">
                            <td style="border:3px solid black;">1</td>
                            <td style="border:3px solid black;">3201371511910002</td>
                            <td style="border:3px solid black;">Irawan Sadri</td>
                            <td style="border:3px solid black;">Vanya Devi</td>
                            <td style="border:3px solid black;">02-03-2019</td>
                            <td style="border:3px solid black;">09:30 - 10:15</td>
                            <td style="border:3px solid black;">Meja1</td>
                        </tr>
                        <tr align="center" colspan="10">
                            <td style="border:3px solid black;">2</td>
                            <td style="border:3px solid black;">3573054909920001</td>
                            <td style="border:3px solid black;">Arifin</td>
                            <td style="border:3px solid black;">Cinthia Mala</td>
                            <td style="border:3px solid black;">02-03-2019</td>
                            <td style="border:3px solid black;">09:30 - 10:15</td>
                            <td style="border:3px solid black;">Meja2</td>
                        </tr>
                        <tr align="center" colspan="10">
                            <td style="border:3px solid black;">3</td>
                            <td style="border:3px solid black;">3271046504930002</td>
                            <td style="border:3px solid black;">Rudy Razzy</td>
                            <td style="border:3px solid black;">Humaira Uchita</td>
                            <td style="border:3px solid black;">02-03-2019</td>
                            <td style="border:3px solid black;">14:15 - 15:00</td>
                            <td style="border:3px solid black;">Meja1</td>
                        </tr>

                        <td colspan="10">
                            <div class="row" style="margin-top:20px;font-size:12pt;">
                                <div class="col-md-12"><div align="center" >Mengetahui,</div></div>
                            </div>

                            <div class="row" style="font-size:12pt;margin-bottom:20px;">
                                <div class="col-md-1"></div>
                                <div class="col-md-4" align="center">Kalapas<br><br><br></div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4" align="center">Kasubsi Kamtib,<br><br><br></div>
                                <div class="col-md-1"></div>
                            </div>


                            <div class="row" style="font-size:12pt;margin-top:20px;">
                                <div class="col-md-1"></div>
                                <div class="col-md-4" align="center">Yuli Niartini, Bc.IP.,SH.,MH</div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4" align="center">Enny Yulistiawati, Bc.IP</div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row" style="font-size:12pt;margin-bottom:20px;">
                                <div class="col-md-1"></div>
                                <div class="col-md-4" align="center">NIP.19620709 1987 03 2 001</div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4" align="center">NIP.19680707 1991 03 2 001</div>
                                <div class="col-md-1"></div>
                            </div>
                        </td>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer"><button onclick="printDiv('printMe')" class="btn btn-sm btn-primary pull-right">Cetak</button></div>
        </div>
    </div>
@endsection

@section('additional_scripts')
    <script>
        function printDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;

        }
    </script>
@endsection

