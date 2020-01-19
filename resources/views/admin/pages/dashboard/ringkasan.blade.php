@extends('admin.layouts.app_main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-5">
                <label>Filter by Date:</label>
                <div class="row">
                    <div class="col">
                        <input class="form-control datepicker" placeholder="dd-mm-yyyy">
                    </div>
                    <label class="col-form-label">to</label>
                    <div class="col">
                        <input class="form-control datepicker" placeholder="dd-mm-yyyy">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <div class="card text-center">
                    <h5 class="mt-2">Senin</h5>
                    <div id="chart1"></div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <h5 class="mt-2">Rabu</h5>
                    <div id="chart2"></div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <h5 class="mt-2">Jumat</h5>
                    <div id="chart3"></div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <h5 class="mt-2">Total Kunjungan</h5>
                    <h3>200</h3>
                    <div class="card-body text-left">
                        <label>Dewasa: 180</label>
                        <label>Anak - Anak: 20</label>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label>Filter by Year:</label>
                    <input type="text" class="form-control datepicker" placeholder="yyyy">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-9">
                <div class="card text-center">
                    <div class="card-body text-center" id="chart5"></div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <h5 class="mt-2">Total Kunjungan</h5>
                    <h3>5.274</h3>
                    <div class="card-body text-left">
                        <label>Dewasa: 3.328</label>
                        <label>Anak - Anak: 1.672</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional_scripts')
    <script>
        var options1 = {
            series: [
                {
                    name: "Total",
                    data: [20, 39, 20, 25]
                },
            ],
            chart: {
                height: 200,
                type: 'line',
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#77B6EA', '#545454'],
            dataLabels: {
                enabled: true,
            },
            tooltip:{
              enabled:false,
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            markers: {
                size: 1
            },
            xaxis: {
                categories: ['1', '2', '3', '4'],
                title: {
                    text: 'Shift'
                }
            },
            yaxis: {
                floating: true,
                axisTicks: {
                    show: false
                },
                axisBorder: {
                    show: false
                },
                labels: {
                    show: false
                },
            },
        };

        var options2 = {
            series: [
                {
                    name: "Total",
                    data: [28, 29, 20, 25, 35]
                },
            ],
            chart: {
                height: 200,
                type: 'line',
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#77B6EA', '#545454'],
            dataLabels: {
                enabled: true,
            },
            tooltip:{
                enabled:false,
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            markers: {
                size: 1
            },
            xaxis: {
                categories: ['1', '2', '3', '4', '5'],
                title: {
                    text: 'Shift'
                }
            },
            yaxis: {
                floating: true,
                axisTicks: {
                    show: false
                },
                axisBorder: {
                    show: false
                },
                labels: {
                    show: false
                },
            },
        };

        var options3 = {
            series: [
                {
                    name: "Total",
                    data: [28, 29, 20]
                },
            ],
            chart: {
                height: 200,
                type: 'line',
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#77B6EA', '#545454'],
            dataLabels: {
                enabled: true,
            },
            tooltip:{
                enabled:false,
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            markers: {
                size: 1
            },
            xaxis: {
                categories: ['3', '4', '5'],
                title: {
                    text: 'Shift'
                }
            },
            yaxis: {
                floating: true,
                axisTicks: {
                    show: false
                },
                axisBorder: {
                    show: false
                },
                labels: {
                    show: false
                },
            },
        };

        var options4 = {
            series: [
                {
                    name: "Total",
                    data: [28, 29, 20, 25, 30, 28, 29, 20, 25, 30]
                },
            ],
            chart: {
                height: 200,
                type: 'line',
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#77B6EA', '#545454'],
            dataLabels: {
                enabled: true,
            },
            tooltip:{
                enabled:false,
            },
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            markers: {
                size: 1
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Nov', 'Des'],
            },
            yaxis: {
                floating: true,
                axisTicks: {
                    show: false
                },
                axisBorder: {
                    show: false
                },
                labels: {
                    show: false
                },
            },
        };

        var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
        chart1.render();

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
        chart2.render();

        var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
        chart3.render();

        var chart4 = new ApexCharts(document.querySelector("#chart5"), options4);
        chart4.render();
    </script>
@endsection
