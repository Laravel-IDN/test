<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Jquery UI --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    {{-- Datepicker CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('js/lib/bootstrap-datepicker-1.9.0/css/bootstrap-datepicker.min.css') }}"/>

    {{-- Datepicker CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    @yield('additional_style')

    <!-- Scripts -->
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/1f9e9c0541.js"></script>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    @yield('additional_style')
</head>

<style>
    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

    table tr td:first-child,  table tr th:first-child,  table tr td:last-child,  table tr th:last-child {
        text-align: center;
    }
    .feather {
        width: 25px;
        height: 20px;
        vertical-align: middle;
    }

    body {
        font-family: 'Poppins', sans-serif;
        /*background: #fafafa;*/
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
    }

    a, a:hover, a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none;
    }

    .line {
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ddd;
        margin: 40px 0;
    }

    /* ---------------------------------------------------
        SIDEBAR STYLE
    ----------------------------------------------------- */

    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
        perspective: 1500px;
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;
        background: #f8f9fa;
        transition: all 0.3s;
    }

    #sidebar.active {
        margin-left: -250px;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #f8f9fa;
    }

    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #47748b;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }
    #sidebar ul li a:hover {
        background: #fff;
    }

    #sidebar ul li.active > a, a[aria-expanded="true"] {
        background: #f8f9fa;
    }


    a[data-toggle="collapse"] {
        position: relative;
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #f8f9fa;
    }


    /* ---------------------------------------------------
        CONTENT STYLE
    ----------------------------------------------------- */
    #content {
        width: 100%;
        /*padding: 20px;*/
        min-height: 100vh;
        transition: all 0.3s;
    }

    #sidebarCollapse {
        width: 40px;
        height: 40px;
        background: #f5f5f5;
        cursor: pointer;
    }

    #sidebarCollapse span {
        width: 80%;
        height: 2px;
        margin: 0 auto;
        display: block;
        background: #555;
        transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
        transition-delay: 0.2s;
    }

    #sidebarCollapse span:first-of-type,
    #sidebarCollapse span:nth-of-type(2),
    #sidebarCollapse span:last-of-type {
        transform: none;
        opacity: 1;
        margin: 5px auto;
    }
    /* ---------------------------------------------------
        MEDIAQUERIES
    ----------------------------------------------------- */
    @media (max-width: 768px) {
        #sidebar {
            margin-left: -250px;
            transform: rotateY(90deg);
        }
        #sidebar.active {
            margin-left: 0;
            transform: none;
        }

        #sidebarCollapse span:first-of-type,
        #sidebarCollapse span:nth-of-type(2),
        #sidebarCollapse span:last-of-type {
            transform: none;
            opacity: 1;
            margin: 5px auto;
        }
    }

    .nav-item{
        border-right: 0!important;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('admin.layouts.partial.sidebar')

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="d-flex">
                        <a class="dropdown-item" href="#">{{ Auth::user()->username }}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg>
                        {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>

            <div class="container">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </div>

    </div>
</body>

@yield('modal-list')

<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

@yield('additional_scripts')
<script>
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            // open or close navbar
            $('#sidebar').toggleClass('active');
            // close dropdowns
            $('.collapse.in').toggleClass('in');
            // and also adjust aria-expanded attributes we use for the open/closed arrows
            // in our CSS
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');

        });
    });
    $( function() {
        $( ".datepicker" ).datepicker( {
            dateFormat: 'yy-mm-dd'
        });
    } );

</script>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
