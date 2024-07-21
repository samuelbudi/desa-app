<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($wisata) ? 'Edit' : 'Create' }} Wisata</title>
</head>
<body>
    <h1>{{ isset($wisata) ? 'Edit' : 'Create' }} Wisata</h1>
    
    <form action="{{ isset($wisata) ? route('wisata.update', $wisata->id) : route('wisata.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($wisata))
            @method('PUT')
        @endif

        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama', $wisata->nama ?? '') }}" required>
        </div>
        
        <div>
            <label for="desc">Description:</label>
            <input type="text" id="desc" name="desc" value="{{ old('desc', $wisata->desc ?? '') }}" required>
        </div>
        
        <div>
            <label for="cp">Contact Person:</label>
            <input type="text" id="cp" name="cp" value="{{ old('cp', $wisata->cp ?? '') }}" required>
        </div>
        
        <div>
            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar" {{ isset($wisata) ? '' : 'required' }}>
        </div>

        <div>
            <button type="submit">{{ isset($wisata) ? 'Update' : 'Create' }}</button>
        </div>
    </form>
</body>
</html>
