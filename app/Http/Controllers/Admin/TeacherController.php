<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $query = Teacher::query();

        // Searching berdasarkan Nama atau NIP
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%$search%")
                    ->orWhere('nip', 'like', "%$search%");
            });
        }

        $teachers = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.pages.teacher.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.pages.teacher.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|numeric|unique:teachers,nip', // NIP boleh kosong, tapi kalau ada harus unik
            'jabatan' => 'required|string',
            'jabatan_spesifik' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Max 2MB
        ]);

        // Handle Upload Foto
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('teachers', 'public');
        }

        Teacher::create($data);

        return redirect()->route('admin.teacher.index')->with('success', 'Data guru berhasil ditambahkan');
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.pages.teacher.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|numeric|unique:teachers,nip,' . $teacher->id,
            'jabatan' => 'required|string',
            'jabatan_spesifik' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];

        $data = $request->validate($rules);

        // Handle Ganti Foto
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($teacher->foto && Storage::disk('public')->exists($teacher->foto)) {
                Storage::disk('public')->delete($teacher->foto);
            }
            // Upload foto baru
            $data['foto'] = $request->file('foto')->store('teachers', 'public');
        }

        $teacher->update($data);

        return redirect()->route('admin.teacher.index')->with('success', 'Data guru berhasil diperbarui');
    }

    public function destroy(Teacher $teacher)
    {
        // Hapus file foto dari storage sebelum hapus data di DB
        if ($teacher->foto && Storage::disk('public')->exists($teacher->foto)) {
            Storage::disk('public')->delete($teacher->foto);
        }

        $teacher->delete();

        return redirect()->route('admin.teacher.index')->with('success', 'Data guru berhasil dihapus');
    }
}
