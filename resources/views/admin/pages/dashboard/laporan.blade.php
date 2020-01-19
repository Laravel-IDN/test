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
                                        <div>KANTOR WILAYAH KEPULAUAN BANGKA BELITUNG</div>
                                        <div>LEMBAGA PEMASYARAKATAN PEREMPUAN KELAS III PANGKALPINANG
                                        </div>
                                        <div style="font-size:10pt;"><i>
                                                Jalan Sanggul Dewa Kel. Batin Tikal Kec. Tamansari Pangkalpinang
                                            </i></div>
                                        <div style="font-size:10pt; color:blue;"><u>
                                                Telp. (0717) 9108600 e-mail : lpp.pangkalpinang@gmail.com
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
                            <td style="border:3px solid black;">Tanggal Kunjungan</td>
                            <td style="border:3px solid black;">Ruangan</td>
                            <td style="border:3px solid black;">Petugas</td>
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
                                <div class="col-md-4" align="center">Nebi Viarleni, Amd.IP.,SH.,MH</div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4" align="center">Rosmita,SH</div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row" style="font-size:12pt;margin-bottom:20px;">
                                <div class="col-md-1"></div>
                                <div class="col-md-4" align="center">NIP.19800728 200012 2 002</div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4" align="center">NIP.19850404 200801 2 001</div>
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

