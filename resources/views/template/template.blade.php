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
    <!-- Include stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

    <!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

    <!-- Styles -->
    <style>

    </style>

    <script src="\table-of-contents\table-of-contents.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        const quill = new Quill('#editor', {
        theme: 'snow'
        });
    </script>
</head>

<body>
    <nav class="border-gray-200" style="--tw-bg-opacity: 1;
    background-color: rgba(105,23,23, var(--tw-bg-opacity));">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">SITOLUHTA</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden " aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4  rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0">
                    <li>
                        <a href="/" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-200 md:p-0" aria-current="page">HOME</a>
                    </li>
                    <li>
                        <a href="/umkm" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-200 md:p-0">UMKM</a>
                    </li>
                    <li>
                        <a href="/wilayah" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-200 md:p-0">WILAYAH</a>
                    </li>
                    <li>
                        <a href="/wisata" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-200 md:p-0">WISATA</a>
                    </li>
                    <li>
                        <a href="/tentangkami" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-200 md:p-0">TENTANG KAMI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('pageTitle')
    <div class="w-full flex justify-center">
        <div class="container">
            <div class=" mx-auto xl:mr-20 px-2 lg:pr-12 my-4">
                <div class="grid grid-cols-5 gap-4">
                    <div class="col-span-1"></div>
                    <div class="col-span-3 row-span-4">
                        <div data-content class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                            @yield('content')
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow my-2">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Informasi Lainnya</h5>
                            <div>
                                <ul class="text-blue-700">
                                    <li class="mb-2 ">
                                        <a href="/umkm">UMKM</a>
                                    </li>
                                    <li class="mb-2 ">
                                        <a href="">Mitigasi Bencana</a>
                                    </li>
                                    <li class="mb-2 ">
                                        <a href="">Batas Wilayah</a>
                                    </li>
                                    <li class="mb-2 ">
                                        <a href="">Potensi Pertanian</a>
                                    </li>
                                    <li class="mb-2 ">
                                        <a href="/wisata">Pariwisata</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @include("components.kirimsaranmodal")
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="    --tw-bg-opacity: 1;
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