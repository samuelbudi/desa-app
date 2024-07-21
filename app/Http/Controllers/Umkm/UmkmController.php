<?php

namespace App\Http\Controllers\Umkm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umkm = Umkm::with(['images' => function ($query) {
            $query->limit(1); // Fetch only the first image
        }])->paginate(10);
        return view('umkm.index', compact('umkm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('umkm.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'desc' => 'required|string',
            'cp' => 'required|string|max:255',
            'gambar.*' => 'nullable|image|max:2048', // Validate multiple gambar
        ]);

        $umkm = Umkm::create($validatedData);

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $image) {
                $path = $image->store('gambar', 'public');
                $umkm->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('umkm.index')->with('Success', 'umkm created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $umkm = Umkm::findOrFail($id);
        $images = $umkm->images;
        return view('umkm.detail', compact('umkm', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('umkm.form', compact('umkm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, umkm $umkm)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'desc' => 'required|string',
            'cp' => 'required|string|max:255',
            'gambar.*' => 'required|image|max:2048',
        ]);

        $umkm->update($validatedData);

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $image) {
                $path = $image->store('gambar', 'public');
                $umkm->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('umkm.index')->with('success', 'umkm updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $umkm = Umkm::findOrFail($id);
        $umkm->delete();

        return redirect()->route('umkm.index')->with('success', 'umkm deleted successfully.');
    }
}
