@extends('template.template2')

@section('title', 'Detail UMKM | Sitolu Huta')

@section('content')
<div class="container mx-auto my-10">
    <div class="mb-4 border-b-4 border-black flex justify-between">
        <h1 class="text-3xl font-bold">{{ $umkm->nama }}</h1>
        <div class="mb-1">
            <a href="/umkm/{{ $umkm->id }}/edit" type="button" class="mx-2 p-2 bg-red-900 text-white px-4 py-2 rounded-lg hover:bg-red-800 mb-4">Edit</a>
            <button id="open-modal" type="button" class="p-2 bg-red-900 text-white px-4 py-2 rounded-lg hover:bg-red-800 mb-4">Hapus</button>
        </div>
    </div>
    <div class="quill-content">
        {!! $umkm->desc !!}
    </div>

    <h1 class="my-5 text-3xl font-bold mb-4 border-b-4 border-black">Produk</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($images as $image)
            <div class="relative group cursor-pointer">
                <img src="{{ asset('storage/' . $image->path) }}" alt="Image" class="w-full h-auto object-cover rounded-lg transition-transform duration-200 transform group-hover:scale-105" onclick="openModal('{{ asset('storage/' . $image->path) }}')">
            </div>
        @endforeach
    </div>

    <!-- Modal -->
    <div id="imageModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 z-50 hidden">
        <div class="relative bg-white p-4 rounded-lg w-1/2 h-1/2 max-w-screen-md max-h-screen">
            <button onclick="closeModal()" class="absolute top-2 right-2 text-white bg-red-500 hover:bg-red-600 rounded-full p-2">×</button>
            <img id="modalImage" src="" alt="Zoomed Image" class="w-full h-full object-contain">
        </div>
    </div>

    <h1 class="text-3xl font-bold mb-4 border-b-4 border-black">Contact Person</h1>
    <div>
        {!! $umkm->cp !!}
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 z-50 hidden">
    <div class="bg-white rounded-lg p-8">
        <h2 class="text-2xl font-bold mb-4">Confirm Deletion</h2>
        <p class="mb-4">Are you sure you want to delete this item?</p>
        <div class="flex justify-end">
            <button id="close-modal" class="mr-4 px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Cancel</button>
            <form action="/umkm/{{ $umkm->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
            </form>
        </div>
    </div>
</div>
<script>

        var modal = document.getElementById('modal');
        var openModalButton = document.getElementById('open-modal');
        var closeModalButton = document.getElementById('close-modal');

        openModalButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });

        closeModalButton.addEventListener('click', function() {
            modal.classList.add('hidden');
        });

        // Close the modal if clicking outside of it
        window.addEventListener('click', function(event) {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });
        function openModal(src) {
            document.getElementById('modalImage').src = src;
            document.getElementById('imageModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('imageModal').classList.add('hidden');
        }
</script>
@endsection
