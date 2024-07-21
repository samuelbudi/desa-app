@extends('template.template2')

@section('title', (isset($umkm) ? 'Edit UMKM' : 'Create UMKM') . ' | Sitolu Huta')
@section('content')
<div>
    <h1 class="text-5xl font-semibold border-b-4">{{ (isset($umkm) ? 'Edit UMKM' : 'Buat Page UMKM') }}</h1>
</div>

<div class="container mx-auto my-8">

    <form action="{{ isset($umkm) ? route('umkm.update', $umkm->id) : route('umkm.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($umkm))
            @method('PUT')
        @endif

        <div class="bg-white p-6 border border-gray-200 rounded-lg shadow">
            <!-- Nama Field -->
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama:</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $umkm->nama ?? '') }}" class="mt-1 p-2 border @error('nama') border-red-500 @enderror border-gray-300 rounded w-full">
                @error('nama')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description Field -->
            <div class="mb-4">
                <label for="desc" class="block text-gray-700">Description:</label>
                <div id="quill-container" class="border @error('desc') border-red-500 @enderror border-gray-300 rounded">
                    <div id="quill-editor" class="h-64" style="min-height: 600px"></div>
                    <input type="hidden" id="desc" name="desc" value="{{ old('desc', $umkm->desc ?? '') }}">
                    <script>
                        var quill = new Quill('#quill-editor', {
                            theme: 'snow',
                            modules: {
                                toolbar: [
                                    [{ header: [1, 2, 3, 4, 5, 6, false] }],
                                    [{ font: [] }],
                                    ['bold', 'italic'],
                                    ['link', 'blockquote'],
                                    [{ list: 'ordered' }, { list: 'bullet' }],
                                    [{ script: 'sub' }, { script: 'super' }],
                                    [{ color: [] }, { background: [] }],
                                    [{ 'align': [] }],
                                ]
                            }
                        });

                        @isset($umkm)
                            quill.root.innerHTML = @json($umkm->desc);
                        @endisset

                        quill.on('text-change', function() {
                            document.querySelector("input[name='desc']").value = quill.root.innerHTML;
                        });
                    </script>
                </div>
                @error('desc')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Contact Person Field -->
            <div class="mb-4">
                <label for="cp" class="block text-gray-700">Contact Person:</label>
                <input type="text" id="cp" name="cp" value="{{ old('cp', $umkm->cp ?? '') }}" class="mt-1 p-2 border @error('cp') border-red-500 @enderror border-gray-300 rounded w-full">
                @error('cp')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image Field -->
        
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Images:</label>
                <input type="file" id="gambar" name="gambar[]" multiple class="mt-1 p-2 border @error('gambar') border-red-500 @enderror border-gray-300 rounded">
                
                @isset($umkm->gambar)
                    <img src="{{ asset('storage/' . $umkm->gambar) }}" alt="{{ $umkm->nama }}" class="mt-2 w-32">
                @endisset
                @error('images.*')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                    {{ isset($umkm) ? 'Update' : 'Create' }}
                </button>
            </div>
        </div>
    </form>
</div>

<!-- Modal Structure -->
<div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
            <h2 id="modal-title" class="text-2xl font-bold mb-4"></h2>
            <p id="modal-message"></p>
            <button onclick="closeModal()" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Close</button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
            showModal('Success', "{{ session('success') }}");
        @elseif(session('error'))
            showModal('Error', "{{ session('error') }}");
        @endif
    });

    function showModal(title, message) {
        document.getElementById('modal-title').textContent = title;
        document.getElementById('modal-message').textContent = message;
        document.getElementById('modal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }
</script>
@endsection
