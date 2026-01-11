<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $query = Galery::query();

        if ($request->has('search') && $request->search != '') {
            $query->where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('kategori', 'like', '%' . $request->search . '%');
        }

        $galleries = $query->orderBy('created_at', 'desc')->paginate(12); // Tampil 12 agar pas grid-nya

        return view('admin.pages.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.pages.gallery.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:100', // Contoh: Kegiatan, Fasilitas, Prestasi
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Wajib ada foto
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('galleries', 'public');
        }

        Galery::create($data);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Foto berhasil ditambahkan ke galeri');
    }

    public function edit(Galery $gallery)
    {
        return view('admin.pages.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Galery $gallery)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];

        $data = $request->validate($rules);

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($gallery->foto && Storage::disk('public')->exists($gallery->foto)) {
                Storage::disk('public')->delete($gallery->foto);
            }
            $data['foto'] = $request->file('foto')->store('galleries', 'public');
        }

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Data galeri berhasil diperbarui');
    }

    public function destroy(Galery $gallery)
    {
        if ($gallery->foto && Storage::disk('public')->exists($gallery->foto)) {
            Storage::disk('public')->delete($gallery->foto);
        }

        $gallery->delete();

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Foto berhasil dihapus');
    }
}
