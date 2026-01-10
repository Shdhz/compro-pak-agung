<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
    public function index(Request $request)
    {
        $query = Facility::query();

        if ($request->has('search') && $request->search != '') {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        $facilities = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.pages.facility.index', compact('facilities'));
    }

    public function create()
    {
        return view('admin.pages.facility.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'badge' => 'nullable|string|max:50', // Label pendek, misal: "Outdoor", "AC", "Lab"
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('facilities', 'public');
        }

        Facility::create($data);

        return redirect()->route('admin.facility.index')
            ->with('success', 'Fasilitas berhasil ditambahkan');
    }

    public function edit(Facility $facility)
    {
        return view('admin.pages.facility.edit', compact('facility'));
    }

    public function update(Request $request, Facility $facility)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'badge' => 'nullable|string|max:50',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];

        $data = $request->validate($rules);

        if ($request->hasFile('thumbnail')) {
            // Hapus gambar lama
            if ($facility->thumbnail && Storage::disk('public')->exists($facility->thumbnail)) {
                Storage::disk('public')->delete($facility->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('facilities', 'public');
        }

        $facility->update($data);

        return redirect()->route('admin.facility.index')
            ->with('success', 'Fasilitas berhasil diperbarui');
    }

    public function destroy(Facility $facility)
    {
        if ($facility->thumbnail && Storage::disk('public')->exists($facility->thumbnail)) {
            Storage::disk('public')->delete($facility->thumbnail);
        }

        $facility->delete();

        return redirect()->route('admin.facility.index')
            ->with('success', 'Fasilitas berhasil dihapus');
    }
}
