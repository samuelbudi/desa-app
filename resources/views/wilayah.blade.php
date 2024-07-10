<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- Styles -->
    <style>

    </style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <nav class="bg-[#691717] border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">SITOLU HUTA</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:border-gray-700">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-200 md:p-0" aria-current="page">HOME</a>
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
                        <a href="tentangkami" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-200 md:p-0">TENTANG KAMI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="col justify-center flex items-center py-5" style="color:white; background-image: url(img/Aset2.jpg); min-height:400px; background-repeat: no-repeat; background-size: cover;">
        <div class="text-white my-5">
            <h1 class="font-bold text-4xl" style="text-align: center;">Negeri Indah Kepingan Surga</h1>
            <h3 class="font-light text-xl" style="text-align: center;">Sitoluhuta</h2>
        </div>
    </div>

    <div class="container mx-auto my-4">
        <div class="grid grid-cols-5 gap-4">
            <div class="col-span-4 row-span-4">
                <div href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h1 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Peta Desa ...</h1>
                    <p class="font-normal text-gray-700 dark:text-gray-400 mb-2 h-44">
                        Ini Isinya Peta nanti
                    </p>
                    <h1 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Video Profil</h1>
                    <h1 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Foto</h1>
                </div>

            </div>
            <div class="col-span-1">
                <div href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daftar Isi</h1>
                    <ul class="text-blue-700">
                        <li class="mb-2">
                            <a>Penjelasan Peta</a>
                        </li>
                        <li class="mb-2">
                            <a>Analisis</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-span-1">
                <div href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Informasi Lainnya</h5>
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
            </div>
            <div class="col-span-1">
                <div href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h2 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Beri Kami Saran</h2>
                    <p class="font-normal text-gray-700 dark:text-gray-400 my-2">Kirim saran artikel atau panduan yang Anda inginkan.</p>
                    <div class="flex items-center justify-center">
                        <a type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Kirim Saran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>

    </footer>
</body>

</html>