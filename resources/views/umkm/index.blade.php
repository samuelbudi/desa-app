@extends('template.template2')

@section('title', 'UMKM | Sitolu Huta')
@section('content')
<div class="container mx-auto my-10">
    <!-- Modal -->
    <div x-data="{ showModal: false, message: '' }" x-init="
        @if(session('success'))
            showModal = true;
            message = '{{ session('success') }}';
        @elseif(session('error'))
            showModal = true;
            message = '{{ session('error') }}';
        @endif
    ">
        <!-- Modal Background -->
        <div x-show="showModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center" style="display: none;">
            <!-- Modal Content -->
            <div class="bg-white rounded-lg p-6 w-1/3">
                <div class="mb-4">
                    <h2 class="text-xl font-bold">Notification</h2>
                </div>
                <div class="mb-4">
                    <p x-text="message"></p>
                </div>
                <div class="text-right">
                    <button @click="showModal = false" class="bg-blue-500 text-white px-4 py-2 rounded">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-between mb-4 border-b-4">
        <h1 class="text-5xl font-bold mb-4">UMKM</h1>
        <a href="/umkm/create" class="bg-red-900 text-white px-4 py-2 rounded-lg hover:bg-red-800 mb-4 h-fit">
            Tambah UMKM
        </a>
    </div>
    <div class="grid grid-cols-2 gap-10 p-6">
        @foreach($umkm as $item)
            <a href="/umkm/{{ $item->id }}" class="bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 h-72 w-72 overflow-hidden">
                @if($item->images->isNotEmpty())
                @php
                    $firstImage = $item->images->first();
                @endphp
                <!-- Display the first image with full width and a maximum height -->
                <img src="{{ asset('storage/' . $firstImage->path) }}" alt="Image" class="w-full max-h-48 object-cover">

                @else
                    <p>No image available.</p>
                @endif
                <div class="p-2">
                    <h1 class="px-3 text-2xl font-bold">{{ $item->nama }}</h1>
                    <p class="px-3 pb-3">{{ Str::limit(strip_tags($item->desc), 100) }}</p>
                </div>
            </a>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $umkm->links() }}
    </div>
</div>
@endsection
