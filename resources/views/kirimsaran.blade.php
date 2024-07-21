@extends('template.template3')

@section('title', 'Kirim Saran | Sitolu Huta')
@section('content')
<div class="w-full flex justify-center">
    <div class="container">
        <div class=" mx-auto px-2 my-4">
            <div class="">
                <label for="nama" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" id="nama" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="">
                <label for="email" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="">
                <label for="message" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Saran</label>
                <input type="text" id="message" style="height:40vh;" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="flex justify-center">
                <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mx-2 my-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Kirim Saran</button>
            </div>
        </div>
    </div>
</div>
@endsection