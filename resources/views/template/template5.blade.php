<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Styles -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

    </style>
    <script src="\table-of-contents\table-of-contents.js"></script>
</head>

<body>
    @include('layout.header')
    <div class="col justify-center flex items-center py-5" style="color:white; background-image: url(img/Aset2.jpg); min-height:400px; background-repeat: no-repeat; background-size: cover;">
        <div data-content class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
            @yield('content')
        </div>
    </div>
    <footer style="--tw-bg-opacity: 1;
    background-color: rgba(105,23,23, var(--tw-bg-opacity));">
        <div class="grid grid-cols-2 text-white p-5 mx-auto py-20">
            <div class="flex items-center justify-center">
                <div class="">
                    <a class="text-yellow-200 font-bold flex justify-center">Ikuti Kami</a>
                    <div class="flex gap-2 ">
                        <img src="{{ asset('img/bxl_facebook.svg') }}">
                        <img src="{{ asset('img/fe_instagram.svg') }}">
                        <img src="{{ asset('img/ic_baseline-whatsapp.svg') }}">
                        <img src="{{ asset('img/mdi_youtube.svg') }}">
                    </div>
                </div>

            </div>
            <div class="flex items-center justify-center">
                <p>Website ini dibuat bersama dengan KKN-PPM UGM Mengukir Samosir 2024</p>
            </div>
        </div>
        <div class="flex items-end" style="background-image: url({{ asset('img/motifFooter.svg') }}); min-height:50px;">
        </div>

    </footer>
</body>

</html>