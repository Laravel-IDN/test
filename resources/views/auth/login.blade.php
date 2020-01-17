<html class="h-full font-sans antialiased">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="icon" href="" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/normalizes.css') }}">

    <!-- Custom Meta Data -->

    <!-- Theme Styles -->
    <style>
        .field-icon {
            float: right;
            padding-right: 6px;
            margin-top: -30px;
            position: relative;
            z-index: 2;
        }
    </style>

</head>

<body class="bg-40 text-black h-full">
<div class="h-full">
    <div class="px-view mx-auto">
        <div class="mx-auto text-center">
            <div class="navbar-brand d-inline" href="/">
                <img src="{{ asset('images/logo_kumham.png') }}" height="50" alt="" style="height: 150px !important;">
                <img src="{{ asset('images/logo_lap.png') }}" height="50" style="height: 150px !important;">
            </div>
            <h3 class="mb-3 mt-3 mx-auto" style="width: 600px">KANTOR WILAYAH KEMENTERIAN HUKUM DAN HAM DKI JAKARTA LEMBAGA PEMASYARAKATAN PEREMPUAN KELAS IIA JAKARTA</h3>
        </div>

        <form class="bg-white shadow rounded-lg p-8 max-w-login mx-auto" method="POST" action="{{ route('login') }}">
            @csrf

{{--            <h2 class="text-2xl text-center font-normal mb-6 text-90">Welcome Back!</h2>--}}
{{--            <svg class="block mx-auto mb-6" xmlns="http://www.w3.org/2000/svg" width="100" height="2" viewBox="0 0 100 2">--}}
{{--                <path fill="#D8E3EC" d="M0 0h100v2H0z"></path>--}}
{{--            </svg>--}}

            @if ($errors->any())
                <p class="text-center font-semibold text-danger my-3">
                    These credentials do not match our records.
                </p>
            @endif

            <div class="mb-6 ">
                <label class="block font-bold mb-2" for="email">Username / Email Address</label>
                <input class="form-control form-input form-input-bordered w-full @error('email')is-invalid @enderror" id="email" type="text" name="email" value="{{ old('email') }}" required="" autofocus="">

                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-6 ">
                <label class="block font-bold mb-2" for="password">Password</label>
                <input class="form-control form-input form-input-bordered w-full @error('password') is-invalid @enderror" id="password" type="password" name="password" required="">
                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                </span>
                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="flex mb-6">
                <label class="flex items-center block text-xl font-bold">
                    <input class="" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="text-base ml-2">Ingat Saya</span>
                </label>

                <div class="ml-auto">
                    <a class="text-primary dim font-bold no-underline" href="password/reset">
                        Lupa Password?
                    </a>
                </div>
            </div>

            <div class="flex mb-6">

                <button class="w-full btn btn-default btn-primary hover:bg-primary-dark" type="submit">
                    Login
                </button>
            </div>


            <a href="{{ route('register') }}" class="w-full " type="submit">
                Register New Account
            </a>
        </form>
    </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
    $(document).ready(function () {
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    });
</script>
</html>
