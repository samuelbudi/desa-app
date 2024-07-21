<?php

namespace App\Http\Controllers\Wisata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisata = Wisata::with(['images' => function ($query) {
            $query->limit(1); // Fetch only the first image
        }])->paginate(10);
        return view('wisata.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wisata.form');
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
            'gambar.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate multiple gambar
        ], [
            'gambar.*.image' => 'Each file must be an image.',
            'gambar.*.mimes' => 'Each image must be a file of type: jpeg, png, jpg, gif, svg.',
            'gambar.*.max' => 'Each image may not be greater than 2MB.',
        ]);

        $wisata = Wisata::create($validatedData);

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $image) {
                $path = $image->store('gambar', 'public');
                $wisata->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('wisata.index')->with('Success', 'Wisata created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $wisata = Wisata::findOrFail($id);
        $images = $wisata->images;
        return view('wisata.detail', compact('wisata', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('wisata.form', compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wisata $wisata)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'desc' => 'required|string',
            'cp' => 'required|string|max:255',
            'gambar.*' => 'nullable|image|max:2048',
        ]);

        $wisata->update($validatedData);

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $image) {
                $path = $image->store('gambar', 'public');
                $wisata->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('wisata.index')->with('success', 'Wisata updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->delete();

        return redirect()->route('wisata.index')->with('success', 'Wisata deleted successfully.');
    }
}
